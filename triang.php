<?php 
    $n1 = 9;
    $n2 = 9;
    $n3 = 9;
    
    echo "<h1>Classificação de triângulos<h1>";

    if($n1 == $n2 && $n2 = $n3){
        echo "Este é um triângulo equilátero";
    }elseif($n1 == $n2 || $n1 = $n3 || $n2 == $n3){
        echo "Este é um triângulo isoscéles";
    }else{
        echo "Este é um triângulo escaleno";
    }

?>