<?php
include 'conn.php';
    $email = $_GET['email'] ;
    $pseudo = $_GET['pseudo'] ; 
    $email = $_POST['email'] ;
    $pseudo = $_POST['pseudo'] ; 
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Charger les classes de PHPMailer
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    // Instancier un nouvel objet PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Paramètres du serveur SMTP de Gmail
        $mail->SMTPDebug = 0; // 0 pour désactiver le débogage SMTP
        $mail=new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '789928950dc29b'; // Votre adresse Gmail
        $mail->Password = '********1f2f'; // Votre mot de passe Gmail
        //$mail->SMTPSecure = 'tls'; // Ou 'ssl' si vous utilisez SSL
        $mail->Port = 587; // Ou 465 si vous utilisez SSL
    
        // Destinataire et expéditeur
        $mail->setFrom('sagbosamson@gmail.com', 'Sam');
        $mail->addAddress($_POST['email'], $_POST['pseudo']);
    
        // Contenu de l'e-mail
        $mail->isHTML(true); // Définir le format du contenu en HTML (true) ou texte brut (false)
        $mail->Subject = 'Message de validation';
        $mail->Body = 'Vous venez de créer un compte sur ...';
        $mail->AltBody = 'Contenu de l\'e-mail en texte brut (si le HTML n\'est pas supporté)';
    
        // Envoyer l'e-mail
        $mail->send();
        if (!$mail->Send())
  {
    echo "Error: $mail->ErrorInfo";
  }
  else
  {
    echo "Message Sent!";
  }
        echo 'E-mail envoyé avec succès';
    } catch (Exception $e) {
   
    echo 'Erreur lors de l\'envoi de l\'e-mail : ',$e->getMessage();

}
    ?>
    
?>