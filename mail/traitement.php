
    <?php
    include 'conn.php';
        
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Charger les classes de PHPMailer
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail=new PHPMailer(); 
        // Instancier un nouvel objet PHPMailer
       $mail = new PHPMailer(true);
      //  include 'conn.php';
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
        if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['pass']) ) {
        } else {
            echo 'Veuillez entrer des données exactes';
        } 

        try {
            
            $sqpl = "INSERT INTO email (pseudo, email, password)
            VALUES ('$pseudo', '$email', '$pass')";
            $conn->exec($sqpl);
            /*echo "<p>Nous vous avons envoyé un e-mail de confirmation à $to.</p>";*/
            // Paramètres du serveur SMTP de Gmail
        //// 0 pour désactiver le débogage SMTP
        $mail=new PHPMailer(); 
        $mail->SMTPDebug = 0; 
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '20375000f1126b'; // Votre adresse Gmail
        $mail->Password = '********7d03'; // Votre mot de passe Gmail
        //$mail->SMTPSecure = 'tls'; // Ou 'ssl' si vous utilisez SSL
        $mail->Port = 2525; // Ou 465 si vous utilisez SSL
    
        // Destinataire et expéditeur
        $mail->setFrom('sagbosamson@gmail.com', 'Sam');
        $mail->addAddress($_POST['email'], $_POST['pseudo']);
    
        // Contenu de l'e-mail
        $mail->isHTML(false); // Définir le format du contenu en HTML (true) ou texte brut (false)
        $mail->Subject = 'Message de validation';
        $mail->Body = 'Vous venez de créer un compte sur ...';
        $mail->AltBody = 'Contenu de l\'e-mail en texte brut (si le HTML n\'est pas supporté)';
    
        // Envoyer l'e-mail
        $mail->send();
        echo 'E-mail envoyé avec succès';
        
       /*header("Location: message.php");
        /*header("Location: message:php?email=$email&pseudo=$pseudo");*/
        } catch (PDOException $e) {
            echo $sqpl . "<br>" . $e->getMessage();
        }

    ?>