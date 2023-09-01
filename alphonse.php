<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du remise</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Entrer le nombre sac : <input type="number" name=nsac><br>
    <input type="submit"><br><br>
    <link rel="stylesheet" href="CSS/perimetre.css">
    <?php
        echo 'Vous avez payé ' . $_POST['nsac'] . ' sac(s) ' ;
            echo '<br>' ;
            echo '<br>' ;
        $x = $_POST['nsac'] ;
        if ( $x > 5) {  
            $z = (45000 * $x) - 0.1 ;
            $y = ( 45000 * $x * 0.1 ) ; //Remise
            echo 'Le prix de vente de celui qui paye au délà de '  . $x . ' sacs est :' . $z . 'F' ; 
            echo '<br>' ;
            echo '<br>' ;
        } elseif ( $x >= 2) {
            $z = (45000 * $x) - 0.05 ;
            $y = ( $z * 0.05 *$x ) ; //Remise
            echo 'Le prix de vente de celui qui paye au moins 2 sacs est  :' . $z . 'F' ;
            echo '<br>' ;
            echo '<br>' ;
        } else {
            echo 'Celui qui paye 1 sac n_a pas de remise. ';
            echo '<br>' ;
            echo '<br>' ;
            echo 'Le prix de vente est : 45000F'  ;
        } 
    
    ?>
</form>
</body>
</html>