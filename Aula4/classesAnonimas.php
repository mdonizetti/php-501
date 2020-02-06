<?php


// class MinhaClasse{
//     function apresentar()
//     {
//         return "Oieee";
//     }
// }

// $obj = new MinhaClasse();
// echo $obj->apresentar();


//Classes anonimas
//Sao estrutura de classes que náo precisam
//ser declarados em um espaco do projeto para serem utilizados

$obj = new class
{
    function apresentar()
    {
        echo "oieee"; 
    }
};

$obj->apresentar();

// Funcao anonima para calculos matematicos

var_dump(new class(10,20){
    private $resultado;

    public function __construct ($num,$num2)
    {
        $this->resultado = $num + $num2;
    }

});

