<?php

echo "1. Se declara una variable con un valor numérico. Utilizando una estructura switch/case 
genera un mensaje que indique a qué día de la semana se corresponde. <br>
a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde 
con ningún día.<br><br> ";

$numero = 6;

echo"El número es: $numero<br><br>";

switch($numero){
    case 1:
    echo"El número corresponde al Lunes.<br>";
    break;
    case 2:
    echo"El número corresponde al Martes.<br>";
    break;
    case 3:
    echo"El número corresponde al Miércoles.<br>";
    break;
    case 4:
    echo"El número corresponde al Jueves.<br>";
    break;
    case 5:
    echo"El número corresponde al Viernes.<br>";
    break;
    case 6:
    echo"El número corresponde al Sábado.<br>";
    break;
    case 7:
    echo"El número corresponde al Domingo.<br>";
    break;
    default:
    echo"El número no corresponde con ningún día.<br>";
}

