<?php 
    $a = 10;
    $b = 5;

    $soma = $a + $b;

    echo "A soma é: $soma";

    echo "<hr>";

    // ESTRUTURAS CONDICIONAIS
    // IF

    if ($b > $a) {
        echo "B é maior que A";
    } else {
        echo "B não é maior que A";
    }

    echo "<hr>";

    $n1 = 4;
    $n2 = 5;
    $n3 = 6;

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Sua média é = $media : ";


    if ($media > 5) {
        echo "Você está aprovado!";
    } else {
        if ($media < 4) {
           echo "Você está reprovado!";
        } else {
            echo "Você está de recuperação!";
        }
    }

    echo "<hr>";
    
    $dia = 2;

    switch ($dia) {
        case 1:
        echo "DOMINGO";
            break;

        case 2:
        echo "SEGUNDA";
            break;

        case 3:
        echo "TERÇA";
            break;

        default:
            echo "Número inválido";
            break;
    }

    echo "<hr>";

    for ($i=1; $i <= 10; $i++) { 
        echo "$i - ";
    }
 
    echo "<hr>";

    $a = 1;
    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }

    echo "<hr>";

    $x = 1;
    do {
        echo "$x - ";
        $x++;
    } while ($x <= 10);

    echo "<hr>";

    $nomes = ['fulano', 'beltrano', 'ciclano', 'Anderson'];

    $qtd = count($nomes);

    echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2];
    echo "<hr>";

    // for ($n=0; $n <= $qtd-1 ; $n++) { 
    //     echo $nomes[$n] . '<br>';
    // }

    foreach ($nomes as $nome) {
        echo "$nome <br>";
    }

?>