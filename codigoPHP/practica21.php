<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 21</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
        <link href="../webroot/css/forms.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
            <h1>Formulario del ejercicio 21</h1>
            <h2>Enviado el formulario, mostrará el documento tratamiento.php rellenado</h2>
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
        ?>
        <form action="tratamiento.php" method="post">
            <label for="name">Nombre: </label>
            <input type="text" id="name" name="name">
            <label for="age">Edad: </label>
            <input type="number" id="age" name="age">
            <input type="submit" name="submit" value="Enviar">
        </form>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
    </body>
</html>
