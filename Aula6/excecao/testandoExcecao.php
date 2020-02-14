<?php

include "MinhaExcecao.php";

class TesteException
{
    public function mensagem(string $msg) : string
    {
        if (empty($msg)){
        throw new MinhaExcecao('Parametro mensagem é obritáorio');
        }
        return $msg;
    }
}

$mensagem = new TesteException();
try{
    $mensagem->mensagem('');
}catch (MinhaExcecao $e){
    echo "Deu ruim na classe TesteException";
}catch(Exception $e){
    echo "Deu ruim nisso aki: " . $e;
}