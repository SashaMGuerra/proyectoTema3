<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Info del formulario</title>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 21/10/2021
         * Fecha de última modificación: 21/10/2021
         * @version 1.0
         * @author Sasha
         * 
         * Formulario a Tratamiento.php
         */
        
        $sName = $_REQUEST['name'];
        $iAge = $_REQUEST['age'];
        
        echo '<ul>';
        echo '<li>Nombre: '.$sName.'</li>';
        echo '<li>Edad: '.$iAge.'</li>';
        echo '</ul>';
        
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';
        
        ?>
    </body>
</html>
