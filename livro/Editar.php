<?php
	include_once("../Class/Livros.class.php");
	if(!$_GET["ID"]){
		header("location:Listar.php");
	}
	else{
		$ID = $_GET["ID"];
		$objCategorias = new Livros();
		$objCategorias->id_livro=$id;
		//print_r($objCategorias->retornarUnico());
		$variavel = $objCategorias->retornarUnico();
	}
?>
                  	  <h4>Editar Livros</h4>
<form method="POST" action="InserirOk.php">
			<div >
                <label >Nome</label>
                    <div >
						<input type="text" name="Nome"value="<?php echo $variavel->nome;?>"/>
					</div>
            </div>
			
			<div >
                <label >Autor</label>
                    <div >
						<input type="text" name="Autor"value="<?php echo $variavel->autor;?>"/>
					</div>
            </div>
			
			<div >
                <label >Titulo</label>
                    <div >
						<input type="text" name="Titulo"value="<?php echo $variavel->titulo;?>"/>
					</div>
            </div>
			
			<div >
                <label >Descrição</label>
                    <div >
						<input type="text" name="Descrição"value="<?php echo $variavel->descricao;?>"/>
					</div>
            </div>
			
			<div >
                <label >Imagem</label>
                    <div >
						<input type="text" name="Imagem"value="<?php echo $variavel->imagem;?>"/>
					</div>
            </div>
			
							
			<div >
                <label >Data_publicacao</label>
                    <div >
						<input type="text" name="Data_publicacao"value="<?php echo $variavel->data_publicacao;?>"/>
					</div>
            </div>
			
			
            </div>
			
			<input type="submit" name="botão"/>
		    	     

		
		
		</form>

		
		</div>
	
	

