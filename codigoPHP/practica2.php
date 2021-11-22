<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra.
Fecha de creación: 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3-2</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * Fecha de creación:
             * Fecha de modificación: 18/10/2021.
             * 
             * Uso de la variable heredoc.
             */
            $aquihaydoc = <<<INSTRUCCION
                CREATE TABLE shop (
                article INT UNSIGNED  DEFAULT '0000' NOT NULL,
                dealer  CHAR(20)      DEFAULT ''     NOT NULL,
                price   DECIMAL(16,2) DEFAULT '0.00' NOT NULL,
                PRIMARY KEY(article, dealer));
                INSERT INTO shop VALUES
                (1,'A',3.45),(1,'B',3.99),(2,'A',10.99),(3,'B',1.45),
                (3,'C',1.69),(3,'D',1.25),(4,'D',19.95);
                INSTRUCCION;
            echo $aquihaydoc;
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
