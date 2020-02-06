<?php



class Circulo implements Forma
{
    /**
     * Esta Classe tem como funcionalidade calcular atributos de um circuito
     */
    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }
    public function getArea(): float
    {
        /**
         * Este metodo calcula a are de um circulo
         */
        return pow($this->raio,2) * self::PI;
    }
}