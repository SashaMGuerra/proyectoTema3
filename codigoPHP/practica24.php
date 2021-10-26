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
        <link href="../webroot/css/common.css" rel="stylesheet" type="text/css"/>
        <link href="../webroot/css/formStyle.css" rel="stylesheet" type="text/css"/>
        <style>
            main{
                margin: 1% 2%;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Formulario del ejercicio 24</h1>
            <h2>Enviado el formulario con la información correcta, mostrará la información con que se ha rellenado. <br>Mantiene los datos correctos si otros estaban equivocados.</h2>
        </header>
        <main>
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
            //Definición de constantes para el parámetro Obligatorio.
            define("OBLIGATORIO", 1);
            define("OPCIONAL", 0);

            /*
             * Inicialización de los arrays de elementos del formulario
             * y errores vacíos.
             */
            $aForm = [
                "name" => '',
                "dni" => '',
                "birthday" => '',
                "height" => '',
                "sex" => ''
            ];
            $aErrores = [
                "name" => '',
                "dni" => '',
                "birthday" => '',
                "height" => '',
                "sex" => ''
            ];

            /*
             * Confirmación si el formulario ha sido enviado.
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
                $aErrores['name'] = validacionFormularios::comprobarAlfabetico($_REQUEST['name'], 500, 3, OBLIGATORIO);
                $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], OBLIGATORIO);
                $aErrores['birthday'] = validacionFormularios::validarFecha($_REQUEST['birthday'], '01/01/2200', '01/01/1900', OBLIGATORIO);
                $aErrores['height'] = validacionFormularios::comprobarEntero($_REQUEST['height'], 300, 0, OBLIGATORIO);
                $aErrores['sex'] = validacionFormularios::validarInputRadio($_REQUEST['sex'], OBLIGATORIO); //Toma el value, no el name del input.
                
                
                /*
                 * Recorrido del array de errores. Si existe alguno, indica que
                 * la entrada es incorrecta.
                 */
                foreach ($aErrores as $sCampo => $sError) {
                    if ($sError != null) {
                        //Limpieza del campo.
                        $_REQUEST[$sCampo] = '';
                        $bEntradaOK = false;
                    }
                }

                /*
                 * Recogida de la información enviada, ya limpia si tenía errores.
                 */
                $aForm['name'] = $_REQUEST['name'];
                $aForm['dni'] = $_REQUEST['dni'];
                $aForm['birthday'] = $_REQUEST['birthday'];
                $aForm['height'] = $_REQUEST['height'];
                $aForm['sex'] = $_REQUEST['sex'];
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
                //Mostrado del contenido de las variables.
                echo '<ul>';
                echo '<li>Nombre: ' . $aForm['name'] . '</li>';
                echo '<li>DNI: ' . $aForm['dni'] . '</li>';
                echo '<li>Fecha de nacimiento: ' . $aForm['birthday'] . '</li>';
                echo '<li>Altura: ' . $aForm['height'] . '</li>';
                echo '<li>Sexo: ' . $aForm['sex'] . '</li>';
                echo '</ul>';

                //Mostrado del contenido de la variable $_REQUEST formtateada.
                echo '<h3>Contenido de la variable global $_REQUEST</h3><pre>';
                print_r($_REQUEST);
                echo '</pre>';
            } else {

                /*
                 * Por cada input, el valor por defecto se inicializa al que
                 * tenga $_REQUEST, si es que tiene alguno.
                 * Si tiene algún error, lo muestra al lado del input.
                 */
                ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <fieldset>
                        <legend>Información</legend>
                        <table>
                            <tr>
                                <td><label class="obligatorio" for="name">Nombre</label></td>
                                <td><label class="obligatorio" for="dni">DNI</label></td>
                                <td><label class="obligatorio" for="height">Fecha de nacimiento</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="name" name="name" value="<?php echo $aForm['name'] ?>"></td>
                                <td><input type="text" id="dni" name="dni" value="<?php echo $aForm['dni'] ?>" placeholder="00000000A"></td>
                                <td><input type="date" id="birthday" name="birthday" value="<?php echo $aForm['birthday'] ?>"></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>' . $aErrores['name'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['dni'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['birthday'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label class="obligatorio" for="height">Altura</label></td>
                                <td><label class="obligatorio">Sexo</label></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="number" id="height" name="height" value="<?php echo $aForm['height'] ?>" placeholder="cm"></td>
                                <td>
                                    <ul class="inputRadio">
                                        <!-- Los input de tipo radio necesitan tener
                                        un valor por defecto para poder ser procesados. -->
                                        <li>
                                            <input type="radio" id="female" name="sex" value="female" <?php echo ($aForm['sex']=='female'?'checked':'') ?>>
                                            <label for="female">Mujer</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="male" name="sex" value="male" <?php echo ($aForm['sex']=='male'?'checked':'') ?>>
                                            <label for="male">Hombre</label>
                                        </li>
                                    </ul>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>' . $aErrores['height'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['sex'] . '</span>' ?></td>
                                <td></td>
                            </tr>
                        </table>
                    </fieldset>
                    <input type="submit" name="submit" value="Enviar">
            </form>
                <?php
                }
                ?>
        </main>
        <footer>
            <div>Modificado el 26/10/2021 - Mª Isabel Martínez Guerra</div>
        </footer>
    </body>
</html>
