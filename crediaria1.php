<?php 

echo "<h1>CREDIÁRIA 1 - 22/03/2024</h1>";

//Exercício 1
$celsius = 32;
$farenheit = ($celsius*1.8) + 32;
echo "<h4>Exercício 1</h4>";
echo "<p>Temperatura em graus Celsius: </p>",$celsius;
echo "<p><b>Temperatura em graus Farenheit: </b></p>",$farenheit;

echo "<br><br><br><br>";

//Exercício 2
$valGrama = 500;
$valKg = $valGrama/1000;
echo "<h4>Exercício 2</h4>";
echo "<p>Valor em gramas: </p>",$valGrama;
echo "<p><b>Valor em Kg (Quilogramas): </b></p>", $valKg;

echo "<br><br><br><br>";

//Exercício 3
$valBase = 2;
$valAltura = 4;
$valArea = ($valBase * $valAltura) / 2;
echo "<h4>Exercício 3</h4>";
echo "<p>Valor da base: </p>", $valBase;
echo "<p>Valor da altura: </p>", $valAltura;
echo "<p><b>Valor da área do triângulo: </b></p>", $valArea;

echo "<br><br><br><br>";

//Exercício 4
$salHora = 8.2;
$horasMes = 176;
$salario = $salHora*$horasMes;
echo "<h4>Exercício 4</h4>";
echo "<p>Salário por hora: </p>", $salHora;
echo "<p>Horas Trabalhadas no mês: </p>", $horasMes;
echo "<p><b>Salário: </b></p>", $salario;

?>