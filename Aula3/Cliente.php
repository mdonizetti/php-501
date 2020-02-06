<?php

//Como fazer herança de classe
class Cliente extends Pessoa
{
    public function __construct(
                        string $nome,
                        string $sobrenome,
                        string $sexo,
                        string $dataNascimento,
                        float $qtdDinheiro,
                        string $naturalidade = "Brasileiro"
                        )
    {
        parent::__construct($nome,$sobrenome,$sexo,$dataNascimento,$naturalidade);
        $this->qtdDinheiro = $qtdDinheiro;
    }
    public function comprar()
    {
        echo "Estou gastando muito dinheiro";
    }
    public function apresentar()
    {
        $retorno = parent::apresentar();
        return "Eu sou o cliente " . $retorno;
    }
}
