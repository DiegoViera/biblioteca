<?php
	include_once("../Class/Livros.class.php");
	if(!$_GET["ID"]){
		header("location:Listar.php");
	}
	else{
		$ID=$_GET["ID"];
		$objCategorias = new Livros();
		$objCategorias->Id_livro = $id;
		$retorno = $objCategorias->excluir();
		if($retorno){
			echo "Excluido com sucesso!!!";
		}
			
		else{
			echo "PARABENS!!! não foi excluido <3";
		}
			
	}
?>