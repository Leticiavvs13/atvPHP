<!DOCTYPE html>
<html>
<head>
	<title>Formulário - Avaliação</title>
</head>
<body>
	<h2>Formulário - Avaliação</h2>

	<form name="avaliacao" method="GET" action="ex4_dados.php">
		<p><strong>O que você achou do site?</strong></p>
		<input type="radio" name="gostou" value="Muito Bom">Muito Bom
		<input type="radio" name="gostou" value="Bom">Bom
		<input type="radio" name="gostou" value="Regular">Regular

		<p><strong>Qual seção que você mais gostou?</strong></p>
		<select name="secoes">
			<option value="Em Cartaz">Em cartaz</option>
			<option value="Programação">Programação</option>
			<option value="Cinema">Cinema</option>
			<option value="Filme">Filme</option>
		</select>
		Outra:<input type="text" name="outra">

		<p><strong>Digite seus comentários no campo abaixo</strong></p>
		<textarea name="coment" rows="8" cols="50"></textarea>

		<p><strong>Diga-nos como entrar em contato com você</strong></p>
		Nome:<input type="text" name="nome"><br/><br/>
		E-mail:<input type="text" name="email"><br/><br/>
		Phone:<input type="text" name="phone"><br/><br/>

		<input type="checkbox" name="info" value="Sim, quero receber">Quero receber informações por e-mail.<br/><br/>

		<input type="submit" name="Enviar Dados">

		<input type="reset" name="Limpar Formulários">


	</form>

</body>
</html>