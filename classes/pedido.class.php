<?php
Class Pedido extends Banco  {
    
    protected $idproduto;
	protected $idcliente;
	

    public function __construct()
    {
        parent::__construct();
    }


public function setDados(array $dados){
    $this->idproduto = $dados[0] ?? null;
	$this->idcliente = $dados[1] ?? null;

	return $this->inserir();
   
         
}
public function inserir(){

    $stmt = $this->dns->prepare('INSERT INTO pedido (idproduto, idcliente) VALUES (:idproduto, :idcliente)');

		if( $stmt->execute([':idproduto' => $this->idproduto,':idcliente' => $this->idcliente])){

			return true;
		}
}
public function mostrar($id){

    $stmt = $this->dns->prepare("SELECT * FROM pedido WHERE idcliente = '{$id}'");

		$stmt->execute();

		return $stmt->fetchAll();
  }
public function apagar($id){

    $this->dns->query("DELETE FROM pedido WHERE idcliente ='{$id}'");
   
 }

}