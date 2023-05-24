<!DOCTYPE html>
<html>
  <head>
    <title>Product</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>nom</th>
          <th>mail</th>
        </tr>
      </thead>
      <tbody>
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
          // Connect to the database
          //$conn = mysqli_connect('192.168.0.3', 'root', 'user123', 'woodytoys');
          $conn = new MySQLi('192.168.0.3', 'root', 'user123');

          // Check connection
          if ($conn->connect_error) {
              echo "Not connected successfully";
          } else {
              echo "Connected successfully";

              // Select the database
              $conn->select_db('woodytoys');

              // Query the Customers table
              $sql = "SELECT * FROM Customers";
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $result = $stmt->get_result();

              // Output each row as a table row
              if ($result->num_rows > 0) {
                  echo "<table>";
                  while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row["ID"] . "</td>";
                      echo "<td>" . $row["Nom"] . "</td>";
                      echo "<td>" . $row["Email"] . "</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
              }

              // Close the database connection
              $conn->close();
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
