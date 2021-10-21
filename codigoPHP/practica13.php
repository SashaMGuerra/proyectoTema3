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
            h1, h2{
                text-align: center;
            }
            table{
                border-collapse: collapse;
            }
            td, th{
                border: 1px solid gainsboro;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 19/10/2021
         * Fecha de última modificación: 20/10/2021
         * 
         * Función que cuenta el número de visitas a la página desde una fecha
         */
        
        $sFile = '../doc/prueba.txt';
        
        /**
         * file_exists comprueba si el fichero existe.
         */
        if(file_exists($sFile)){
            echo '<ul>';
            echo '<li>Basename: '. basename($sFile).'</li>';
            echo '<li>Dirname: '. dirname($sFile).'</li>';
            echo '<li>Filesize: '. filesize($sFile).'</li>';
            echo '<li>Tipo de archivo: '. filetype($sFile).'</li>';
            echo '<li>End of File: '. (feof($sFile)?'final':'no final').'</li>';
            echo '<li>Último acceso: '. fileatime($sFile).'</li>';
            echo '<li>Último cambio: '. filectime($sFile).'</li>';
            echo '<li>Última modificación: '. filemtime($sFile).'</li>';
            echo '<li>ID Usuario propietario: '. fileowner($sFile).'</li>';
            echo '<li>ID Grupo del archivo: '. filegroup($sFile).'</li>';
            echo '<li>Número de inodo: '. fileinode($sFile).'</li>';
            echo '<li>Permisos del archivo: '. fileperms($sFile).'</li>';
            echo '</ul>';
            
            echo '<h3>Lectura del archivo mediante file()</h3>';
            /**
             * Este no necesita que el fichero esté abierto.
             * Devuelve un array con cada línea del fichero.
             */
            $aFileArray = file($sFile);
            var_dump($aFileArray);
            print_r($aFileArray);
            
            echo '<h4>Texto: </h4>';
            foreach ($aFileArray as $sLinea) {
                echo "<p>$sLinea</p>";
            }
            
            echo '<h3>Lectura del archivo mediante file_get_contents()</h3>';
            /*
             * Este método no necesita que el fichero esté abierto.
             * Devuelve un string con el contenido del fichero.
             */
            $sFileString = file_get_contents($sFile);
            var_dump($sFileString);
            
            echo '<h4>Texto: </h4>';
            echo "<p>$sFileString</p>";
            
            echo get_include_path();
            
        }
        else{
            echo 'El fichero no existe';
        }
        
        /*
         * Filesystem Functions: https://www.w3schools.com/php/php_ref_filesystem.asp
         * - copy()
         * - delete()
         * - fflush()
         * - fnmatch()
         * 
         * - fopen()
         * - fclose()
         * - flock()
         * 
         * - fgetc()    devuelve caracter de archivo abierto
         * - fgetcsv()  devuelve linea csv de archivo abierto
         * - fgets()    devuelve línea de archivo abierto
         * - fpasstru()
         * 
         * - file_put_contents()    fopen + fwrite + fclose
         * - fputcsv()  formatea una línea como CSV y la escribe en un archivo abierto.
         * - fputs() == fwrite()
         * 
         * ? set_include_path()
         * 
         */
        
        ?>
    </body>
</html>
