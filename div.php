<?php 
    echo "<h1>Será que é divisível?<h1>";
    $n1 = 11;

    if($n1 % 10 == 0){
        echo "O número $n1 é divisível por 10.";
    }elseif($n1 % 5 == 0){
        echo "O número $n1 é divisível por 5.";
    }elseif($n1 % 2 == 0){
        echo "O número $n1 é divisível por 2.";
    }
    else{
        echo "O número $n1 não é divisível por 10, 5 ou 2.";
    }


?>