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
         * recogidas, y comprueba que los campos no estén vacíos o la información
         * sea errónea.
         */
        
        /*
         * Si el formulario no ha sido enviado devuelve el formulario.
         * Si el formulario ha sido enviado lo comprueba;
         * si está correcto muestra la información introducida,
         * si está incorrecto muestra el formulario de nuevo.
         */
        if (isset($_REQUEST['submit'])) {
            /*
             * Manejador de errores. Por defecto asume que no hay ningún error,
             * si encuentra un error se pone a false.
             */
            $bEntradaOK = true;
            //$aErrores = array();
            //Recogida de los datos introducidos.
            $sName = $_REQUEST['name'];
            $iAge = intval($_REQUEST['age']);

            //Comprueba si se ha introducido un nombre.
            if ($sName == '') {
                $bEntradaOK = false;
            }

            //Comprueba si el número de edad introducido es 0 o más.
            if ($iAge < 0) {
                $bEntradaOK = false;
            }
        } else {
            /* 
             * Dado que el formulario aún no se ha enviaddo, la entrada todavía
             * no está validada.
             */
            $bEntradaOK = false;
        }

        if ($bEntradaOK) {
            $sName = $_REQUEST['name'];
            $iAge = $_REQUEST['age'];

            echo '<ul>';
            echo '<li>Nombre: ' . $sName . '</li>';
            echo '<li>Edad: ' . $iAge . '</li>';
            echo '</ul>';

            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';
        } else {
            /* Si se comprueba, el array está vacío */
            ?>
            <form method="post">
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
