<?php
$num1 = isset($_POST["valor1"])?$_POST["valor1"]:"";
$num2 = isset($_POST["valor2"])?$_POST["valor2"]:"";
$som = isset($_POST["Somar"])? $_POST["Somar"]:"";
$sub = isset($_POST["Subtrair"])? $_POST["Subtrair"]:"";
$mult = isset($_POST["Multiplicar"])? $_POST["Multiplicar"]:"";
$div = isset($_POST["Dividir"])? $_POST["Dividir"]:"";
function validar($num1,$num2){
    return is_numeric($num1) && is_numeric($num2);
}
function somar($num1,$num2){
    $total = $num1 + $num2;
    echo "Resultado: $total";
}
function subtrair($num1,$num2){
    $total = $num1 - $num2;
    echo "Resultado: $total";
}
function multiplicar($num1,$num2){
    $total = $num1 * $num2;
    echo "Resultado: $total";
}
function dividir($num1,$num2){
    $total = $num1 /$num2;
    echo "Resultado: $total";
}
if ($som){
    if(validar($num1,$num2)){
        somar($num1,$num2);
    }else{
        echo "Valor não encontrado";
    }
}else if($sub){
    if(validar($num1,$num2)){
        subtrair($num1,$num2);
    }else{
        echo "Valor não encontrado";
    }
}else if($mult){
    if(validar($num1,$num2)){
        multiplicar($num1,$num2);
    }else{
        echo "Valor não encontrado";
    }
}else if ($div){
    if(validar($num1,$num2)){
        dividir($num1,$num2);
    }else{
        echo "Valor não encontrado";
    }
}
?>
<br/><html><a href = "Calculadora.html">Voltar</a></html>
