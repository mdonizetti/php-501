<?php


class MinhaExcecao extends Exception
{
    public function __construct($message, $code=0, Exception $previous = null)
    {
        parent::__construct($message,$code,$previous);
    }
    public function __toString()
    {
        return __CLASS__.": [($this->code)]: {$this->messagem}\n";
    }
    public function customFunction()
    {
        echo "Uma funcao especifica desse tipo de excecao\n";
    }
}