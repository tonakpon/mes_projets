<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année bissextile ou non</title>
    <link rel="stylesheet" href="CSS/bissextile.css">
</head>
<body>
    <p>Cette page vous permettra de savoir si l’année que vous saisirez est bissextile ou pas.</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="Annee">Entrer l'année :</label>
            <input type="number" name="annee">
            <input type="submit"> <br>
    </form>
    <?php
        $x = $_POST['annee'] ;
        if ( $x % 4 == 0 or $x % 100 == 0 or $x % 400 == 0) {
                
            echo '<p class=pa>L’année ' .$x. ' est une année bissextile (elle compte 366 jours).</p>' ;
        }   
        else {
            echo '<p class=pb>L’année '.$x.' n’est pas une année bissextile (elle compte 365 jours).</p>' ;
        }
    ?>
</body>
</html>