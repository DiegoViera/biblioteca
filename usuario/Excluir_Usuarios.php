<?php
	include_once("../Class/Usuarios.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Usuario.php");
	}
	else{
		$ID=$_GET["id_usuario"];
		$objUsuario = new Usuario();
		$objUsuario->id_usuario = $ID;
		$retorno = $objUsuario->excluir();
		if($retorno){
			echo "Exluido com sucesso!!!";
		}
			
		else{
			echo "PARABENS!!! não foi excluido <3";
		}
			
	}
?>