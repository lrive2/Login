<?php 

    $servidor = "mysql:dbname=php_login; host = localhost";
    $usuario = "root";
    $password = "";

    try{
        
        $pdo = new PDO($servidor, $usuario, $password);

     //   echo "Conectado..";

    }catch(PDOException $e) {

            echo "No conectado : " .$e->getMessage();
    }

?>
