<?php
function fatorial($num) {
    $resultado = 1;
    for ($i = 1; $i <= $num; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}
echo "Fatorial: " . fatorial(5);

?>