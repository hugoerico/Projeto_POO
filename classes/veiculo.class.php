<?php
abstract class Veiculo 
{
    public function correr(){}
    abstract public function ligar();
}

class Moto extends Veiculo 
{
    public function ligar()
    {
        echo 'Ligando a motocicleta';
    } 
}

class Carro extends Veiculo 
{
    public function ligar()
    {
        echo 'Ligando a carro';
    }
}

class Caminhao extends Veiculo 
{
    public function ligar()
    {
        echo 'Ligando o caminhao';
    }
}

class Dirigir
{
    public function dirigir(Veiculo  $veiculo)
    {
        $veiculo ->ligar();
        $veiculo ->correr();
    }
}


