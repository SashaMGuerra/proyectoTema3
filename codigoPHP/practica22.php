<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 22</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
        <link href="../webroot/css/forms.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
            <h1>Formulario del ejercicio 22</h1>
            <h2>Enviado el formulario, mostrará la información con que se ha rellenado</h2>
        </header>
        <main>
        <?php
        /**
         * Fecha de creación: 21/10/2021
         * Fecha de última modificación: 21/10/2021
         * @version 1.0
         * @author Sasha
         * 
         * Formulario que muestra en la misma página las preguntas y respuestas
         * recogidas.
         */
        
        /*
         * isset devuelve si una variable está definida.
         */
        if (isset($_REQUEST['submit'])) {
            //Inicialización de variables con la información recibida.
            $sName = $_REQUEST['name'];
            $iAge = $_REQUEST['age'];

            //Mostrado del contenido de las variables.
            echo '<ul>';
            echo '<li>Nombre: ' . $sName . '</li>';
            echo '<li>Edad: ' . $iAge . '</li>';
            echo '</ul>';

            //Mostrado del contenido de la variable $_REQUEST formtateada.
            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';
        }
        else{
        
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for="name">Nombre: </label>
            <input type="text" id="name" name="name">
            <label for="age">Edad: </label>
            <input type="number" id="age" name="age">
            <input type="submit" name="submit" value="Enviar">
            
        </form>
            <?php
            }
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
    </body>
</html>
