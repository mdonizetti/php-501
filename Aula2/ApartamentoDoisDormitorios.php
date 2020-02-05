<?php

class ApartamentoDoisDormitorios
{
    //Atributos do objeto
    public $quartos = 2;
    public $paredes = 5;
    public $janelas = 1;
    public $piso = 'Porcelanato';
    //public $andar = 1;
    public $preco = 180000;
    
    //Atributos da classe
    const AREA = 35;
    const BANHEIROS = 1;
    const ELETRICIDADE = true;

    //Metodos magicos de classe
    //Metodo para qdo um objeto desta classe for clonado
    public function __clone()
    {
        echo "Construindo um predio parecido";
        echo "<br>";
    }
    
    // Metodo executado na hora de criar um objeto
    public function __construct(
                                string $endereco,
                                int $numero, 
                                int $andar = 1                        
                                )
    {
        $this->endereco = $endereco;
        $this->andar = $andar;
        $this->numero = $numero;
        echo "Construindo um objeto";
        echo "<br>";
    }
    
    //Metodo executado na hora que o endereco de memoria eh desalocado
    public function __destruct()
    {
        echo "<br>";
        echo "Destruindo o objeto";
        echo "<br>";
    }


    //Metodos do objeto
    public function abrigar()
    {
        echo "Abrigando . $this->preco";
        echo "<br>";
    }
    public function get_andar()
    {
        echo $this->andar;
        echo "<br>";
    }

    //Metodos de classe
    public static function help()
    {
        echo "Essa classe cria um ap de 2 dormitorio";
    }

}
// // Criando Objetos
// $ruaVergueiro = new ApartamentoDoisDormitorios();
// $avenidaPaulista = new ApartamentoDoisDormitorios();

// $ruaVergueiro->preco = 200000;

// //acessar os atributos do objeto
// //accessar os atributos do objeto 1
// echo "Aparamento Rua Vergueiro";
// echo "Quantidade de quartos:" . $ruaVergueiro->quartos;
// echo "<br>";
// echo "Qual o andar está o apartamento:" . $ruaVergueiro->andar;
// echo "<br>";

// // criar novo metodo para o objeto 1
// //Atributo unico para o apartamento da Rua Vergueiro
// $ruaVergueiro->tv = true;
// var_dump($ruaVergueiro->tv);

// //acessar os atributos do objeto 2
// echo "Apartamento Avenida Paulista";
// echo "Quantidade de quartos:" . $avenidaPaulista->quartos;
// echo "<br>";
// echo "Qual o andar está o apartamento:" . $avenidaPaulista->andar;
// echo "<br>";

// //Acessando Metodos
// $avenidaPaulista->abrigar();
// $ruaVergueiro->abrigar();
// $avenidaPaulista->get_andar();
// $ruaVergueiro->get_andar();


