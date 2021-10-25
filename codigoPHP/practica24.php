<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 22/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 24</title>
        <link href="../webroot/css/forms.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <h1>Formulario del ejercicio 24</h1>
            <h2>Enviado el formulario con la información correcta, mostrará la información con que se ha rellenado. <br>Mantiene los datos correctos si otros estaban equivocados.</h2>
        </header>
        <?php
        /**
         * Fecha de creación: 22/10/2021
         * Fecha de última modificación: 25/10/2021
         * @version 1.0
         * @author Sasha
         * 
         * Formulario que muestra en la misma página las preguntas y respuestas
         * recogidas, y comprueba que los campos no estén vacíos o la información
         * sea errónea.
         * Si se tiene que volver a rellenar el formulario pero hay campos
         * correctos, no se necesitará volver a teclearlos.
         */
        
        include '../core/210322ValidacionFormularios.php'; //Librería de validación.
        
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
            $aErrores = [];
            
            //Recogida de los datos introducidos.
            $sName = $_REQUEST['name'];
            $iAge = intval($_REQUEST['age']);

            /*
             * Validación de los campos.
             */
            
            /*
             * Validación del nombre. 
             * Debe tener un tamaño máximo de 300 y mínimo de 3.
             * Es un campo obligatorio.
             * En caso de existir error, indica que la entrada es incorrecta,
             * añade el error al array de errores y limpia el REQUEST.
             */
            if(validacionFormularios::comprobarAlfabetico($sName, 300, 3) != null){
                $bEntradaOK = false;
                $aErrores = array_push(validacionFormularios::comprobarAlfabetico($sName));
                $_REQUEST['name'] = '';
            }
            
            /*
             * Validación de la edad.
             * Debe ser un entero entre 0 y 120, ambos incluidos.
             * Es un campo obligatorio.
             * En caso de existir error, indica que la entrada es incorrecta,
             * añade el error al array de errores y limpia el REQUEST.
             */
            if(validacionFormularios::comprobarEntero($iAge, 120, 0, true) != null){
                $bEntradaOK = false;
                $aErrores = array_push(validacionFormularios::comprobarEntero($iAge));
                $_REQUEST['age'] = '';
            }
            
        } else {
            /* 
             * Dado que el formulario aún no se ha enviado, la entrada todavía
             * no está validada.
             */
            $bEntradaOK = false;
        }

        
        /*
         * Si la entrada es correcta, muestra la información introducida.
         * Si es incorrecta o todavía no se ha enviado, muestra de nuevo
         * el formulario hasta que se introduzcan correctamente los datos.
         */
        if ($bEntradaOK) {
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
            <input type="text" id="name" name="name" value="<?php echo $_REQUEST['name'] ?>">
            <label for="edad">Edad: </label>
            <input type="number" id="age" name="age" value="<?php echo $_REQUEST['age'] ?>">

            <input type="submit" name="submit" value="Enviar">
        <?php
        }
        ?>
        </form>
    </body>
</html>
