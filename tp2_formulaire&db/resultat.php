<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
        <div class="row">
            <?php        
            include 'conn.php';
                $name = $_GET['name'] ;
                $fname = $_GET['fname'] ; 
                $tel = $_GET['tel'] ;
                $date = $_GET['date'] ;
            try {
                $name = $_GET['name'] ;
                $fname = $_GET['fname'] ; 
                $tel = $_GET['tel'] ;
                $date = $_GET['date'] ;
                // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Requête
            /* $sqpl = "INSERT INTO formulaire (nom, prenoms, telephone, dat_naiss)
                VALUES ('$name', '$fname', '$tel', '$date')";
                $conn->exec($sqpl);*/
                echo 'Enregistrement réussi pour '.$name. ' ' .$fname. '</strong><br>' ;
            } catch (PDOException $e) {
                echo $sqpl . "<br>" . $e->getMessage();
            }
            echo 'Voici les détails de votre inscription <br>';
            $x = date ('Y') ;
            $y = $x - date("Y",strtotime($date)) ;
            echo 'Nom : ' .$name. '<br>';
            echo 'Prénoms : ' .$fname. '<br>';
            echo 'Tel : ' .$tel. '<br>';
            echo 'Vous avez ' .$y. 'ans<br>';
            echo '<a href="/mesprojets/tp2_formulaire&db/inscription.php">Nouvel enregistrement</a>';
        ?>
        </div>
   </div>
    <script src="bootstrap/js/bootstrap.min.css"></script>
</body>
</html>