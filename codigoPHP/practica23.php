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
         * Fecha de última modificación: 26/10/2021
         * @version 1.0
         * @author Sasha
         * 
         * Formulario que muestra en la misma página las preguntas y respuestas
         * recogidas, y comprueba que los campos no estén vacíos o la información
         * sea errónea.
         */
        include '../core/210322ValidacionFormularios.php';  //Librería de validación.

        //Definición de constantes para el parámetro Obligatorio.
        define("OBLIGATORIO", 1);
        define("OPCIONAL", 2);

        /*
         * Compración si el formulario ha sido enviado.
         */
        if (isset($_REQUEST['submit'])) {
            /*
             * Manejador de errores. Por defecto asume que no hay ningún error,
             * si encuentra un error se pone a false.
             */
            $bEntradaOK = true;
            /*
             * Registro de errores. Valida todos los campos.
             */
            $aErrores = [
                /*
                 * El nombre debe tener un tamaño máximo de 300 y mínimo de 3.
                 * Es un campo obligatorio.
                 */
                'name' => validacionFormularios::comprobarAlfabetico($_REQUEST['name'], 300, 3, OBLIGATORIO),
                /*
                 * La edad debe ser un entero entre 0 y 120, ambos incluidos.
                 * Es un campo obligatorio.
                 */
                'age' => validacionFormularios::comprobarEntero($_REQUEST['age'], 120, 0, OBLIGATORIO)
            ];
            
            /*
             * Recorrido del array de errores. Si existe alguno, indica que
             * la entrada es incorrecta.
             */
            foreach ($aErrores as $sCampo => $mError) {
                if($mError!=null){
                    $bEntradaOK = false;
                    echo $mError;
                }
            }
            
        } else {
            /*
             * Dado que el formulario aún no se ha enviaddo, la entrada todavía
             * no está validada.
             */
            $bEntradaOK = false;
        }

        /*
         * Si la entrada es correcta, muestra la información introducida.
         * Si es incorrecta, muestra de nuevo el formulario hasta que se
         * introduzcan correctamente los datos.
         */
        if ($bEntradaOK) {
            //Recogida de los datos introducidos.
            $sName = $_REQUEST['name'];
            $iAge = intval($_REQUEST['age']);
            
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
