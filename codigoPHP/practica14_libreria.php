<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 20/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 13</title>
    </head>
    <body>
        <?php

        /**
         * Fecha de creación: 20/10/2021
         * Fecha de última modificación: 20/10/2021
         * 
         * Librería de funciones personal.
         */
        
        
        
        /**
         * Comprueba si el número introducido es par o impar.
         * @param integer $iNum Número a comprobar.
         * @return boolean True si es par, False si es impar.
         */
        function esPar($iNum){
            if($iNum%2==0){
                return true;
            }
            else{
                return false;
            }
        }

        
        /**
         * Comprueba si un número es primo.
         * @param integer $iNum El número a comprobar si es primo.
         * @return boolean True si es primo, False si no lo es.
         */
        function esPrimo($iNum){
            if($iNum<=1){
                return false;
            }
            for($iDiv = 2;$iDiv<$iNum;$iDiv++){
                if($iNum%$iDiv==0){
                    return false;
                }
            }
            return true;
        }
        
        /**
         * Crea un string con el factorial de un número (1 * 2 * ...).
         * @param integer $num El número a mostrar como multiplicación factorial.
         * @return string El string de la multiplicación factorial.
         */
        function show_factorial($num) {
            $sMult;
            for ($iToMult = 1; $iToMult < $num; $iToMult++) {
                $sMult .= $iToMult . ' * ';
            }
            return $sMult . $num;
        }

        /**
         * Calcula el factorial de un número dado.
         * @param integer $num El número cuyo factorial se calcula.
         * @return integer El factorial calculado del número introducido.
         */
        function calculate_factorial($num) {
            if ($num == 0) {
                $iFactorial = 0;
            } else {
                $iFactorial = 1;
            }
            for ($mult = 2; $mult <= $num; $mult++) {
                $iFactorial *= $mult;
            }
            return $iFactorial;
        }
        ?>
    </body>
</html>
