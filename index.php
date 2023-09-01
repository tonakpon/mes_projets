<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du périmètre d'un rectangle</title>
    <link rel="stylesheet" href="CSS/perimetre.css"> 
</head>
<body>
    <h3>Sur cette page, vous pouvez calculer le périmètre d'un rectangle</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Entrer la valeur de la longeur : <input type="number" name="longueur"> <br><br>
        Entrer la valeur de largeur : <input type="number" name="largeur"><br><br>
        <input type="submit"> <br><br>
    </form>
    <?php
        echo "Longueur = " .$_POST['longueur']. "<br>"; 
        echo "Largeur = " .$_POST['largeur']. "<br>";
        echo "<br>";
        $x = $_POST['longueur'];
        $y = $_POST['largeur'];
        echo "Le périmètre est: " . ($x + $y)*2 . "<br>" ;
    ?>
</body>
</html>