<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 23</title>
        <link href="../webroot/css/forms.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <h1>Formulario del ejercicio 23</h1>
            <h2>Enviado el formulario con la información correcta, mostrará la información con que se ha rellenado</h2>
        </header>
        <?php
        /**
         * Fecha de creación: 21/10/2021
         * Fecha de última modificación: 22/10/2021
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
            /*
             * Registro de errores.
             */
            //$aErrores = array();
            
            //Recogida de los datos introducidos.
            $sName = $_REQUEST['name'];
            $sAge = $_REQUEST['age'];

            //Comprueba si se ha introducido un nombre.
            if ($sName == '') {
                $bEntradaOK = false;
            }
            
            /*
             * Comprueba si se han introducido datos en la edad.
             * Comprueba si el número de edad introducido es 0 o más.
             */
            if($sAge==''){
                $bEntradaOK = false;
            }
            else{
                if (intval($iAge) < 0) {
                    $bEntradaOK = false;
                }
            }
            
        } else {
            /* 
             * Dado que el formulario aún no se ha enviaddo, la entrada todavía
             * no está validada.
             */
            $bEntradaOK = false;
        }

        if ($bEntradaOK) {
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
        } else {
            /*
             * Por cada input, el valor por defecto se inicializa al que
             * tenga $_REQUEST, si es que tiene alguno.
             */
            
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
