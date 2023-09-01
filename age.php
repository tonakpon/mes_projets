<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe d'âge</title>
    <link rel="stylesheet" href="CSS/perimetre.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Entrez votre âge : <input type="number" name="age"><br><br>
    <input type="submit"> <br><br>
    <?php
        $x = $_POST['age'] ;
        echo '' . $x . 'ans :' ;
        if ($x <= 18) {
            echo '<p style="color:red; font-weight: bold;">Vous êtes Mineur</p>' ;
        } elseif ($x >= 50) {
            echo '<p style="color:red; font-weight: bold;">Vous êtes Adulte</p>' ;
        } else {
            echo '<p style="color:green; font-weight: bold;">Vous êtes Majeur</p>';
        }
    ?>
</form>
</body>
</html>