<?php
    /*echo "<table style='border: solid 1px black;'>";
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
    }*/
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "essaie";

    try {
        $conn = new PDO ("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$sql = "UPDATE etudiant SET id=4 where prenoms='martine'" ;
        //$sql = "UPDATE etudiant SET id=5 where adresse='Unité'" ;
        //$sql = "UPDATE etudiant SET id=6 where nom='Houyet'" ;
       // $sql = "SELECT id, nom, prenoms FROM etudiant WHERE nom='Sagbo'";
       // $conn->exec($sql);
        
        $stmt = $conn->prepare("SELECT * FROM etudiant  WHERE nom='Sagbo'");
        $stmt->execute();  

       while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $row['nom'].'';
         $row['prenoms'].'';
         $row['email'].'';
         $row['telephone'].'';
         $row['adresse']. '';
        echo 'Nom : '.$row['nom']. '<br> Prénoms : '  .$row['prenoms']. '<br> Email : ' .$row['email']. '<br> Télephone : ' .$row['telephone']. '<br> Adresse : ' .$row['adresse']. '<br><br>';
      }

    } catch (PDOException $e) {
            echo 'Erreur de connexion' .$e->getMessage();
    }
    $conn = null;
?>