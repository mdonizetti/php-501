<?php

interface Humano
{
    public function comer();
}

interface Funcionario extends Humano
{
    public function atenderCliente();
}

interface Desenvolvedor extends Humano, Funcionario
{
    public function desenvolver();
}

Class MultiTarefas implements Desenvolvedor
{
    const PACIENCIA = false;

    public function atenderCliente()
    {
       if(self::PACIENCIA == true){
           return "fazendo o melhor atendimento possível";
       }else
        return "Relizando o atendimento";
    }
    public function desenvolver()
    {
        return "Escrevendo códigos...";
    }
    public function comer()
    {
        return "10 minutos de almoço";
    }
}
$dev = new MultiTarefas();
echo $dev->atenderCliente();