<?php
    $array = [1, 2, 3, 4, 5];
    $soma = 0;

    for ($i = 0; $i < count($array); $i++) {
        $soma += $array[$i];
    }

    echo "Soma: " . $soma;
?>