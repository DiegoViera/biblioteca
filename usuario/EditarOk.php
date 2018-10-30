<?php
	include_once("../Class/Usuarios.class.php");
	$objUsuario = new Usuario();
	
	
	$objUsuario->Nome = $_POST["Nome"];
	$objUsuario->Email = $_POST["Email"];
	$objUsuario->Telefone = $_POST["Telefone"];
	$objUsuario->Foto = $_POST["Foto"];
	$objUsuario->Senha = $_POST["Senha"];
	
	
	$retorno = $objUsuario->editar();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "Não foi com sucesso";
?>
