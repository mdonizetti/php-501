<?php

require_once "autoload.php";

$ap1 = new ApartamentoDoisDormitorios('Avenida Paulista n.500',3,);
$ap2 = new ApartamentoDoisDormitorios('Avenida Faria Lima n.1000',13,4);

//Verificando os atributos do Ap1
echo "Meu Ap1";
echo "<br>";
echo "Endereco: " . $ap1->endereco;
echo "<br>";
echo "Andar: " . $ap1->andar;
echo "<br>";
echo "Numero " . $ap1->numero;

//Verificando os atributos do Ap2
echo "<br>";
echo "Meu Ap2";
echo "<br>";
echo "Endereco: " . $ap2->endereco;
echo "<br>";
echo "Andar: " . $ap2->andar;
echo "<br>";
echo "Numero " . $ap2->numero;


// $ap2 = new ApartamentoDoisDormitorios('3');
