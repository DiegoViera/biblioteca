<?php
	include_once("../Class/Usuarios.class.php");
	$Usuarios = new Usuario();
	
	$objUsuario->Nome = $_POST["Nome"];
	$objUsuario->Email = $_POST["Email"];
	$objUsuario->Telefone = $_POST["Telefone"];
	$objUsuario->Foto = $_POST["Foto"];
	$objUsuario->Senha = $_POST["Senha"];
	
	$retorno = $objUsuario->inserir();
	
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "Sabia que não ia funcionar";
?>
