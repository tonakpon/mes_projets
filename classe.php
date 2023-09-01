<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Âge</title>
    <link rel="stylesheet" href="CSS/classe.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        Entrer votre âge : <input type="number" name="age" require>
        <input type="submit"><br>
    </form> <p></p>
    <?php
        $x = $_POST['age'] ;
        echo '<br>';
        if ( $x == 0) {
            echo '<p style=" color: red ;">Désolé attendez 1ans puis essayer</p>' ;
        } elseif ( $x <= 18 ) {
            echo 'Vous avez entrez votre âge qui est ' .$x. 'ans';
            echo '<p style=" color: blue; ">Vous êtes un Mineur</p>';
        } elseif ( $x <= 50 ) {
            echo 'Vous avez entrez votre âge qui est ' .$x. 'ans';
            echo '<p style=" color: green;">Vous êtes un Majeur</p>';
        } else {
            echo 'Vous avez entrez votre âge qui est ' .$x. 'ans';
            echo '<p style=" color : red;">Vous êtes un Adulte</p>';
        }
    ?> 
</body>
</html>