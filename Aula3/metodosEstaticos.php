<?php

class MinhaClasse
{
    //Atributo estatico de classe
    public static $atributo1 = 'Atributo 1';

    public function valor()
    {
        return self::$atributo1;
    }
}

echo MinhaClasse::$atributo1;
echo "<br>";
MinhaClasse::$atributo1 = 'Valor modificado';
echo MinhaClasse::$atributo1;