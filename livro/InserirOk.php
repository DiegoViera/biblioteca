<?php
	include_once("../class/Livros.class.php");

	$objCategorias = new Livro();
	
	$objCategorias->id_livro = $_POST["id_livro"];
	$objCategorias->id_genero = $_POST["id_genero"];
	$objCategorias->nome = $_POST["nome"];
	$objCategorias->titulo = $_POST["titulo"];
	$objCategorias->edicao = $_POST["edicao"];
	$objCategorias->descricao = $_POST["descricao"];
	$objCategorias->imagem = $_POST["imagem"];
	$objCategorias->data_publicacao = $_POST["data_publicacao"];	
	$retorno = $objCategorias->inserir();
	
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "Sabia que não ia funcionar";
?>