<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/mesprojets/inscription.css">
</head>
<body>
    <div class="division">
        <div>
                <h1>Inscription</h1>
            <fieldset>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    Nom : <input type="text" name="name"> Prénoms : <input type="text" name="fname"> <br><br>
                    Tel : <input type="number" name="tel"> Date Naiss : <input type="date" name="date"> <br><br>
                    <button>Valider</button>
                </form>
            </fieldset> <br><br>
            <fieldset>
                <?php
                    if (isset($_POST['name']) && isset($_POST['fname']) && isset($_POST['tel']) && isset($_POST['date']) ) {
                        $name = $_POST['name'];
                        $fname = $_POST['fname'];
                        $tel = $_POST['tel'];
                        $date = $_POST['date'];
                        echo 'Bonjour <strong>' .$name. ' ' .$fname. '</strong>.<br>'; // <strong> et </strong> Pour mettre en gras 
                        echo 'Vous trouverez ci-dessous les détails <br>';
                        echo 'de votre inscription : <br>';
                        echo 'Nom :' .$name. '<br>';
                        echo 'Prénoms : ' .$fname. '<br>' ;
                        echo 'Tel : ' .$tel. '<br>' ;
                        echo 'Date de Naissance : [<strong style="color : blue ;">' .$date. '</strong>]<br>' ;
                        $x= date('Y'); 
                        $y= $x - date("Y",strtotime($date)) ; //$date ;
                        echo 'Vous avez << <strong>' .$y. '<strong>ans >>';
                    }
                ?>
            </fieldset>
        </div>
            <div  class="multiple">
                <h1>Table de multiplication</h1>
            
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                    Saisissez le multiple : <input type="number" name="multiple"><br><br>
                    <button>Valider</button>
                </form>
                <?php
                    if (isset($_POST['multiple'])) {
                        $x = $_POST['multiple'];
                        echo 'Table de multiplication de ' .$x. '<br>';
                        for ( $y=0; $y<= 12; $y+=1) {
                           $z=$x * $y;
                           echo '<strong style="margin-left: 25px;">' .$x. '*' .$y. '=' .$z. ' </strong><br>';
                        }
                    }

                ?>
        </div>
    </div>
</body>
</html>