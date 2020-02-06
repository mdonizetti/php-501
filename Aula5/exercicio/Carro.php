<?php

require "funcionalidadesTrait.php";

class Carro
{
    use Funcionalidade;

    //Atributos do objeto carro (nao eh necessario)
    // public $marca = " ";
    // public $cor = "Preto";
    // public $ano = 2019;

    // Metodo executado na hora de criar um objeto
    public function __construct(
        string $marca,
        string $cor,
        int $ano = 1
    )
    {
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
    }
}

$carro = new Carro("GM", "Preto", 2019);
echo $carro->buzinar();
echo "<br>";
echo $carro->desligar();