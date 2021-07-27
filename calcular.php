<?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $tipo = $_POST['tipo'];

    switch($tipo){
        case 'somar': $resultado = $valor1 + $valor2; break;
        case 'subtrair' : $resultado = $valor1 - $valor2; break;
        case 'multiplicar' : $resultado = $valor1 * $valor2; break;
        case 'dividir' : $resultado = $valor1 / $valor2; break;
        
   } 

       echo $resultado;

?>