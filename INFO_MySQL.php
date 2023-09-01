<?php 
// Pour créer une table               
    $sql = "CREATE TABLE etudiant ( 
    id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenoms VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    telephone INT(12) NOT NULL,
    adresse VARCHAR(255) NOT NULL )";
    $conn->exec($sql); // Utilisé exec() parceque le resultat n'est pas retourné
    echo 'La table Etudiant est créé avec succès'; 

// Pour obtnir le dernier id
    $last_id = $conn->lastInsertId(); // Pour obtnir le dernier id

// Pour insèrer les donnés dans la base
    $sql = "INSERT INTO etudiant (nom, prenoms, email, telephone, adresse)
            VALUE ('Sagbo', 'Samson', 'sagbosamson@gmail.com', '96973327', 'QtrDowa')";
    $conn->exec($sql); // Utilisé exec() parceque le resultat n'est pas retourné
            echo 'Donnés inserrés'; 
// Pour insèrer plusieurs ligne de donnés
        // avant la transaction
     $conn->beginTransaction();
         // requête sql 
            $conn->exec("INSERT INTO etudiant (nom, prenoms, email, telephone, adresse)
            VALUE ('Sagbo', 'Elie', 'sagboelie@gmail.com', '96347464', 'QtrAkonnaboè')");
            $conn->exec("INSERT INTO etudiant (nom, prenoms, email, telephone, adresse)
            VALUE ('Sagbo', 'Samsine', 'sagbosamsine@gmail.com', '41420229', 'QtrNiamey')"); 
            $conn->exec("INSERT INTO etudiant (nom, prenoms, email, telephone, adresse)
            VALUE ('Sagbo', 'Dina', 'dinasagbo7@gmail.com', '51579606', 'QtrOuando')");
            echo 'Donnés plusieurs inserrés';
         // valider la transaction
    $conn->commit();
        echo "Donnés plusieurs inserrés";
// Préparer une requête qui va permettre d'insèrer plusieurs lignes
        $stmt = $conn->prepare("INSERT INTO etudiant (nom, prenoms, email, telephone, adresse)
        VALUES (:nom, :prenoms, :email, :telephone, :adresse)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenoms', $prenoms);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':adresse', $adresse);

        // La ligne
        $nom = "Ebiyi";
        $prenoms ="Héribert";
        $email = "heribert@gmail.com";
        $telephone ="52520000";
        $adresse = "Unité";
        $stmt->execute();

        // Ensuite cette ligne
        $nom = "Houyet";
        $prenoms ="Ezéckiel";
        $email = "hounyet@gmail.com";
        $telephone ="96960000";
        $adresse = "Qtr Koutongbe";
        $stmt->execute();

        // Enfin cette ligne
        $nom = "Dohou";
        $prenoms ="Martine";
        $email = "martine30@gmail.com";
        $telephone ="99920052";
        $adresse = "Qtr Gya";
        $stmt->execute();
        echo 'Donnés préparées entrées';
// Pour selectionner des requêtes 
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>nom</th><th>prenoms</th><th>email</th><th>telephone</th><th>adresse</th></tr>";
    
    class TableRows extends RecursiveIteratorIterator {
      function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
      }
    
      function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
      }
    
      function beginChildren() {
        echo "<tr>";
      }
    
      function endChildren() {
        echo "</tr>" . "\n";
      }
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "essaie";

    try {
        $conn = new PDO ("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, nom, prenoms, email, telephone, adresse FROM etudiant WHERE nom='Sagbo'");
        $stmt->execute();                                                                    // ORDER BY nom DESC ou ASC
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
          echo $v;
        }
    } catch (PDOException $e) {
            echo 'Erreur de connexion' .$e->getMessage();
    }
    $conn = null;
// Pour afficher les résultats de requêtes sur une même ligne sans utiliser un tableau
        $stmt = $conn->prepare("SELECT id, nom, prenoms, email, telephone, adresse FROM etudiant  WHERE nom='Sagbo'");
        $stmt->execute();  

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['nom'].' ';
        echo $row['prenoms'].' ';
        echo $row['email'].' ';
        echo $row['telephone'].' ';
        echo $row['adresse'].'<br>';
        }
// Pour ranger les résultats de requête 
        $stmt = $conn->prepare("SELECT * FROM etudiant  WHERE nom='Sagbo'");
        $stmt->execute();  

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $row['nom'].'';
        $row['prenoms'].'';
        $row['email'].'';
        $row['telephone'].'';
        $row['adresse'].'<br>';
        echo 'nom : '.$row['nom']. '<br> prenoms : '  .$row['prenoms']. '<br> email :' .$row['email']. '<br> telephone :' .$row['telephone']. '<br> adresse : ' .$row['adresse']. '<br><br>';
}
?>