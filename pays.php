<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays</title>
</head>
<body>
    <?php
        if (isset($_POST['pays']) && isset($_POST['nationalite'])) {
            $pays = $_POST['pays'];
            $nationalite = $_POST['nationalite'];
            echo '<h1>Votre pays est : <strong style="color : blue;">' .$pays. '</strong><h1>';
            echo '<h1>Et vous êtes de nationalité : <strong style="color : red;">' .$nationalite. '</strong><h1>';
        }
    ?>
</body>
</html>