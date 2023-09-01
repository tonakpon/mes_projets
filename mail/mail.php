<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mesprojets/mail/mail.css">
</head>
<body><br><br>
<form action="traitement.php" method="post" >
   <div class="container"><br>
        <h1>Inscription</h1>
        <div class="row">
            <div class="row">
                <div class="col-md-3 offset-md-4 mb-3">
                    <label for="" class="form-label">Pseudo</label>
                    <input type="text" class="form-control" id="" value="" name="pseudo" required>
                    <div id="emailHelp" class="-text"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-4 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label >
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-4 mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            </div>  
            <div class="row">
                <div class="col-md-3 offset-md-4 mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Se rappeller de moi</label>
                </div>
            </div>
            <div class="row">
                <div class=">col-md-3 offset-md-5 mb-3"> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        <br>
    </div>
</form><br><br>

    <script src="bootstrap/js/bootstrap.min.css"></script>
</body>
</html>