<?php

class MetodosMagicos
{
    /**
     * Classe com varios metodos magicos do php
     * 
     * DocString = Documenta;áo do seu modulo
     * Um boa parte dos metodos magicos do php
     * @param string $nome para nomear o objeto
     */

    // declaracoes de variaveis
    public $nome;

    function __construct($nome)
     {
         // tem como funcionalidade executar codigo na hora da criacao do objeto
         $this->nome = $nome;
     }

     /**
      * Funcao destrutora
      * Executada na hora que meu objeto for destruido (espaco liberado da memoria)
      */
      function __destruct()
      {
          echo  "Adeus mundo cruel";
          //unset($obj);
      }

    /**
     * Funcao clone
     * Execurada ao clonar um objeto
     */
    function __clone()
    {
        echo "Objeto sendo clonado";
        //obj2 =clone($obj);
    }


    /**
     * Metodo toString
     * Usando na hora que o objeto tenta ser chamado como string
     */
    function __toString()
    {
        //retorno obrigatorio
        return 'Ei, náo faca isso';
        // echo $obj;
    }

    /**
     * Quanto tentamos chamar o objeto como funcao
     */
    function __invoke()
    {
        return "Este objeto náo pode ser chamado como funcao";
        //$obj();
    }

    /**
     * sleep
     * Metodo usado quando serializamos um objeto
      */
      function __sleep()
      {
          echo "Indo dormir....";
          //$obj = serialize($obj);
      }
    
      /**
     * WakeUp
     * Metodo usado quando deserializamos um objeto
     */
    function __wakeup()
    {
        echo "Acordando estou";
        // $obj = userialexe($obj);
    }

    /**
     * set
     * Quando tentamos instanciar um valor de variavel 
     */
      function __set($propriedade, $valor)
      {
          echo "Setando o valor $valor para o atributo $propriedade";
          // $obj->propriedade = 'valor';
      }

      /**
       * get
       * Chamado quando tentamos acessar um valor de propriedade
       */
      function __get($parametro)
      {
          echo "tentanto acessar o valor $parametro";
      }

      /**
       * call
       * Quando tentamos acessa um metodo da classe
       */
      function __callStatic($metodo, $argumentos)
      {
          echo "tentando acessa o metodo $metodo, com os parametros", implode($argumentos);
      }

      
}

$obj = new MetodosMagicos('Marcelo');



