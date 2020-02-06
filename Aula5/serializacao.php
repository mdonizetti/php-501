<?php

class Cachorro
{
    public function __construct(
                                $nome,
                                $raca
                                )
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = 0;
        $this->cor = 'Caramelo';
    }
    public function getRaca()
    {
        return $this->raca;
    }
    public function getNome();
    {
        return $this->nome;
    }
    private function latir() : string
    {
        return 'Au Au Au';
    }
}