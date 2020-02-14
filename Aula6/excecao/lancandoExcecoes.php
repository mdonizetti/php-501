<?php


class Comer
{
    public function __construct(bool $vegano)
    {
        $this->vegano = $vegano;
    }
    public function churrasco()
    {
        if($this->vegano)
        {
            //echo "Nao come carne, vim para fazer companhia";
            throw new Exception('Eu NUNCA iria em um churrasco');
        }else{
            echo "Estou comendo todas as carnes possiveis";   
        }
   
    }
}

$vegano = new Comer(true);

try{
    $vegano->churrasco();
}catch(\Exception $erro){
    echo "Vegano náo compareceu no churrasco";
    echo "<br>";
    //echo $erro;
//    die ('Deu certo nao');
}finally{
    echo "Todos se divertiram";
}

