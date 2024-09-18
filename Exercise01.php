 <?php

echo "1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las 
variables y los resultados de sus operaciones.<br><br> ";

$num1 = 10;
$num2 = 5;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;

echo "Número 1: $num1, Número 2: $num2 <br>";
echo "Suma: $suma, Resta: $resta, División: $division. <br><br>";

echo "2. Muestra cuál es mayor, cuál menor o si son iguales.<br><br> ";

if($num1 > $num2){
    $valor = "mayor";
}else if($num1 === $num2){
    $valor = "igual";
}else{
    $valor = "menor";
}

echo "El número 1 es ". $valor ." que el número 2<br><br>";

echo "3. Si las dos variables son valores superiores a 1, 
a. calcula el área del triángulo con base y altura igual a los valores de las 
variables.<br><br>";

echo $num1 > 1 && $num2 > 1? "El área es: ". ($num1*$num2)/2 :"Alguno de los valores o ambos no son superiores a 1.";

?>