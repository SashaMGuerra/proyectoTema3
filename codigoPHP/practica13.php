<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 19/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 13</title>
        <style>
            span{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 19/10/2021
         * Fecha de última modificación: 12/11/2021
         * @version 1.0
         * 
         * Función que cuenta el número de visitas a la página desde una fecha
         */
        
        /*
         * Para poder trabajar con él, el directorio debe tener permisos
         * de lectura y escritura
         */
        $sFile = '../doc/contadorVisitas';
        
        /*
         * Si el fichero existe, lee el número en el contador, suma 1 y lo escribe.
         */
        if(file_exists($sFile)){
            /*
             * Randomizador para que unas veces lo haga con file_get_contents
             * y otras con fopen, fread/fwrite y fclose.
             */
            if(/*random_int(0, 1)*/1){
                $sMediante = 'fopen, fread/fwrite y fclose';
                
                // Apertura del fichero. Devuelve un recurso de puntero.
                $gestor = fopen($sFile, 'r+');
                fseek($gestor, 0);
                
                // Lectura del fichero. Devuelve un string con la información.
                $iVisitas = intval(fread($gestor, filesize($sFile)));
                var_dump($iVisitas);
                $iVisitas++;
                
                // Escritura del archivo.
                echo 'Write: '.fwrite($gestor, $iVisitas);
                
                // Cierre del puntero.
                fclose($gestor);
            }
            else{
                $sMediante = 'file_get_contents y file_put_contents';
                /**
                 * file_get_contents funciona como la secuencia
                 * fopen > fread > fclose
                 * 
                 * file_put_contents igual, pero con fwrite.
                 */
                $iVisitas = intval(file_get_contents($sFile));
                $iVisitas++;
                file_put_contents($sFile, $iVisitas);
            }
            
            // basename devuelve el último componente de una ruta.
            echo "<div>Se ha reescrito el fichero <span>". basename($sFile)."</span> con $iVisitas visitas mediante $sMediante.</div>";
        }
        /*
         * Si no existe, crea el fichero con un 1.
         */
        else{
            file_put_contents($sFile, 1);
            echo "<div>Se ha creado el fichero <span>". basename($sFile)."</span> con 1 visita.</div>";
        }
        ?>
    </body>
</html>
