<!DOCTYPE html>
<html>
  <head>
    <title>Product</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          // Connect to the database
          $conn = mysqli_connect('192.168.0.3', 'root', 'user123', 'woodytoys');

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Query the Products table
          $sql = "SELECT * FROM Products";
          $result = $conn->query($sql);

          // Output each row as a table row
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["Product"] . "</td>";
              echo "<td>" . $row["Quantity"] . "</td>";
              echo "<td>" . $row["Price"] . "</td>";
              echo "</tr>";
            }
          }

          // Close the database connection
          $conn->close();
        ?>
      </tbody>
    </table>
  </body>
</html>
