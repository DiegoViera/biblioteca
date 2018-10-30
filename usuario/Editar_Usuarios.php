<?php
	include_once("../Class/Usuarios.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Usuario.php");
	}
	else{
		$ID = $_GET["ID"];
		$objUsuarios = new Usuario();
		$objUsuarios->id_usuario=$ID;

		$variavel = $objUsuario->retornarUnico();
	}
?>
                  	  <h4> Editar usuario</h4>
<form method="POST" action="EditarOk.php">
	                      <div >
                              <label >Nome</label>
                              <div>
							  <input type="text" name="Nome" value="<?php echo $variavel->Nome;?>"/>
							  </div>
                          </div>
						  
	                      <div>
                              <label >Email</label>
                              <div>
							  <input type="text" name="Email" value="<?php echo $variavel->Email;?>"/>
							  </div>
                          </div>
						  
	
	                      <div >
                              <label>Telefone</label>
                              <div >
							  <input type="text" name="Telefone"value="<?php echo $variavel->Telefone;?>"/>
							  </div>
                          </div>
						  
	                      <div>
                              <label >Foto</label>
                              <div >
							  <input type="text" name="Foto"value="<?php echo $variavel->Foto;?>"/>
							  </div>
                          </div>
						  
	                      <div>
                              <label>Senha</label>
                              <div>
							  <input type="text" name="Senha"value="<?php echo $variavel->Senha;?>"/>
							  </div>
                          </div>
	<input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	<input type="submit" value="Alterar"/>
	<input type="reset" value="Limpar"/>
</form>
</div>
</div>
