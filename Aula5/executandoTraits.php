<?php


require "funcionalidades.php";

//usando multiplas traits
class Calculadora
{
    use Operacoes, OperacoesComplexas, Formatar
    {
    Operacoes::somar insteadOf OperacoesComplexas;
    OperacoesComplexas::somar as somarLista;}
}

// //usando somente uma trait
// class CalculadoraSimples
// {
//     use Operacoes;
// }

// //usando somente uma trait
// class CalculadoraComplexa
// {
//     use OperacoesComplexas;
// }


//Criei meu objeto calculadora
$calculo = new Calculadora;
//utilizando os metodos do trait Operacoes Simples
echo "A soma de 2 com 3 da Operacoes eh {$calculo->somar(2,3)}";
$calculo->quebrarLinha(5);
//echo "<br>";
echo $calculo->subtrair(5,3);
$calculo->quebrarLinha();
//echo "<br>";
echo $calculo->multiplicar(21,3);
$calculo->quebrarLinha();
//echo "<br>";
echo $calculo->dividir(40,5);
$calculo->quebrarLinha();
//echo "<br>";



// utilizando os metodos da traitOperacoes Complexas
echo "3 elevado ao quadrado {$calculo->elevar(3,2)}";
echo "<br>";
echo "a Raiz de 9 é {$calculo->raizQuadrada(9)}";

// utilizando o metodo somar da trait Operacoes Complexas
$calculo->quebrarLinha(2);
echo "executando o somar do Operacoes Complexas {$calculo->somarLista([7,3])}";