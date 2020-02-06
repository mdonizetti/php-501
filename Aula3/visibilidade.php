<?php

class MinhaClasse
{
    //acessado por qualquer funcao em qualquer escopo
    public $publico = "publico";
    //acessado somente pela propria classe e suas herdeiras
    protected $protegido = "protegido";
    //acessado somente pelo escopo desta classe
    private $privado = "privado";

    function printProperty()
    {
        echo $this->publico;
        echo $this->protegido;
        echo $this->privado; 
    }

}
class MinhaClasse2 extends MinhaClasse
{
    function printProperty()
    {
        echo "Minha Classe 2";
        echo "<br>";
        echo $this->publico;
        echo $this->protegido;
        echo $this->privado; 
    }   
}

$acessos = new MinhaClasse();
// echo $acessos->publico;
// echo $acessos->protegido;
// echo $acessos->privado;
$acessos->printProperty();