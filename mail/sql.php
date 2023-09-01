<?php
    include 'conn.php';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE TABLE email ( 
            id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            pseudo VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL, 
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
        $conn->exec($sql);
            echo 'La table enregistrement est créé avec succès';
            $conn->exec($sql);
        
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>