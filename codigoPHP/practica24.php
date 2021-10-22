<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 22/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 24</title>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 22/10/2021
         * Fecha de última modificación: 22/10/2021
         * @version 1.0
         * @author Sasha
         * 
         * Formulario que muestra en la misma página las preguntas y respuestas
         * recogidas, y comprueba que los campos no estén vacíos o la información
         * sea errónea.
         * Si se tiene que volver a rellenar el formulario pero hay campos
         * correctos, no se necesitará volver a teclearlos.
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
            $aErrores = array();
            
            //Recogida de los datos introducidos.
            $sName = $_REQUEST['name'];
            $sAge = $_REQUEST['age'];

            
            /*
             * Comprobación de errores.
             */
            
            //Comprueba si se ha introducido un nombre.
            if (empty($sName)) {
                $_REQUEST['name'] = '';
                $bEntradaOK = false;
            }
            
            /*
             * Comprueba si se han introducido datos en la edad.
             * Comprueba si el número de edad introducido es 0 o más.
             */
            if(empty($sAge) || intval($sAge)<0){
                $_REQUEST['age'] = '';
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
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for="name">Nombre: </label>
            <input type="text" id="name" name="name" value="<?php echo $_REQUEST['name'] ?>">
            <label for="edad">Edad: </label>
            <input type="number" id="age" name="age" value="<?php echo $_REQUEST['age'] ?>">

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
