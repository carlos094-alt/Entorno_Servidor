
<?php
/* 
Ejercicio1

$numero1 = 2;
$numero2 = 2;

if ($numero1 === $numero2) {
    $resultado = $numero1 * $numero2;
    echo "El resultado es: $resultado";
}
if ($numero1 > $numero2) {
    $resultado = $numero1 - $numero2;
    echo "El resultado es: $resultado";
}
if ($numero1 < $numero2) {
    $resultado = $numero1 + $numero2;
    echo "El resultado es: $resultado";
}

Ejercicio2


$num1 = 45678900987654356789;
$num2 = 2234567890;
$num3 = 323456;

if ($num1 > $num2 && $num1 > $num3) {
    echo($num1);
}
if ($num2 > $num1 && $num2 > $num3) {
    echo($num2);
} else {
    echo($num3);
}

Ejercicio3


$horas_trabajadas = 60;

if ($horas_trabajadas < 40) {
    $total = $horas_trabajadas * 12;
    echo("Debera de recibir el equivalente a $total horas");
}

if ($horas_trabajadas < 48  && $horas_trabajadas > 40) {
    $horas_dobles = $horas_trabajadas - 40;
    $total = (40 + ($horas_dobles * 2)) * 12;
    echo("Debera de recibir el equivalente a $total horas");
} 
if ($horas_trabajadas > 48) {
    $horas_dobles = 8;
    $horas_triples = $horas_trabajadas - 48;
    $total = (40 + ($horas_dobles * 2) + ($horas_triples * 3)) * 12;
    echo("Debera de recibir el equivalente a $total horas");
}

Ejercicio4
*/

$numerorandom1 = random_int(1, 100);
$numerorandom2 = random_int(1, 100);

if ($numerorandom1 < $numerorandom2) {
    if (($numerorandom1 % 2) === 0) {
        echo("El numero mayor es el primer numero aleatorio y es par");
    } else {
        echo("El numero mayor es el primer numero aleatorio y es impar");
    }
} else {
     if (($numerorandom2 % 2) === 0) {
        echo("El numero mayor es el segundo numero aleatorio y es par");
    } else {
        echo("El numero mayor es el segundo numero aleatorio y es impar");
    }
}



?>