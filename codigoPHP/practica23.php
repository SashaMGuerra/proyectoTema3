<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 21/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 23</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
        <link href="../webroot/css/forms.css" rel="stylesheet" type="text/css"/>
        <style>
            form{
                max-width: 500px;
            }
            table tr td:first-child{
                text-align: right;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
            <h1>Formulario del ejercicio 23</h1>
            <h2>Enviado el formulario con la información correcta, mostrará la información con que se ha rellenado. Muestra errores.</h2>
        </header>
        <main>
            <?php
            /**
             * @since 21/10/2021
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

            /**
             * Array de errores.
             */
            $aErrores = [
                'name' => '',
                'age' => ''
            ];

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
                $aErrores['name']= validacionFormularios::comprobarAlfabetico($_REQUEST['name'], 300, 3, OBLIGATORIO);
                /*
                 * La edad debe ser un entero entre 0 y 120, ambos incluidos.
                 * Es un campo obligatorio.
                 */
                $aErrores['age']=validacionFormularios::comprobarEntero($_REQUEST['age'], 120, 0, OBLIGATORIO);

                /*
                 * Recorrido del array de errores. Si existe alguno, indica que
                 * la entrada es incorrecta.
                 */
                foreach ($aErrores as $sCampo => $mError) {
                    if ($mError != null) {
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
                    <table>
                        <tr>
                            <td><label for="name">Nombre: </label></td>
                            <td><input type="text" id="name" name="name"></td>
                            <td><?php echo '<span>'.$aErrores['name'].'</span>' ?></td>
                        </tr>
                        <tr>
                            <td><label for="age">Edad: </label></td>
                            <td><input type="number" id="age" name="age"></td>
                            <td><?php echo '<span>'.$aErrores['age'].'</span>' ?></td>
                        </tr>
                    </table>
                    <input type="submit" name="submit" id="submit" value="Enviar">
                </form>
                <?php
            }
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
    </body>
</html>
