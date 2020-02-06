<?php

// class Carro
// {
//     abstract protected function acelerar() : string
//     {
//         return '';
//     }
//     abstract protected function freiar()
//     {
//         return '';
//     }
//     abstract protected function abrirPortas()
//     {
//         return '';
//     }
// }


abstract class Carro
{
    abstract public function acelerar() : string;
    abstract public function freiar() : string;
    abstract public function abrirPortas() : string;

    public function buzinar()
    {
        echo "Bi Bi Bi";  
    }
}

class Fusca extends Carro
{
    public function acelerar() : string
    {
        return "Vrum Vrum";
    }
    public function freiar() : string
    {
        return "Freiando";
    }
    public function abrirPortas() : string
    {
        return "Abrindo";
    }
}


$carro = new Fusca();
echo $carro->acelerar();