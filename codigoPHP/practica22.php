<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 14</title>
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
        ?>
        <form action="tratamiento.php" method="post">
            <label for="name">Nombre: </label>
            <input type="text" id="name" name="name">
            <label for="edad">Edad: </label>
            <input type="number" id="age" name="age">
            
            <!--
            <ul>
                <li>
                    <label for="male">Hombre</label>
                    <input type="radio" id="male" name="sex">
                </li>
                <li>
                    <label for="female">Mujer</label>
                    <input type="radio" id="female" name="sex">

                </li>
            </ul>
            <label for="birthday">Fecha de nacimiento: </label>
            <input type="date" id="birthday" name="birthday">
            
            -->
            <input type="submit" name="submit" value="Enviar">
            
        </form>
    </body>
</html>