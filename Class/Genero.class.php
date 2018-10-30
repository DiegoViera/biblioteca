<?php
class Genero {
	private $id;
	private $nombre;
	
	
	private $tabela;
	private $conexao;
	

	public function __construct(){
		$this->conexao = mysqli_connect("127.0.0.1", "root","","biblioteca") 
		or die ("Erro ao conectar");
		$this->tabela = "genero";
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
		$sql = "INSERT INTO $this->tabela(nombre)
		values('$this->nombre')";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function listar(){
		$sql = "SELECT * FROM $this->tabela ";
		$retorno = mysqli_query($this->conexao, $sql);
		
		$arrayObj=NULL;
		while ($res = mysqli_fetch_assoc($retorno)){
			$obj = new Genero();
			$obj->id=$res["id"];
			$obj->nombre=$res["nombre"];
			
			
			$arrayObj [] = $obj;
		}
		return $arrayObj;
	}
	
	
		public function retornarUnico(){
		$sql = "SELECT * FROM $this->tabela WHERE ID=$this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Genero();
			$objCategorias->id = $resultado['id'];
			$objCategorias->nombre = $resultado['nombre'];
			
			$retorno = $objCategorias;
		}
		else{
			$retorno = NULL;
		}
		return $retorno;
	}
	
	
	
	
	
	public function editar(){
		$sql = "UPDATE $this->tabela SET nombre = '$this->nombre'";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function excluir(){
		$sql = "DELETE FROM $this->tabela WHERE id = $this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
		
	}
}

?>