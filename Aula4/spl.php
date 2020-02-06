<?php

class Colecao implements Countable
{
    protected $itens = [];

    public function __construct(array $itens)
    {
        $this->itens = $itens;
    }
    public function count()
    {
        return count($this->itens);
    }
}

$colecao = new Colecao(['item1',  'item2', 'item3', 'item 4']);
// consigo lancar o valor da variavel no navegador
// var_dump ($colecao);
echo count($colecao);