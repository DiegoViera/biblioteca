<?php
class Livro {
	private $id_livro;
	private $nome;
	private $edicao;
	private $titulo;
	private $descrição;
	private $imagem;
	private $id_genero;
	private $data_publicação;
	
	private $tabela;
	private $conexao;
	

	public function __construct(){
		$this->conexao = mysqli_connect("127.0.0.1", "root","","biblioteca") 
		or die ("Erro ao conectar");
		$this->tabela = "livro";
	}
	// O construtor serve para 2 coisas, fazer a conexão com o banco e e definir que tabela será usada;
	public function __destruct(){
		unset($this->link);
	}
	// Fecha a conexão com o banco;
	public function __get($key){
		return $this->$key;
	}
	//O Get pega algum valor do banco;
	public function __set($key, $value){
		$this->$key = $value;
	}
	// O Set altera algum valor de um campo/atributo da classe;
	
	public function inserir(){
		$sql = "INSERT INTO livro(titulo,descricao,edicao,,data_publicacao,imagem,nome,id_livro,id_genero)
		values('$this->titulo','$this->descricao','$this->edicao','$this->data_publicacao','$this->imagem','$this->nome','$this->id_livro,'$this->id_genero')";
		$retorno = mysqli_query($this->conexao, $sql)or die ("vai na fé" .mysqli_connect_error());
		return $retorno;
	}
	 
	public function listar(){
		$sql = "SELECT * FROM $this->tabela ";
		$retorno = mysqli_query($this->conexao, $sql);
		
		$arrayObj=NULL;
		while ($res = mysqli_fetch_assoc($retorno)){
			$obj = new Usuarios();
			$obj->ID=$res["ID"];
			$obj->Nome=$res["nome"];
			$obj->Titulo=$res["titulo"];
			$obj->Descrição=$res["descrição"];
			$obj->Imagem=$res["imagem"];
			$obj->id_genero=$res["id_genero"];
			
			
			$arrayObj [] = $obj;
		}
		return $arrayObj;
	}
	
	
		public function retornarUnico(){
		$sql = "SELECT * FROM $this->tabela WHERE ID=$this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Usuarios();
			$objCategorias->ID = $resultado['ID'];
			$objCategorias->Nome = $resultado['nome'];
			$objCategorias->Titulo = $resultado['titulo'];
			$objCategorias->Descrição = $resultado['descrição'];
			$objCategorias->Imagem = $resultado['imagem'];
			$objCategorias->id_genero = $resultado['id_genero'];
			
			$retornito = $objCategorias;
		}
		else{
			$retorno = NULL;
		}
		return $retorno;
	}
	
	
	
	
	
	public function editar(){
		$sql = "UPDATE $this->tabela SET nome = '$this->nome', titulo = '$this->titulo', descrição = '$this->descrição', imagem = '$this->imagem', id_genero = $this->id_genero";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function excluir(){
		$sql = "DELETE FROM $this->tabela WHERE ID = $this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
		
	}
}

?>