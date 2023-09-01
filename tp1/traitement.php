<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <?php
        if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['tel']) && !empty($_POST['date'])) {
            $name = $_POST['name']; 
            $fname = $_POST['fname']; 
            $tel = $_POST['tel'];
            $date = $_POST['date'];
            header("Location:resultat.php?name=$name&fname=$fname&tel=$tel&date=$date"); 
        
    echo "<p>Nous vous avons envoyé un e-mail de confirmation à $fname.</p>";
} else {
    header("Location: inscription.php");
    exit;
}
?>
    ?>
    <form action="resultat.php" method="post"></form>
</body>
</html>
