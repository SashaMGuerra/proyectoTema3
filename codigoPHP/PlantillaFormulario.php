<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 28/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - Plantilla Formulario</title>
        <link href="../webroot/css/common.css" rel="stylesheet" type="text/css"/>
        <style>
            table{
                table-layout: fixed;
                margin: auto;
                width: 100%;
            }
            span{
                color: red;
                font-size: small;
            }
            
            tr:nth-child(even) td:first-child{
                border-bottom: 1px solid gainsboro;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Plantilla de formulario</h1>
        </header>
        <main>
            <?php
            /**
             * Fecha de creación: 28/10/2021
             * Fecha de última modificación: 28/10/2021
             * @version 1.0
             * @author Sasha
             * 
             * Plantilla para formularios.
             * 
             */
            //Librería de validación.
            include '../core/210322ValidacionFormularios.php';

            //Definición de constatnes para el parámetro "obligatorio"
            define("OBLIGATORIO", 1);
            define("OPCIONAL", 0);
            define("MAX_TAMANIO_ALFA", 1000);
            define("MIN_TAMANIO_ALFA", 1);

            /*
             * Inicialización del array de elementos del formulario.
             */
            $aFormulario = [
                'inputAlfanumericoObligatorio' => '',
                'inputAlfanumericoOpcional' => '',
                'inputAlfabeticoObligatorio' => '',
                'inputAlfabeticoOpcional' => '',
                'inputEnteroObligatorio' => '',
                'inputEnteroOpcional' => '',
                'inputFloatObligatorio' => '',
                'inputFloatOpcional' => ''
            ];

            /*
             * Inicialización del array de errores.
             */
            $aErrores = [
                'inputAlfanumericoObligatorio' => '',
                'inputAlfanumericoOpcional' => '',
                'inputAlfabeticoObligatorio' => '',
                'inputAlfabeticoOpcional' => '',
                'inputEnteroObligatorio' => '',
                'inputEnteroOpcional' => '',
                'inputFloatObligatorio' => '',
                'inputFloatOpcional' => ''
            ];

            /*
             * Confirmación si el formulario ha sido enviado.
             * Si ha sido enviado, valida los campos y registra los errores.
             */
            if (isset($_REQUEST['submit'])) {
                /*
                 * Manejador de errores. Por defecto asume que no hay ningún
                 * error (true). Si encuentra alguno se pone a false.
                 */
                $bEntradaOK = true;

                /*
                 * Registro de errores. Valida todos los campos.
                 */
                $aErrores['inputAlfanumericoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['inputAlfanumericoObligatorio'], MAX_TAMANIO_ALFA, MIN_TAMANIO_ALFA, OBLIGATORIO);
                $aErrores['inputAlfanumericoOpcional'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['inputAlfanumericoOpcional']);
                $aErrores['inputAlfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['inputAlfabeticoObligatorio'], MAX_TAMANIO_ALFA, MIN_TAMANIO_ALFA, OBLIGATORIO);
                $aErrores['inputAlfabeticoOpcional'] = validacionFormularios::comprobarAlfabetico($_REQUEST['inputAlfabeticoOpcional']);
                $aErrores['inputEnteroObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['inputEnteroObligatorio'], PHP_INT_MAX, PHP_INT_MIN, OBLIGATORIO);
                $aErrores['inputEnteroOpcional'] = validacionFormularios::comprobarEntero($_REQUEST['inputEnteroOpcional']);
                $aErrores['inputFloatObligatorio'] = validacionFormularios::comprobarFloat($_REQUEST['inputFloatObligatorio'], PHP_FLOAT_MAX, PHP_INT_MIN, OBLIGATORIO);
                $aErrores['inputFloatOpcional'] = validacionFormularios::comprobarFloat($_REQUEST['inputFloatOpcional']);
                 
                /*
                 * Recorrido del array de errores.
                 * Si existe alguno, cambia el manejador de errores a false
                 * y limpia el campo en el $_REQUEST.
                 */
                foreach ($aErrores as $sCampo => $sError) {
                    if ($sError != null) {
                        $_REQUEST[$sCampo] = ''; //Limpieza del campo.
                        $bEntradaOK = false;
                    }
                }
            }
            /*
             * Si el formulario no ha sido enviado, pone el manejador de errores
             * a false para poder mostrar el formulario.
             */ else {
                $bEntradaOK = false;
            }

            /*
             * Si el formulario ha sido enviado y no ha tenido errores
             * muestra la información enviada.
             */
            if ($bEntradaOK) {
                /*
                 * Recogida de la información enviada.
                 */
                $aFormulario['inputAlfanumericoObligatorio'] = $_REQUEST['inputAlfanumericoObligatorio'];
                $aFormulario['inputAlfanumericoOpcional'] = $_REQUEST['inputAlfanumericoOpcional'];
                $aFormulario['inputAlfabeticoObligatorio'] = $_REQUEST['inputAlfabeticoObligatorio'];
                $aFormulario['inputAlfabeticoOpcional'] = $_REQUEST['inputAlfabeticoOpcional'];
                $aFormulario['inputEnteroObligatorio'] = $_REQUEST['inputEnteroObligatorio'];
                $aFormulario['inputEnteroOpcional'] = $_REQUEST['inputEnteroOpcional'];
                $aFormulario['inputFloatObligatorio'] = $_REQUEST['inputFloatObligatorio'];
                $aFormulario['inputFloatOpcional'] = $_REQUEST['inputFloatOpcional'];

                /*
                 * Mostrado del contenido de las variables.
                 */
                echo '<ul>';
                echo '<li>inputAlfanumericoObligatorio: ' . $aFormulario['inputAlfanumericoObligatorio'] . '</li>';
                echo '<li>inputAlfanumericoOpcional: ' . $aFormulario['inputAlfanumericoOpcional'] . '</li>';
                echo '<li>inputAlfabeticoObligatorio: ' . $aFormulario['inputAlfabeticoObligatorio'] . '</li>';
                echo '<li>inputAlfabeticoOpcional: ' . $aFormulario['inputAlfabeticoOpcional'] . '</li>';
                echo '<li>inputEnteroObligatorio: ' . $aFormulario['inputEnteroObligatorio'] . '</li>';
                echo '<li>inputEnteroOpcional: ' . $aFormulario['inputEnteroOpcional'] . '</li>';
                echo '<li>inputFloatObligatorio: ' . $aFormulario['inputFloatObligatorio'] . '</li>';
                echo '<li>inputFloatOpcional: ' . $aFormulario['inputFloatOpcional'] . '</li>';
                echo '</ul>';
            }

            /*
             * Si el formulario no ha sido enviado o ha tenido errores
             * muestra el formulario.
             */ else {

                /*
                 * Por cada input, el valor por defecto se inicializa al que tiene
                 * $_REQUEST, si es que tiene alguna.
                 * Si tiene algún error, lo muestra al lado del input.
                 */
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <fieldset>
                        <table>
                            <tr>
                                <td><label for="inputAlfanumericoObligatorio">Alfanumérico obligatorio</label></td>
                                <td><input type="text" name="inputAlfanumericoObligatorio" id="inputAlfanumericoObligatorio" value="<?php echo $_REQUEST['inputAlfanumericoObligatorio'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputAlfanumericoObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputAlfanumericoOpcional">Alfanumérico opcional</label></td>
                                <td><input type="text" name="inputAlfanumericoOpcional" id="inputAlfanumericoOpcional" value="<?php echo $_REQUEST['inputAlfanumericoOpcional'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputAlfanumericoOpcional'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputAlfabeticoObligatorio">Alfabético obligatorio</label></td>
                                <td><input type="text" name="inputAlfabeticoObligatorio" id="inputAlfabeticoObligatorio" value="<?php echo $_REQUEST['inputAlfabeticoObligatorio'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputAlfabeticoObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputAlfabeticoOpcional">Alfabético opcional</label></td>
                                <td><input type="text" name="inputAlfabeticoOpcional" id="inputAlfabeticoOpcional" value="<?php echo $_REQUEST['inputAlfabeticoOpcional'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputAlfabeticoOpcional'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputNumericoObligatorio">Entero obligatorio</label></td>
                                <td><input type="number" name="inputEnteroObligatorio" id="inputEnteroObligatorio" value="<?php echo $_REQUEST['inputEnteroObligatorio'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputEnteroObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputNumericoOpcional">Entero opcional</label></td>
                                <td><input type="number" name="inputNumericoOpcional" id="inputNumericoOpcional" value="<?php echo $_REQUEST['inputNumericoOpcional'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputNumericoOpcional'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputFloatObligatorio">Float obligatorio</label></td>
                                <td><input type="text" name="inputFloatObligatorio" id="inputFloatObligatorio" value="<?php echo $_REQUEST['inputFloatObligatorio'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputFloatObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputFloatOpcional">Float opcional</label></td>
                                <td><input type="text" name="inputFloatOpcional" id="inputFloatOpcional" value="<?php echo $_REQUEST['inputFloatOpcional'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputFloatOpcional'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputFechaObligatorio">Fecha obligatoria</label></td>
                                <td><input type="date" name="inputFechaObligatorio" id="inputFechaObligatorio" value=></td>
                            </tr>
                        </table>
                    </fieldset>
                    <input type="submit" name="submit" id="submit">
                </form>
    <?php
}
?>
        </main>
        <footer>
            <div>Modificado el 27/10/2021 - Mª Isabel Martínez Guerra</div>
        </footer>
    </body>
</html>
