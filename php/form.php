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
            $server = "localhost";
            $login = "root";
            $pass = "";

            try{
            $connexion = new PDO("mysql:host=$server;dbname=coomeet", $login, $pass);
            $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $codesql = "CREATE TABLE Sylvannah(
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                date INT(10),
                minute INT(10),
                point INT(10),
                repos VARCHAR(10)
            )";

            $connexion->exec($codesql);
            echo "TABLE CREATE";
            }

            catch(PDOException $e){
                echo "Echec de la connexion : " .$e->getMessage();
            }
        ?>
</body>
</html>