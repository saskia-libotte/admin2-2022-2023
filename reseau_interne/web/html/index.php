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

          // Connect to the database
          //$conn = mysqli_connect('192.168.0.3', 'root', 'user123', 'woodytoys');
          $conn = new MySQLi('192.168.0.3', 'root', 'user123');
        
          // Check connection
          if ($conn -> connect_error) {;
            echo "NOT Connected successfully";;
            }
            echo "Connected successfully";
          $conn->select_db('woodytoys');
            
          // Query the Products table
          $sql = "SELECT * FROM Customers";
          $result = $conn->query($sql);

          // Output each row as a table row
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["ID"] . "</td>";
              echo "<td>" . $row["Nom"] . "</td>";
              echo "<td>" . $row["Mail"] . "</td>";
              echo "</tr>";
            }
          }

          // Close the database connection
          //$conn->close();
        ?>
      </tbody>
    </table>
  </body>
</html>