<?php 
    // FUNÇÃO COM PARÂMETROS E SEM RETORNO

    function calcula_quadrado($a){
        $x = $a * $a;

        echo "$x <br>";
    }

    calcula_quadrado(4);

    echo "<hr>";

    function soma($x,$y){
        $soma = $x + $y;

        echo "A soma é: $soma <br>";
    }

    soma(3,4);

?>