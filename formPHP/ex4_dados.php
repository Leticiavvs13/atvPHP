<?php 
	echo "<h2>Recebendo dados - Avaliação</h2>";
	echo "O que você achou do site? ";
	if (isset($_GET['gostou'])) {
		echo $_GET['gostou'];
	}
	echo "<br><br>";
	echo "Qual seção que você mais gostou?";

	echo "<br><br>";
	echo $_GET['secoes'];
	echo "<br>";
	echo "Outra:".$_GET['outra'];

	echo "<br><br>";
	echo "Digite seus comentários no campo abaixo:";
	echo "<br>";
	echo $_GET['coment'];

	echo "<br><br>";
	echo "Diga-nos como entrar em contato com você";
	echo "<br>";
	echo "Nome: ".$_GET['nome'];
	echo "<br>";
	echo "E-mail: ".$_GET['email'];
	echo "<br>";
	echo "Phone: ".$_GET['phone'];

	echo "<br><br>";
	echo "Quero receber informações por e-mail: ";
	if (isset($_GET['info'])) {
		echo "SIM";		
	} else {
		echo "NÃO";
	}

 ?>