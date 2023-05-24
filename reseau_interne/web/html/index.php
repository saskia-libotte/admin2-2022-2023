<!DOCTYPE html>
<html>
  <head>
    <title>Marchand</title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
          
        </tr>
      </thead>
      <tbody>
        <?php echo 'Bienvenue sur le site de Woodytoys !'; ?>

        <?php

          // Connexion à la base de données
          $servername = "192.168.0.3";
          $username = "root";
          $password = "user123";
          $dbname = "woodytoys";

          $conn = new MySQLi($servername, $username, $password, $dbname);

          // Vérification de la connexion
          if ($conn->connect_error) {
            die("The connection failed: " . $conn->connect_error);
          }

          // Récupération des données de la table "customers"
          $sql = "SELECT * FROM customers";
          $result = $conn->query($sql);

          // Affichage des données dans un tableau HTML
          if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nom</th><th>Prix</th></tr>";
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 résultats";
          }

          // Fermeture de la connexion
          $conn->close();
          ?>

      </tbody>
    </table>
  </body>
</html>
