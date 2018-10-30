<?php
class Usuarios {
	private $id;
	private $nome;
	private $email;
	private $telefone;
	private $foto;
	private $senha;
	private $tabela;
	private $conexao;
	

	public function __construct(){
		$this->conexao = mysqli_connect("127.0.0.1", "root","","biblioteca") 
		or die ("Erro ao conectar");
		$this->tabela = "usuarios";
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
		$sql = "INSERT INTO $this->tabela(nome, email, telefone, foto, senha)
		values('$this->nome','$this->email',$this->telefone,'$this->foto','$this->senha')";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function listar(){
		$sql = "SELECT * FROM $this->tabela ";
		$retorno = mysqli_query($this->conexao, $sql);
		
		$arrayObj=NULL;
		while ($res = mysqli_fetch_assoc($retorno)){
			$obj = new Usuarios();
			$obj->ID=$res["id]"];
			$obj->Nome=$res["nome"];
			$obj->Email=$res["email"];
			$obj->Telefone=$res["telefone"];
			$obj->Foto=$res["foto"];
			$obj->Senha=$res["senha"];
			
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
			$objCategorias->ID = $resultado['id'];
			$objCategorias->Nome = $resultado['nome'];
			$objCategorias->Email = $resultado['email'];
			$objCategorias->Telefone = $resultado['telefone'];
			$ObjCategorias->Foto = $resultado['foto'];
			$objCategorias->Senha = $resultado['senha'];
			
			$retorno = $objCategorias;
		}
		else{
			$retorno = NULL;
		}
		return $retorno;
	}


	
	public function loginUser(){
		$sql = "SELECT * FROM $this->tabela WHERE Email= '$this->Email' and Senha = '$this->Senha' and Tipo='user'";

		echo $sql;
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Usuarios();
			$objCategorias->ID = $resultado['id'];
			
			$retorno = $objCategorias;
		}
		else{
			$retorno = NULL;
		}
		return $retorno;
	}
	
	public function editar(){
		$sql = "UPDATE $this->tabela SET Nome = '$this->nome', email = '$this->email', telefone = $this->telefone, foto = '$this->foto', senha = '$this->senha' WHERE ID = $this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function excluir(){
		$sql = "DELETE FROM $this->tabela WHERE ID = $this->id";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
		
	}
}

?>