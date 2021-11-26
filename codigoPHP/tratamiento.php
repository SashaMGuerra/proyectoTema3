<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Info del formulario</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
            <h1>Resultado del formulario de la práctica 21</h1>
        </header>
        <main>
            <?php
            /**
             * @since 21/10/2021
             * Fecha de última modificación: 21/10/2021
             * @version 1.0
             * @author Sasha
             * 
             * Formulario a Tratamiento.php
             */
            //Inicialización de variables con la información recibida..
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
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
