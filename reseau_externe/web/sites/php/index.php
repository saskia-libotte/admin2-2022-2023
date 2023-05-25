<!DOCTYPE html>
<html>
<head>
    <title>Woodytoys B2B</title>
    <link rel="icon" href="https://static.vecteezy.com/ti/photos-gratuite/p2/963590-gros-plan-d-un-jouet-en-bois-avion-modele-sculpte-a-la-main-photo.jpg" type="image/jpeg">
    
</head>
<body>
    <h2>Ajouter un jouet !</h2>
    <form method="POST" action="?">
        <input type="search" placeholder="Nom du jouet" name="nomDuProduit">
        <input type="search" placeholder="Prix du jouet" name="prixDuProduit">
        <input type="search" placeholder="Quantité du jouet" name="quantiteDuProduit">
        <button type="submit">Ajouter le nouveau jouet !</button>
    </form>

    <h2>Supprimer un jouet !</h2>
    <form method="POST" action="?">
        <input type="search" placeholder="Nom du jouet à supprimer" name="nomDuProduitASupprimer">
        <button type="submit">Supprimer le jouet</button>
    </form>

    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Connect to the database
    $conn = mysqli_connect('192.168.0.3', 'root123', 'root123', 'db');
    $sql = 'SELECT * FROM cadeau';

    if ($result = $conn->query($sql)) {
        echo "<table><tr><th>Nos Produits</th><th>Prix</th><th>Quantité</th></tr>";
        while ($data = $result->fetch_assoc()) {
            echo "<tr><td>";
            echo $data['id'];
            echo "</td><td>";
            echo $data['name'];
            echo "</td><td>";
            echo $data['price'];
            echo "</td></tr>";
        }
        echo "</table>";
    }

    // Handle form submission for adding a toy
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomDuProduit']) && isset($_POST['prixDuProduit']) && isset($_POST['quantiteDuProduit'])) {
        $nomProduit = $_POST['nomDuProduit'];
        $prixDuProduit = $_POST['prixDuProduit'];
        $quantiteDuProduit = $_POST['quantiteDuProduit'];

        // Check if the toy already exists
        $checkSql = "SELECT * FROM cadeau WHERE id='$nomProduit'";
        $checkResult = $conn->query($checkSql);
        if ($checkResult->num_rows > 0) {
            echo "<p class='error'>Ce jouet existe déjà !</p>";
        } else {
            // Insert new toy into the database
            $insertSql = "INSERT INTO cadeau (id, price, name) VALUES ('$nomProduit', $quantiteDuProduit, $prixDuProduit)";
            if ($conn->query($insertSql) === TRUE) {
                echo "<p class='success'>Jouet ajouté avec succès !</p>";
                // Refresh the page to update the id list
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "<p class='error'>Erreur lors de l'ajout du jouet : " . $conn->error . "</p>";
            }
        }
    }

    // Handle form submission for deleting a toy
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomDuProduitASupprimer'])) {
        $nomProduitASupprimer = $_POST['nomDuProduitASupprimer'];

        // Delete toy from the database
        $deleteSql = "DELETE FROM cadeau WHERE id='$nomProduitASupprimer'";
        if ($conn->query($deleteSql) === TRUE) {
            echo "<p class='success'>Jouet supprimé avec succès !</p>";
            // Refresh the page to update the id list
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "<p class='error'>Erreur lors de la suppression du jouet : " . $conn->error . "</p>";
        }
    }
    ?>

</body>
</html>
