<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_formulaire</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mesprojets/tp2_formulaire&db/style.css">
    <!--<link rel="stylesheet" href="/mesprojets/tp1/inscription.css">-->
</head>
<body> 
    <form action="traitement.php" method="post">
    <div class="container">
        <div class="row">
            <br>
        <h1 class="mt-10">Inscrivez-vous maintenant</h1>
            <div class="row">
            <div class="col-md-4 offset-md-1 mb-3">
                <label for="" class="form-label">Noms :</label>
                <input type="text" class="form-control" id="" value="" name="name" required>
            </div>
            <div class="col-md-4 offset-md-1 mb-3">
                <label for="" class="form-label">Prénoms :</label>
                <input type="text" class="form-control" id="" value="" name="fname" required>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4 offset-md-1 mb-3">
                <label for="" class="form-label">Tel :</label>
                <input type="text" class="form-control" id="" value="" name="tel" required>
                    
            </div>
            <div class="col-md-4 offset-md-1 mb-3">
                <label for="" class="form-label">Date Naiss :</label>
                <input type="date" class="form-control" id="" value="" name="date" required>
            </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Enregistrer</button> <br><br><br>
            </div>
        </div>
    </div>
    </form>
    <script src="bootstrap/js/bootstrap.min.css"></script>
    
</body>
</html>