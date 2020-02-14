<?php

require __DIR__ . '/vendor/autoload.php';
require "Operacoes.php";

use PHPUnit\Framework\TestCase;

class OperacoesTest extends TestCase
{
    public function testSomar()
    {
        $operacoes = new Operacoes;

        $total = $operacoes->somar(2,2);

        $this->assertEquals(4,$total,'Erro na soma');
        $this->assertNotEquals(5,$total,'Erro na soma');

    }
}
