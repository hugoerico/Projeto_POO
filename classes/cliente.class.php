<?php

require_once 'conexao.class.php';
//require 'interfaces/usuario.interface.php';

Class Cliente extends Banco  {

    
    protected $id;
	protected $nomeco;
    protected $email1;
    protected $senha1;
    protected $endereco;
    protected $categoria1;
    protected $senhadocartao;


    public function __construct()
    {
        parent::__construct();
    }
    
    public function setDados(array $dados){
        $this->nomeco = $dados[0] ?? null;
        $this->email1 = $dados[1] ?? null;
        $this->senha1 = $dados[2] ?? null;
        $this->endereco = $dados[3] ?? null;
        $this->categoria1 = $dados[4] ?? null;
        $this->senhadocartao = $dados[5] ?? null;

    
        return $this->inserir();
       
             
    }
    public function inserir(){

        $stmt = $this->dns->prepare('INSERT INTO cliente (nomeco, email1, senha1, endereco, categoria1, senhadocartao) VALUES (:nomeco, :email1, :senha1, :endereco, :categoria1, :senhadocartao)');
    
            if( $stmt->execute([':nomeco' => $this->nomeco,':email1' => $this->email1,':senha1' => $this->senha1, ':endereco' => $this->endereco, ':categoria1' => $this->categoria1, ':senhadocartao' => $this->senhadocartao ])){
    
                return true;
            }
    }
    public function getId($em, $se){
          
          $stmt = $this->dns->prepare("SELECT idcliente FROM cliente WHERE senha1 = '{$se}' AND email1 = '{$em}'");
    
            $stmt->execute();
            $s=$stmt->fetchAll();
            $this->id=$s[0][0];
            
    }
}