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
                $aErrores = [
                    'name' => validacionFormularios::comprobarAlfabetico($_REQUEST['name'], 500, 3, OBLIGATORIO),
                    'height' => validacionFormularios::comprobarEntero($_REQUEST['height'], 300, 0, OBLIGATORIO),
                    'birthday' => validacionFormularios::validarFecha($_REQUEST['birthday'], '01/01/2200', '01/01/1900', OBLIGATORIO)
                ];

                /*
                 * Recorrido del array de errores. Si existe alguno, indica que
                 * la entrada es incorrecta.
                 */
                foreach ($aErrores as $sCampo => $sError) {
                    if($sError!=null){
                        //Limpieza del campo.
                        $_REQUEST[$sCampo] = '';
                        $bEntradaOK = false;
                    }
                }
                
                /*
                 * Recogida de la información enviada, ya limpia si tenía errores.
                 */
                $aForm = [
                    'name' => $_REQUEST['name'],
                    'height' => $_REQUEST['height'],
                    'birthday' => $_REQUEST['birthday']
                ];
                

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
                echo '<li>Altura: ' . $aForm['height'] . '</li>';
                echo '<li>Fecha de nacimiento: ' . $aForm['birthday'] . '</li>';
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
                                <td><label class="obligatorio" for="height">Altura</label></td>
                                <td><label class="obligatorio" for="height">Fecha de nacimiento</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="name" name="name" value="<?php echo $aForm['name'] ?>"></td>
                                <td><input type="number" id="height" name="height" value="<?php echo $aForm['height'] ?>" placeholder="cm"></td>
                                <td><input type="date" id="birthday" name="birthday" value="<?php echo $aForm['birthday'] ?>"></td>
                            </tr>
                            <tr>
                                <td><?php echo '<span>'.$aErrores['name'].'</span>' ?></td>
                                <td><?php echo '<span>'.$aErrores['height'].'</span>' ?></td>
                                <td><?php echo '<span>'.$aErrores['birthday'].'</span>' ?></td>
                            </tr>
                        </table>
                    </fieldset>
                    <input type="submit" name="submit" value="Enviar">
            <?php
            }
            ?>
        </form>
            
        </main>
        
        <footer>
            <div>Modificado el 26/10/2021 - Mª Isabel Martínez Guerra</div>
        </footer>
    </body>
</html>
