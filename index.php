<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulário de inscrição</title>
	<meta charset="UTF-8">
</head>
<body>
	<p>Formulário de inscrição de competidor:</p>

	<form action="script.php" method="post">
		<?php
			$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
			if(!empty($mensagemDeErro))
			{
				echo $mensagemDeErro;
			}

			$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
			if(!empty($mensagemDeSucesso))
			{
				echo $mensagemDeSucesso;
			}
		 ?>
		<p> Nome: <input type="text" name="nome"></p>
		<p> idade: <input type="text" name="idade"></p>
		<p> <input type="submit" value="Enviar"></p>
	</form>
</body>
</html>