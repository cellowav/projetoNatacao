<?php
	$categorias = [];
	$categorias[] = "infantil";
	$categorias[] = "adolescente";
	$categorias[] = "adulto";
	$categorias[] = "idoso";

	//print_r($categorias);

	$nome = "Eduardo";
	$idade = 16;

	//var_dump($nome, $idade);

	if($idade >= 6 && $idade <= 12)
	{

		for($i = 0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == "infantil")
			{
				echo "O nadador ". $nome ." competirá na categoria ". $categorias[0];
			}
			
		}

	}else if($idade >= 13 && $idade < 18)
	{

		for($i = 0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == "adolescente")
			{
				echo "O nadador ". $nome ." competirá na categoria " . $categorias[1];
			}
		}
	}else
	{

		for($i = 0; $i <= count($categorias); $i++)
		{
			if($categorias[$i] == "adulto")
			{
				echo "O nadador ". $nome ." competirá na categoria ". $categorias[2];;
			}
		}
	}

?>