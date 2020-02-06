<?php




class Quadrado implements Forma
{
    /**
     * Esta Classe tem como funcionalidade calcular atributos de um circuito
     */
    public function __construct(float $lado)
    {
        $this->lado = $lado;
    }
    public function getArea(): float
    {
        /**
         * Este metodo calcula a are de um Quadrado
         */
        return pow($this->lado, 2);
    }
}