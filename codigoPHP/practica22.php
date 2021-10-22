<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 22</title>
    </head>
    <body>
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
            $sName = $_REQUEST['name'];
            $iAge = $_REQUEST['age'];

            echo '<ul>';
            echo '<li>Nombre: ' . $sName . '</li>';
            echo '<li>Edad: ' . $iAge . '</li>';
            echo '</ul>';

            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';
        }
        else{
            /* Si se comprueba, el array está vacío*/
        
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
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
            <?php
            }
            ?>
        </form>
    </body>
</html>
