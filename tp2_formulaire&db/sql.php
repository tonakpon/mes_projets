<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "essaie";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Création de table
            /*$sql = "CREATE TABLE formulaire (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Nom VARCHAR(30) NOT NULL,
            Prenoms VARCHAR(30) NOT null,
            Telephone VARCHAR(12) NOT NULL,
            Dat_Naiss DATE,
            Enreg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            $conn->exec($sql);
            echo 'Table créé';*/
        $sql ="UPDATE formulaire SET Dat_naiss='12/02/1999' WHERE id='2'";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "br" . $e->getMessage();
    }
// Requête préparée pour inscrire 
    /*if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['tel']) && !empty($_POST['date'])) {
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $tel = $_POST['tel'];
        $date = $_POST['date'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "essaie";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête préparée
        $sql = "INSERT INTO formulaire (nom, prenoms, telephone, dat_naiss) VALUES (:nom, :prenoms, :telephone, :datenaiss)";
        $stmt = $conn->prepare($sql);

        // Liaison des paramètres
        $stmt->bindParam(':nom', $name);
        $stmt->bindParam(':prenoms', $fname);
        $stmt->bindParam(':telephone', $tel);
        $stmt->bindParam(':datenaiss', $date);

        // Exécution de la requête préparée
        $stmt->execute();

        echo 'Enregistrement réussi pour <strong>' . $name . ' ' . $fname;
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
} else {
    echo 'Veuillez entrer des données exactes';
}*/

?>
</body>
</html>