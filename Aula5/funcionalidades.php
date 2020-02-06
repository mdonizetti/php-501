<?php

trait Operacoes
{
    //Metodo Somar/subtrair/multiplicar e dividir para ser instanciado em uma clase
    public function somar($n1, $n2) : string
    {
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2) : float
    {
        return $n1 - $n2;
    }
    public function multiplicar($n1, $n2) : float
    {
        return $n1 / $n2;
    }
    public function dividir($n1, $n2) : float
    {
        return $n1 * $n2;
    }
}

trait OperacoesComplexas
{
    //metodo com o mesmo nome
    public function somar(array $numeros) : float
    {
        return array_sum($numeros);
    }
    
    //metodo elevar para implementar em uma classe
    public function elevar ($num,$expo) : float
    {
        return pow($num,$expo);
    }
    //metodo raizQuadrada para implementa em uma classe
    public function raizQuadrada($num) : float
    {
        return sqrt($num);
    }
}

trait Formatar
{
    public function quebrarLinha($numeroDeLinhas = 1)
    {
        for($i = 1; $i <= $numeroDeLinhas; $i++)
        //foreach($numeroDeLinhas as $linha)
        {
            echo "<br>";
        }
    }
}





