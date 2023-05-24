<!DOCTYPE html>
<html>
  <head>
    <title>Marchand</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
          // Connect to the database
          $conn = new MySQLi('192.168.0.3', 'root', 'user123');

          // Select the database
          $conn->select_db('woodytoys');

          // Query the Customers table
          $sql = "SELECT * FROM Customers";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          $result = $stmt->get_result();

          // Output each row as a table row
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["ID"] . "</td>";
              echo "<td>" . $row["Nom"] . "</td>";
              echo "<td>" . $row["Email"] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='3'>Aucun enregistrement trouvé</td></tr>";
          }

          // Close the database connection
          $conn->close();
        } catch (Exception $e) {
          echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
