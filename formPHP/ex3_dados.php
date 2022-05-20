<?php 
	if ($_POST['user'] == "etecia" && $_POST['senha'] == "etecia238") {
		echo "Autenticação  realizada  com  sucesso";
	} else {
		echo "Você não tem permissão de visualizar essa página";
	}
 ?>