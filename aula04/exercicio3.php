<?php 

    function par_impar(){
        $num = 61;
        if ($num % 2 == 0) {
            echo "O número é par!";
        } else {
            echo "O número é ímpar!";
        }
    }

    par_impar();

?>