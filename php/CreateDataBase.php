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
        $password = "";

        try {
            $connexion = new PDO("mysql:host=$server", $login, $password);
            $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $connexion -> exec("CREATE DATABASE COOMEET");
            echo  "Database COOMEET CREATE";

        } catch (PDOException $e) {
            echo "Echec de la connexion : " . $e -> getMessage();
        }

    ?>
</body>
</html>