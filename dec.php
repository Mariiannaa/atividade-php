<?php 
    echo "<h1>Números em ordem decrescente<h1>  ";

    $numeros = array(3,4,2); 

    rsort($numeros);

    foreach($numeros as $numero){
        echo "$numero  ";
    }



?>