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
            /*Formato de la tabla del primer fieldset*/
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

            /*Bloqueo del ancho del textarea*/
            textarea{
                width: 100%;
                resize: vertical;
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
            define("FECHA_MAXIMA", '01/01/2200');
            define("FECHA_MINIMA", "01/01/1900");

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
                'inputFloatOpcional' => '',
                'inputFechaObligatorio' => '',
                'inputFechaOpcional' => '',
                'inputFechaHoraObligatorio' => '',
                'inputFechaHoraOpcional' => '',
                'inputTextareaObligatorio' => '',
                'inputTextareaOpcional' => '',
                'inputListaDesplegableObligatorio' => '',
                'inputListaDesplegableOpcional' => '',
                'inputRadioObligatorio' => ''
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
                'inputFloatOpcional' => '',
                'inputFechaObligatorio' => '',
                'inputFechaOpcional' => '',
                'inputFechaHoraObligatorio' => '',
                'inputFechaHoraOpcional' => '',
                'inputTextareaObligatorio' => '',
                'inputTextareaOpcional' => '',
                'inputListaDesplegableObligatorio' => '',
                'inputListaDesplegableOpcional' => '',
                'inputRadioObligatorio' => ''
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
                 * NOTA: validarFecha no funciona correctamente con campo texto.
                 * Admite la introducción de una sola letra.
                 */
                $aErrores['inputFechaObligatorio'] = validacionFormularios::validarFecha($_REQUEST['inputFechaObligatorio'], FECHA_MAXIMA, FECHA_MINIMA, OBLIGATORIO);
                $aErrores['inputFechaOpcional'] = validacionFormularios::validarFecha($_REQUEST['inputFechaOpcional']);
                $aErrores['inputFechaHoraObligatorio'] = validacionFormularios::validarFecha($_REQUEST['inputFechaHoraObligatorio'], FECHA_MAXIMA, FECHA_MINIMA, OBLIGATORIO);
                $aErrores['inputFechaHoraOpcional'] = validacionFormularios::validarFecha($_REQUEST['inputFechaHoraOpcional']);
                $aErrores['inputTextareaObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['inputTextareaObligatorio'], MAX_TAMANIO_ALFA, MIN_TAMANIO_ALFA, OBLIGATORIO);
                $aErrores['inputTextareaOpcional'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['inputTextareaOpcional']);
                $aErrores['inputListaDesplegableObligatorio'] = validacionFormularios::validarSeleccion($_REQUEST['inputListaDesplegableObligatorio']);
                $aErrores['inputListaDesplegableOpcional'] = validacionFormularios::validarSeleccion($_REQUEST['inputListaDesplegableOpcional'], OPCIONAL);
                /*
                 * Dado que por defecto no hay ninguna opción elegida, y si no
                 * la hay el $_REQUEST no lo guarda y da error por índice indefinido,
                 * requiere una comprobación si está definido el índica antes
                 * de validarse la entrada.
                 * Si no lo está, lleva a la validación una cadena vacía.
                 */
                $aErrores['inputRadioObligatorio'] = validacionFormularios::validarSeleccion($_REQUEST['inputRadioObligatorio']??''); //Toma el value, no el name del input.

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
                $aFormulario['inputFechaObligatorio'] = $_REQUEST['inputFechaObligatorio'];
                $aFormulario['inputFechaOpcional'] = $_REQUEST['inputFechaOpcional'];
                $aFormulario['inputFechaHoraObligatorio'] = $_REQUEST['inputFechaHoraObligatorio'];
                $aFormulario['inputFechaHoraOpcional'] = $_REQUEST['inputFechaHoraOpcional'];
                $aFormulario['inputTextareaObligatorio'] = $_REQUEST['inputTextareaObligatorio'];
                $aFormulario['inputTextareaOpcional'] = $_REQUEST['inputTextareaOpcional'];
                $aFormulario['inputListaDesplegableObligatorio'] = $_REQUEST['inputListaDesplegableObligatorio'];
                $aFormulario['inputListaDesplegableOpcional'] = $_REQUEST['inputListaDesplegableOpcional'];

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
                echo '<li>inputFechaObligatorio: ' . $aFormulario['inputFechaObligatorio'] . '</li>';
                echo '<li>inputFechaOpcional: ' . $aFormulario['inputFechaOpcional'] . '</li>';
                echo '<li>inputFechaHoraObligatorio: ' . $aFormulario['inputFechaHoraObligatorio'] . '</li>';
                echo '<li>inputFechaHoraOpcional: ' . $aFormulario['inputFechaHoraOpcional'] . '</li>';
                echo '<li>inputTextareaObligatorio: ' . $aFormulario['inputTextareaObligatorio'] . '</li>';
                echo '<li>inputTextareaOpcional: ' . $aFormulario['inputTextareaOpcional'] . '</li>';
                echo '<li>inputListaDesplegableObligatorio: ' . $aFormulario['inputListaDesplegableObligatorio'] . '</li>';
                echo '<li>inputListaDesplegableOpcional: ' . $aFormulario['inputListaDesplegableOpcional'] . '</li>';
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
                        <legend>Inputs de introducción de datos</legend>
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
                                <td><input type="date" name="inputFechaObligatorio" id="inputFechaObligatorio" value="<?php echo $_REQUEST['inputFechaObligatorio'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputFechaObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputFechaOpcional">Fecha opcional</label></td>
                                <td><input type="date" name="inputFechaOpcional" id="inputFechaOpcional" value="<?php echo $_REQUEST['inputFechaOpcional'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputFechaOpcional'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputFechaHoraObligatorio">Fecha-hora obligatoria</label></td>
                                <td><input type="datetime-local" name="inputFechaHoraObligatorio" id="inputFechaHoraObligatorio" value="<?php echo $_REQUEST['inputFechaHoraObligatorio'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputFechaHoraObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputFechaHoraOpcional">Fecha-hora opcional</label></td>
                                <td><input type="datetime-local" name="inputFechaHoraOpcional" id="inputFechaHoraOpcional" value="<?php echo $_REQUEST['inputFechaHoraOpcional'] ?? '' ?>"></td>
                                <td><?php echo '<span>' . $aErrores['inputFechaHoraOpcional'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputTextareaObligatorio">Textarea obligatoria</label></td>
                                <td>
                                    <textarea name="inputTextareaObligatorio" id="inputTextareaObligatorio" placeholder="Introduzca texto"><?php echo $_REQUEST['inputTextareaObligatorio'] ?? '' ?></textarea>
                                </td>
                                <td><?php echo '<span>' . $aErrores['inputTextareaObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputTextareaOpcional">Textarea obligatoria</label></td>
                                <td>
                                    <textarea name="inputTextareaOpcional" id="inputTextareaOpcional" placeholder="Introduzca texto"><?php echo $_REQUEST['inputTextareaOpcional'] ?? '' ?></textarea>
                                </td>
                                <td><?php echo '<span>' . $aErrores['inputTextareaOpcional'] . '</span>' ?></td>
                            </tr>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>Inputs de selección de datos</legend>
                        <table>
                            <tr>
                                <td><label for="inputListaDesplegableObligatorio">Lista desplegable obligatoria</label></td>
                                <td>
                                    <select name="inputListaDesplegableObligatorio" id="inputListaDesplegableObligatorio">
                                        <option value=""></option>
                                        <optgroup label="Grupo de opciones">
                                            <option value="opcion1" <?php echo (isset($_REQUEST['inputListaDesplegableObligatorio']) ? ($_REQUEST['inputListaDesplegableObligatorio'] == 'opcion1' ? 'selected' : '') : '') ?>>Opción 1</option>
                                            <option value="opcion2" <?php echo (isset($_REQUEST['inputListaDesplegableObligatorio']) ? ($_REQUEST['inputListaDesplegableObligatorio'] == 'opcion2' ? 'selected' : '') : '') ?>>Opción 2</option>
                                            <option value="opcion3" <?php echo (isset($_REQUEST['inputListaDesplegableObligatorio']) ? ($_REQUEST['inputListaDesplegableObligatorio'] == 'opcion3' ? 'selected' : '') : '') ?>>Opción 3</option>
                                        </optgroup>
                                    </select>
                                </td>
                                <td><?php echo '<span>' . $aErrores['inputListaDesplegableObligatorio'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label for="inputListaDesplegableOpcional">Lista desplegable opcional</label></td>
                                <td>
                                    <select name="inputListaDesplegableOpcional" id="inputListaDesplegableOpcional">
                                        <option value=""></option>
                                        <optgroup label="Grupo de opciones">
                                            <option value="opcion1" <?php echo (isset($_REQUEST['inputListaDesplegableOpcional']) ? ($_REQUEST['inputListaDesplegableOpcional'] == 'opcion1' ? 'selected' : '') : '') ?>>Opción 1</option>
                                            <option value="opcion2" <?php echo (isset($_REQUEST['inputListaDesplegableOpcional']) ? ($_REQUEST['inputListaDesplegableOpcional'] == 'opcion2' ? 'selected' : '') : '') ?>>Opción 2</option>
                                            <option value="opcion3" <?php echo (isset($_REQUEST['inputListaDesplegableOpcional']) ? ($_REQUEST['inputListaDesplegableOpcional'] == 'opcion3' ? 'selected' : '') : '') ?>>Opción 3</option>
                                        </optgroup>
                                    </select>
                                </td>
                                <td><?php echo '<span>' . $aErrores['inputListaDesplegableOpcional'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td>Input radio obligatorio</td>
                                <td>
                                    <input type="radio" id="inputRadioObligatorioOpcion1" name="inputRadioObligatorio" value="inputRadioObligatorioOpcion1" <?php
                                    if (isset($_REQUEST['inputRadioObligatorio'])) {
                                        echo ($_REQUEST['inputRadioObligatorio'] == 'inputRadioObligatorioOpcion1' ? 'checked' : '');
                                    }
                                    ?>>
                                    <label for="inputRadioObligatorioOpcion1">Opción 1</label>

                                    <input type="radio" id="inputRadioObligatorioOpcion2" name="inputRadioObligatorio" value="inputRadioObligatorioOpcion2" <?php
                                    if (isset($_REQUEST['inputRadioObligatorio'])) {
                                        echo ($_REQUEST['inputRadioObligatorio'] == 'inputRadioObligatorioOpcion2' ? 'checked' : '');
                                    }
                                    ?>>
                                    <label for="inputRadioObligatorioOpcion2">Opción 2</label>
                                </td>
                                <td><?php echo '<span>' . $aErrores['inputRadioObligatorio'] . '</span>' ?></td>
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
