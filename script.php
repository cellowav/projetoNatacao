<?php
	$categorias = [];
	$categorias[] = "infantil";
	$categorias[] = "adolescente";
	$categorias[] = "adulto";
	$categorias[] = "idoso";

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	if(empty($nome))
	{
		echo "O campo nome é obrigatório!";
		return;
	}

	if(strlen($nome) < 3)
	{
		echo "O nome prcisa conter 3 ou mais caracteres !";
		return;
	}

	if(strlen($nome) > 40)
	{
		echo "O nome é muito extenso !";
		return;
	}

	if(! is_numeric($idade))
	{
		echo "Informe um número para a idade !";
		return;
	}

	if($idade >= 6 && $idade <= 12)
	{

		for($i = 0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == "infantil")
			{
				echo "O nadador ". $nome ." competirá na categoria ". $categorias[$i];
			}
			
		}

	}else if($idade >= 13 && $idade < 18)
	{

		for($i = 0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == "adolescente")
			{
				echo "O nadador ". $nome ." competirá na categoria " . $categorias[$i];
			}
		}
	}else if($idade >= 18 && $idade < 60)
	{

		for($i = 0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == "adulto")
			{
				echo "O nadador ". $nome ." competirá na categoria ". $categorias[$i];;
			}
		}
	}else
	{
		echo "O nadador ". $nome . "competirá na categoria ". $categorias[$i];
	}

?>