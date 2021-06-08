<?php

include_once 'classes/cliente.class.php';
include_once 'classes/usuario.class.php';
include_once 'classes/pedido.class.php';
include_once 'classes/produto.class.php';

$cliente = new Cliente;
$usuario = new Usuario;
$pedido = new Pedido;
$produto = new Produto;

if (isset($_POST['cadastro_cliente'])) {

    $nomeco         = $_POST['nomeco'];
    $email1         = $_POST['email1'];
    $senha1         = $_POST['senha1'];
    $endereco       = $_POST['endereco'];
    $categoria1     = $_POST['categoria1'];
    $senhadocartao  = $_POST['senhadocartao'];

    $cliente->setDados([$nomeco, $email1, $senha1, $endereco, $categoria1, $senhadocartao]);

    header("Location: geralCliente.php");
}
if (isset($_POST['id_cliente'])) {

    $id= $_POST['id'];
    

    $cliente->apagar($id);

    header("Location: geralCliente.php");
}

if (isset($_POST['cadastro_usuario'])) {

    $email  = $_POST['email'];
    $nomec  = $_POST['nomec'];
    $senha  = $_POST['senha'];

    $usuario->setDados([$nomec, $email, $senha]);

    header("Location: geralUsuario.php");
}
if (isset($_POST['id_usuario'])) {

    $id= $_POST['id'];
    

    $usuario->apagar($id);

    header("Location: geralUsuario.php");
}

if (isset($_POST['cadastro_produto'])) {

    
	$nome       = $_POST['nome'];
    $preco      = $_POST['preco'];
    $qtde       = $_POST['qtde'];
    $categoria  = $_POST['categoria'];

    $produto->setDados([$nome, $preco, $qtde, $categoria]);

    header("Location: geralProduto.php");
}
if (isset($_POST['id_produto'])) {

    $id= $_POST['id'];
    

    $produto->apagar($id);

    header("Location: geralProduto.php");
}
