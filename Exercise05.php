<?php
echo"1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.<br><br> ";

$num = rand(0,20);

echo"El número es: $num<br><br>";

echo"2. Se repita la operación hasta que el total de valores sumados sea superior a 100.<br><br> ";

$sumatorio = 0;
$numeroPares = 0;
$numeroImpares = 0;

while($sumatorio<=100){
    $numRand = rand(0,20);

    echo"Número aleatorio: $numRand<br>";
    echo" $sumatorio + $numRand = ";
    $sumatorio+=$numRand;
    echo" $sumatorio<br><br>";

    $numRand % 2 == 0 ? $numeroPares++ : $numeroImpares++;
    $valorFinal = $sumatorio>=100 ? $sumatorio : null;
}

echo"3. Muestra la suma de los valores generados. <br><br>";

echo"La suma total final es: $valorFinal<br><br>";

echo"4. Muestra el total de números pares e impares generados. <br><br>";

echo"Número de valores pares: $numeroPares<br> Número de valores impares: $numeroImpares";