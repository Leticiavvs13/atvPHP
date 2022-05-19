<?php 
	echo "<h3> Recuperando Dados - Cálculo Retângulo</h3>";
	echo "Base: ".$_REQUEST['base'];
	echo "<br>";
	echo "Altura: ".$_REQUEST['altura'];
	echo "<br>";

	$area = $_REQUEST['base'] * $_REQUEST['altura'];
	$perimetro = 2 * ($_REQUEST['base'] + $_REQUEST['altura']);

	echo "<br><br>";

	echo "A ÁREA do Retângulo é: ".$area;
	echo "<br><br>";
	echo "O PERÍMETRO do Retângulo é:".$perimetro;
 ?>