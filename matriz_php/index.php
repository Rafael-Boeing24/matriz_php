<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title>Matriz</title>
    </head>
    <body>
        <?php
        define('ENTER', '
');
        $aArrayMatriz  = [];
        $iIndiceMatriz = rand(10, 30);
        // Monta a Matriz de forma Dinâmica.
        for ( $i = 0; $i < $iIndiceMatriz; $i++ ) {
            for ( $j = 0; $j < $iIndiceMatriz; $j++ ) {
                $aArrayMatriz[$i][$j] = rand(0, 100);
            }
        }
        // Mostra o texto em Tela.
        $sDescrição = '';
        for ( $i = 0; $i < $iIndiceMatriz; $i++ ) {
            for ( $j = 0; $j < $iIndiceMatriz; $j++ ) {
                $sDescrição .= str_pad($aArrayMatriz[$i][$j], 4, ' ', STR_PAD_LEFT);
            }
            $sDescrição .= ENTER;
        }
        echo '<pre>' . $sDescrição . '</pre>';
        ?>
    </body>
</html>
