<?php

$servidor = 'mysql:host=localhost;dbname=curso'; 
$usuario = 'root';
$senha = '4linux';

echo "<pre>";
try{
    $conexao = new PDO($servidor,$usuario,$senha);

    //var_dump($conexao->query('SELECT * FROM aluno'));
    // foreach($conexao->query('SELECT * FROM aluno') as $row)
    // {
    //     print_r($row);
    //     echo "<br>";
    // }

    echo $conexao->exec('DELETE FROM aluno WHERE id = "4"');
} catch (PDOException $e) {
    echo $e;
    die ();
} catch (Exception $e){
    echo $e;
    die();
}finally{
    unset($conexao);
}

