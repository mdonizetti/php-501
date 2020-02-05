<?php

include_once "autoload.php";
echo "<pre>";

//Clonando o objeto (Para ver a alteracao, retirar a palavra clone)
$ap1 = new ApartamentoDoisDormitorios();
// echo $ap1->andar;
$ap2 = clone $ap1;

//teste de id
var_dump($ap1);
var_dump($ap2);

//modificando atributos
$ap1->preco = 20000;
echo $ap1->preco . " " . $ap2->preco;
