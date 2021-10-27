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
                "username" => '',
                "password" => '',
                "name" => '',
                "dni" => '',
                "birthday" => '',
                "height" => '',
                "sex" => '',
                "codpostal" => '',
                "nation" => '',
                "tfno" => '',
                "email" => '',
                "recievemails" => '',
                "webpage" => '',
                "additionalinfo" => ''
            ];
            $aErrores = [
                "username" => '',
                "password" => '',
                "name" => '',
                "dni" => '',
                "birthday" => '',
                "height" => '',
                "sex" => '',
                "codpostal" => '',
                "nation" => '',
                "tfno" => '',
                "email" => '',
                "recievemails" => '',
                "webpage" => '',
                "additionalinfo" => ''
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
                $aErrores['username'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['username'], 150, 7, OBLIGATORIO);
                $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 16, 4, 2); //Su complejidad es de tipo 2: admite números y letras.
                $aErrores['name'] = validacionFormularios::comprobarAlfabetico($_REQUEST['name'], 500, 3, OBLIGATORIO);
                $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], OBLIGATORIO);
                $aErrores['birthday'] = validacionFormularios::validarFecha($_REQUEST['birthday'], '01/01/2200', '01/01/1900', OBLIGATORIO);
                $aErrores['height'] = validacionFormularios::comprobarEntero($_REQUEST['height'], 300, 0, OBLIGATORIO);
                /*
                 * Dado que por defecto no hay ninguna opción elegida, y si no
                 * la hay el $_REQUEST no lo guarda y da error por índice indefinido,
                 * requiere una comprobación si está definido el índica antes
                 * de validarse la entrada.
                 * Si no lo está, lleva a la validación una cadena vacía.
                 */
                $aErrores['sex'] = validacionFormularios::validarSeleccion(isset($_REQUEST['sex'])?$_REQUEST['sex']:''); //Toma el value, no el name del input.
                $aErrores['codpostal'] = validacionFormularios::validarCp($_REQUEST['codpostal'], OBLIGATORIO);
                $aErrores['nation'] = validacionFormularios::validarSeleccion($_REQUEST['nation']);
                $aErrores['tfno'] = validacionFormularios::validarTelefono($_REQUEST['tfno']);
                $aErrores['email'] = validacionFormularios::validarEmail($_REQUEST['email']);
                /*
                 * Al igual que con la validación para el input radio anterior,
                 * también requiere una comprobación sobre si está definido
                 * el índice antes de validarse la entrada.
                 * Si no lo está, lleva a la validación una cadena vacía.
                 */
                $aErrores['recievemails'] = validacionFormularios::validarSeleccion(isset($_REQUEST['recievemails'])?$_REQUEST['recievemails']:'', OPCIONAL);
                $aErrores['webpage'] = validacionFormularios::validarURL($_REQUEST['webpage']);
                $aErrores['additionalinfo'];
                
                
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
                /*
                 * Recogida de la información enviada.
                 */
                $aForm['username'] = $_REQUEST['username'];
                $aForm['password'] = $_REQUEST['password'];
                $aForm['name'] = $_REQUEST['name'];
                $aForm['dni'] = $_REQUEST['dni'];
                $aForm['birthday'] = $_REQUEST['birthday'];
                $aForm['height'] = $_REQUEST['height'];
                $aForm['sex'] = $_REQUEST['sex'];
                $aForm['codpostal'] = $_REQUEST['codpostal'];
                $aForm['nation'] = $_REQUEST['nation'];
                $aForm['tfno'] = $_REQUEST['tfno'];
                $aForm['email'] = $_REQUEST['email'];
                /*
                 * Los checkbox funcionan como booleanos.
                 * Si están checados, la variable $_REQUEST recoge que están "on",
                 * si no, no recoge nada.
                 * 
                 * Se inicializa la variable a devolver según si está checada:
                 * 0 si no, 1 si sí.
                 */
                $aForm['recievemails'] = isset($_REQUEST['recievemails'])?1:0;
                $aForm['webpage'] = $_REQUEST['webpage'];
                $aForm['additionalinfo'] = $_REQUEST['additionalinfo'];
                $aForm['differentdt'] = $_REQUEST['differentdt'];
                
                //Mostrado del contenido de las variables.
                echo '<ul>';
                echo '<li>Nombre de usuario: ' . $aForm['username'] . '</li>';
                echo '<li>Contraseña: ' . $aForm['password'] . '</li>';
                echo '<li>Nombre: ' . $aForm['name'] . '</li>';
                echo '<li>DNI: ' . $aForm['dni'] . '</li>';
                echo '<li>Fecha de nacimiento: ' . $aForm['birthday'] . '</li>';
                echo '<li>Altura: ' . $aForm['height'] . '</li>';
                echo '<li>Sexo: ' . $aForm['sex'] . '</li>';
                echo '<li>Código postal: ' . $aForm['codpostal'] . '</li>';
                echo '<li>Nacionalidad: ' . $aForm['nation'] . '</li>';
                echo '<li>Teléfono: ' . $aForm['tfno'] . '</li>';
                echo '<li>Email: ' . $aForm['email'] . '</li>';
                echo '<li>Recibir emails: ' . $aForm['recievemails'] . '</li>';
                echo '<li>Página web: ' . $aForm['webpage'] . '</li>';
                echo '<li>Información adicional: ' . $aForm['webpage'] . '</li>';
                echo '<pre>' . $aForm['additionalinfo'] . '</pre>';
                echo '<li>Fecha y hora: ' . $aForm['differentdt'] . '</li>';
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
                    <fieldset class="signup">
                        <table>
                            <tr>
                                <td><label class="obligatorio" for="username">Nombre de usuario</label></td>
                                <td><label class="obligatorio" for="password">Contraseña</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="username" name="username" value="<?php echo (isset($_REQUEST['username'])?$_REQUEST['username']:'')  ?>"></td>
                                <td><input type="password" id="password" name="password" value="<?php echo (isset($_REQUEST['password'])?$_REQUEST['password']:'') ?>"></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>' . $aErrores['username'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['password'] . '</span>' ?></td>
                            </tr>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>Información personal</legend>
                        <table>
                            <tr>
                                <td><label class="obligatorio" for="name">Nombre</label></td>
                                <td><label class="obligatorio" for="dni">DNI</label></td>
                                <td><label class="obligatorio" for="height">Fecha de nacimiento</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="name" name="name" value="<?php echo $_REQUEST['name']??'' /*Null coalescing operator*/ ?>"></td>
                                <td><input type="text" id="dni" name="dni" value="<?php echo $_REQUEST['dni']??'' ?>" placeholder="00000000A"></td>
                                <td><input type="date" id="birthday" name="birthday" value="<?php echo $_REQUEST['birthday']??'' ?>"></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>' . $aErrores['name'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['dni'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['birthday'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label class="obligatorio" for="nation">Nacionalidad</label></td>
                                <td><label class="obligatorio">Sexo</label></td>
                                <td><label class="obligatorio">Código postal</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="nation" id="nation">
                                        <option value=""></option>
                                        <optgroup label="Europa">
                                            <option value="spanish" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='spanish'?'selected':''):'') ?>>Española</option>
                                            <option value="greek" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='greek'?'selected':''):'') ?>>Griega</option>
                                        </optgroup>
                                        <optgroup label="Asia">
                                            <option value="russian" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='russian'?'selected':''):'') ?>>Rusa</option>
                                            <option value="indian" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='indian'?'selected':''):'') ?>>India</option>
                                        </optgroup>
                                        <optgroup label="África">
                                            <option value="morrocan" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='morrocan'?'selected':''):'') ?>>Marroquí</option>
                                            <option value="southafrican" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='southafrican'?'selected':''):'') ?>> Sudafricana</option>
                                        </optgroup>
                                        <optgroup label="América">
                                            <option value="canadian" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='canadian'?'selected':''):'') ?>>Canadiense</option>
                                            <option value="colombian" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='colombian'?'selected':''):'') ?>>Colombiana</option>
                                        </optgroup>
                                        <optgroup label="Oceanía">
                                            <option value="australian" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='australian'?'selected':''):'') ?>>Australiana</option>
                                            <option value="samoan" <?php echo (isset($_REQUEST['nation'])?($_REQUEST['nation']=='samoan'?'selected':''):'') ?>>Samoana</option>
                                        </optgroup>
                                    </select>
                                </td>
                                <td>
                                    <ul class="inputRadio">
                                        <!-- Los input de tipo radio necesitan tener
                                        un valor por defecto para poder ser procesados. -->
                                        <li>
                                            <input type="radio" id="female" name="sex" value="female" <?php
                                                if(isset($_REQUEST['sex'])){
                                                    echo ($_REQUEST['sex']=='female'?'checked':'');
                                                }
                                            ?>>
                                            <label for="female">Mujer</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="male" name="sex" value="male" <?php
                                                if(isset($_REQUEST['sex'])){
                                                    echo ($_REQUEST['sex']=='male'?'checked':'');
                                                }
                                            ?>>
                                            <label for="male">Hombre</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="othersex" name="sex" value="othersex" <?php
                                                if(isset($_REQUEST['sex'])){
                                                    echo ($_REQUEST['sex']=='othersex'?'checked':'');
                                                }
                                            ?>>
                                            <label for="othersex">Otro</label>
                                        </li>
                                    </ul>
                                </td>
                                <td><input type="text" id="codpostal" name="codpostal" value="<?php echo (isset($_REQUEST['codpostal'])?$_REQUEST['codpostal']:'') ?>" placeholder="00000"></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>' . $aErrores['nation'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['sex'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['codpostal'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td><label class="obligatorio" for="height">Altura</label></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="number" id="height" name="height" value="<?php echo (isset($_REQUEST['height'])?$_REQUEST['height']:'') ?>" placeholder="cm"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>' . $aErrores['height'] . '</span>' ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>Información de contacto</legend>
                        <table>
                            <tr>
                                <td><label for="tfno">Teléfono</label></td>
                                <td><label for="email">Correo electrónico</label></td>
                                <td><label for="webpage">Página web</label></td>
                            </tr>
                            <tr>
                                <td><input type="tel" id="tfno" name="tfno" value="<?php echo (isset($_REQUEST['tfno'])?$_REQUEST['tfno']:'') ?>"></td>
                                <td><input type="email" id="email" name="email" value="<?php echo (isset($_REQUEST['email'])?$_REQUEST['email']:'') ?>"></td>
                                <td><input type="url" id="webpage" name="webpage" value="<?php echo (isset($_REQUEST['webpage'])?$_REQUEST['webpage']:'') ?>"></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>' . $aErrores['tfno'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['email'] . '</span>' ?></td>
                                <td><?php echo '<span>' . $aErrores['webpage'] . '</span>' ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="checkbox" id="recievemails" name="recievemails" <?php echo (isset($_REQUEST['recievemails'])?'checked':'') ?>>
                                    <label class="cbox" for="recievemails">Recibir correos informativos.</label>
                                </td>
                                <td><?php echo '<span>' . $aErrores['recievemails'] . '</span>' ?></td>
                            </tr>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>Información adicional</legend>
                        <textarea id="additionalinfo" name="additionalinfo" placeholder="Escriba aquí cualquier información adicional que desee añadir."><?php echo (isset($_REQUEST['additionalinfo'])?$_REQUEST['additionalinfo']:'') ?></textarea>
                        <label for="differentdt">Elegir fecha y hora: </label>
                        <input type="datetime-local" id="differentdt" name="differentdt" value="<?php echo $_REQUEST['differentdt']??'' ?>"> 
                    </fieldset>
                    <fieldset class="submit">
                        <input type="submit" id="submit" name="submit" value="Enviar">
                    </fieldset>
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
