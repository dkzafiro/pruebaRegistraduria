<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        try {

            $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";
            $resultado = $base->prepare($sql);

            $login = htmlentities(addslashes($_POST["login"]));
            $password = htmlentities(addslashes($_POST["password"]));

            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);

            $resultado->execute();

            $numero_registro = $resultado->rowCount();

            if ($numero_registro != 0) {
                //echo "<h2>Adelante!!<h2>";
                
                session_start();
                $_SESSION["usuario"]=$_POST["login"];
                
                 header("location:usuarios_registrados.php");
                
            } else {

                header("location:login.php");
            }
        } catch (Exception $exc) {
            die("Error: " . $exc->getMessage());
        }
        ?>
    </body>
</html>
