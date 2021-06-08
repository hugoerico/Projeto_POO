<?php

include_once 'classes/cliente.class.php';
include_once 'classes/usuario.class.php';
include_once 'classes/pedido.class.php';
include_once 'classes/produto.class.php';

$cliente = new Cliente;
$usuario = new Usuario;
$pedido = new Pedido;
$produto = new Produto;




$a = $usuario->getGeral();
$b = $produto->getGeral(); 
$c = $cliente->getGeral(); 


