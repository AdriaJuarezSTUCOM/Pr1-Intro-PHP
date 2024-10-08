<?php
echo"1) Crea un array asociativo con los siguientes datos y claves. 
nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.<br>
Muestra los valores del array anterior utilizando foreach. <br><br>";

$array = array (
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

$i = 1;

foreach($array as $parametro => $valor){
    echo"Dato $i º: $valor<br>";
    $i++;
}

echo"<br>";

echo"2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando 
foreach.<br><br>";

foreach($array as $parametro => $valor){
    echo"$parametro: $valor<br>";
}

echo"<br>";

echo"3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.<br><br>";

$array['edad'] = 24;

$i = 1;

foreach($array as $parametro => $valor){
    echo"Dato $i º: $valor<br>";
    $i++;
}

echo"<br>";

echo"4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función 
var_dump. <br><br>";

unset($array['ciudad']);

var_dump($array);

echo"<br><br>";

echo"5) Crear un nuevo array con un valor separado por coma a partir de la cadena de texto 
\$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su 
información en orden descendente.<br><br>";

$letters = "a,b,c,d,e,f";
$arrayLetters = explode(",", $letters);

for($i = sizeof($arrayLetters); $i>0; $i--){
    echo"letter $i º: " . $arrayLetters[$i-1] . "<br>";
}

echo"<br>";

echo"6) Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son 
las siguientes:<br>
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1<br>
Guarda los datos en un array asociativo en el orden previo y muéstralos ordenados de 
mayor a menor.<br><br>";

$notas = array (
    "Miguel" => 5,
    "Luís" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

arsort($notas);

echo "Notas de los estudiantes: ";

foreach ($notas as $estudiante => $nota) {
    echo "$estudiante: $nota ";
}

echo"<br><br>";

echo"7) Calcula la media de las notas y muéstrala con solo 2 decimales.<br> Además, muestra los 
nombres de los alumnos cuya nota esté por encima de la media.<br><br> ";

$aux = 0;

foreach ($notas as $estudiante => $nota) {
    $aux += $nota;
}

$media = round($aux/sizeof($notas), 2);

echo"Media de las notas: $media<br>";

$estudiantesPorEncima = array();;

foreach ($notas as $estudiante => $nota) {
    if($nota>$media) array_push($estudiantesPorEncima, $estudiante);
}

echo"Alumnos con nota por encima de la media:<br>";
foreach ($estudiantesPorEncima as $estudiante) {
    echo "$estudiante<br>";
}

echo"<br>";

echo"8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y 
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del 
array. <br><br>";


$mejorNota = -1;
$mejorEstudiante = "";

foreach ($notas as $estudiante => $nota) {
    if ($nota > $mejorNota) {
        $mejorNota = $nota;
        $mejorEstudiante = $estudiante;
    }
}

echo "La nota más alta es $mejorNota y el mejor alumno es $mejorEstudiante<br>";