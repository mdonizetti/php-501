<?php

class Cachorro
{
    public function __construct(
        $nome,
        $raca
    ) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = 0;
        $this->cor = 'Caramelo';
    }
    public function __sleep()
    {
        echo "Cachorro {$this->nome}, acaba de ir dormir";
        echo "<br>";
        return ['nome', 'raca', 'idade', 'cor'];
    }
    public function __wakeup()
    {
        echo "Cachorro está acordando de um logo sono";
        echo "<br>";
        $this->nome ='Rex';
    }
    public function __invoke()
    {
        return "Esse metodo nao existe";
    }

    public function getRaca(): string
    {
        return $this->raca;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function latir(): string
    {
        return 'Au au au';
    }
    public function dormir(): string
    {
        return "ZzZ..ZzZ..Zz";
    }
}

$dog1 = new Cachorro('Totó', 'Vira Lata');
// // echo $dog1->getRaca();
// //var_dump(serialize($dog1));
// // ** serealizando o cachorro 
// $dog1 = serialize($dog1);

// //** deserealizado o cachorro dog1 (tranformando ele novamente em objeto)
// $dog2 = unserialize($dog1);
// var_dump($dog2);

// echo "<br>";
// echo $dog2->latir();

echo $dog1->latir();

