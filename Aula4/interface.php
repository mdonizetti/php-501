<?php

interface  Carro
{
    //modelo do nosso contrato da interface
    public function acelerar();
    public function freiar();
    public function re();
    public function buzinar();

    const RODAS = 4;
}

class Fusca implements Carro
{
    public function acelerar()
    {
        return "Trec Trec";
    }
    public function freiar()
    {
        return "Barulho de freiada";
    }
    public function re()
    {
        return "Sai de Tras";
    }
    public function buzinar()
    {
        return "BIBIBIBIBIBIB";
    }
    

}
$fusca = new Fusca();
echo $fusca->acelerar();