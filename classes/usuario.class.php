<?php

require_once 'conexao.class.php';
//require 'interfaces/usuario.interface.php';

Class Usuario extends Banco  {
    
    protected $id;
	protected $email;
	protected $nome;
    protected $senha;


    public function __construct()
    {
        parent::__construct();
    }


public function setDados(array $dados){
    $this->nomec = $dados[0] ?? null;
	$this->email = $dados[1] ?? null;
	$this->senha = $dados[2] ?? null;

	return $this->inserir();
   
         
}
public function inserir(){

    $stmt = $this->dns->prepare('INSERT INTO usuario (nomec, email,senha) VALUES (:nomec, :email, :senha)');

		if( $stmt->execute([':nomec' => $this->nomec,':email' => $this->email,':senha' => $this->senha ])){

			return true;
		}
}
public function getId($em, $se){
      
      $stmt = $this->dns->prepare("SELECT idusuario FROM usuario WHERE senha = '{$se}' AND email = '{$em}'");

		$stmt->execute();
        $s=$stmt->fetchAll();
        $this->id=$s[0][0];
        
}
public function getGeral(){
          
    $stmt = $this->dns->prepare("SELECT * FROM usuario ");
    $stmt->execute();
    $s=$stmt->fetchAll();
    return $s;
}
public function apagar($id){

    $stmt = $this->dns->query("DELETE FROM usuario WHERE idusuario ='{$id}'");
    $stmt->execute();
 }

}
