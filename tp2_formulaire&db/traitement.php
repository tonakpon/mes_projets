<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <?php
        /*if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['tel']) && !empty($_POST['date'])) {
            $name = $_POST['name']; 
            $fname = $_POST['fname']; 
            $tel = $_POST['tel'];
            $date = $_POST['date'];
            header("Location:resultat.php?name=$name&fname=$fname&tel=$tel&date=$date"); 
        } else {
            echo 'Veuillez entrer des données exactes';
        } */
        /*$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "essaie";*/
        include 'conn.php';

        if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['tel']) && !empty($_POST['date'])) {
            $name = $_POST['name']; 
            $fname = $_POST['fname']; 
            $tel = $_POST['tel'];
            $date = $_POST['date'];
        } else {
            echo 'Veuillez entrer des données exactes';
        } 
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqpl = "INSERT INTO formulaire (nom, prenoms, telephone, dat_naiss)
            VALUES ('$name', '$fname', '$tel', '$date')";
            $conn->exec($sqpl);
            header("Location:resultat.php?name=$name&fname=$fname&tel=$tel&date=$date"); 

        } catch (PDOException $e) {
            echo $sqpl . "<br>" . $e->getMessage();
        }
        
    ?>
</body>
</html>
