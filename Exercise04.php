<?php
echo"1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado. <br><br>";

$dado = rand(1, 6);

echo"El dado ha sacado un: $dado<br><br>";

echo"2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara 
opuesta. (1:5, 2:6, 3:4) <br><br>";

switch($dado){
    case(1):
        echo"Ha salido el número 1 y la cara opuesta es un 5";
        break;
    case(2):
        echo"Ha salido el número 2 y la cara opuesta es un 6";
        break;
    case(3):
        echo"Ha salido el número 3 y la cara opuesta es un 4";
        break;
    case(4):
        echo"Ha salido el número 4 y la cara opuesta es un 3";
        break;
    case(5):
        echo"Ha salido el número 5 y la cara opuesta es un 1";
        break;
    case(6):
        echo"Ha salido el número 6 y la cara opuesta es un 2";
        break;

}
