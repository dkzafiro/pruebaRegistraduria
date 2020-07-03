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
        <link rel="stylesheet" href="CSS/CSS.css">
    </head>
    <body>
        <header>
            <figure id="img-div">
                <img
                    id="image"
                    src="https://www.registraduria.gov.co/IMG/rnec-logo.png"
                    alt="Logo Registraduria"
                    />
                <figcaption id="img-caption">

                </figcaption>
            </figure>
        </header>
        <hr />
        <div class="title">
            <br>
            <h1>REGISTRADURÍA NACIONAL DEL ESTADO CIVIL</h2>
                <h4 class="iden">Identificación</h4>
        </div>
        <br/>
        <div class="container">
            <h2>Segimiento y Gestion CA</h2>
            <hr class="hr2" />
            <br/>
            <form action="comprueba_login.php" method="post">
                <input name="login" type="text" class="email" placeholder="Usuario">
                <br/>
                <input name="password" type="password" class="pwd" placeholder="Contraseña">
                <br/>
                <br/>
                <button type="submit" class="aceptar">
                    <span>Aceptar</span>
                </button>
                <button class="limpiar">
                    <span>Limpiar</span>
                </button>
            </form>
            
            <br/>
            <a href="#" class="link">
                Restablecer Contraseña
            </a>
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
