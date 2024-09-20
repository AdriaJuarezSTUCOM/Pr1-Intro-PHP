<?php

echo"1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:<br><br>";

$num1 = 15;
$num2 = 20;

echo"Los dos números son $num1 y $num2<br><br>";

echo"2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la 
primera con un bucle for.<br><br> ";

for($i=0; $i<$num1 ; $i=$i+2){
    echo"$i<br>";
}

echo"<br>";

echo"3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle 
while.<br><br>"; 

$aux=$num2;

while($aux>0){
    $aux--;
    echo"$aux<br>";
}

echo"<br>";

echo"4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle 
do/while. 
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez 
el valor de la primera variable.<br><br> ";

if($num1>$num2){
    echo"$num1";
}else{
    for($i=$num1; $i<=$num2; $i++){
        echo"$i<br>";
    }
    echo"<br>";
}