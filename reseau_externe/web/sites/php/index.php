<!DOCTYPE html>
<html>
<head>
    <title>Woodytoys B2B</title>
    
</head>
<body>
    <h1> voici les données de la base de données.</h1>

    <?php

        // Connexion à la base de données
        $servername = "192.168.0.3";
        $username = "root123";
        $password = "root123";
        $dbname = "db";

        $conn = new MySQLi($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("The connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM cadeau";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "<table><thead>";

            echo "<tr><th>ID</th><th>Nom</th><th>Prix</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td></tr>";
        }
        echo "</tbody></table>";
        } else {
            echo "0 résultats";
        }
        
        $conn->close();
    ?>

</body>
</html>
