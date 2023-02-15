<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try {
            $server = "localhost";
            $login = "root";
            $password = "";
            $dataBase = "coomeet";
    
            $connexion = new PDO ("mysql:host=$server;dbname=$dataBase" , $login, $password);
            $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $codeSql = "CREATE TABLE SYLVIANNE(
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                date INT(10),
                minute INT(10),
                point INT(10),
                pause VARCHAR(10)
            )";
            $connexion->exec($codeSql);
            echo "table Sylvianne creé";

            $codeSql = "CREATE TABLE SYLVANNAH(
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                date INT(10),
                minute INT(10),
                point INT(10),
                pause VARCHAR(10)
            )";
            $connexion->exec($codeSql);
            echo "table Sylvannah creé";
            

        } 
        catch (PDOException $e) {
            echo "Echec de la creation de table.";
        };
    ?>
</body>
</html>