<?php 
echo "<h2>Formulário - Cálculo IMC</h2>";

echo "Peso: ".$_GET['peso'];
echo "<br><br>";
echo "Altura: ".$_GET['altura'];
echo "<br><br>";

$imc = $_GET['peso'] / ($_GET['altura']*$_GET['altura']);

echo "Seu IMC: ".$imc;
echo "<br><br>";

if ($imc > 25) {
	echo "Você está acima do peso!";
	echo "<br><br>";
	echo"<img src ='images/joia_negativo.jpg' width=10%></img>";
	echo "<br><br>";
}
if ($imc <= 25) {
	echo "Você está saudável!";
	echo "<br><br>";
	echo"<img src ='images/joia_saudavel.jpg' width=10%></img>";
	echo "<br><br>";
}
 ?>