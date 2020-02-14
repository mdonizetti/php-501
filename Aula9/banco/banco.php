<?php

$servidor = 'mysql:host=localhost;dbname=curso'; 
$usuario = 'root';
$senha = '4linux';

echo "<pre>";

try{
    $conexao = new PDO($servidor,$usuario,$senha);

    //definindo o modo de erro da classe PDO
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->beginTransaction();
    //** Testando para mostrar os erros da funcao PDO **
    //$conexao->exec('DELETE FROM usua');

    $statement = $conexao->prepare('SELECT * FROM aluno WHERE nome like :nome');

    $nome = 'Marcelo';    
    $statement->bindParam(':nome', $nome);

    $statement->execute();
    $result = $statement->fetchAll();

    var_dump($result);
    $conexao->commit();



    //var_dump($conexao->query('SELECT * FROM aluno'));
    // **Instrucao de consulta no banco
    // foreach($conexao->query('SELECT * FROM aluno') as $row)
    // {  //print_r para imprimir o array resultante
    //      print_r($row);
    //      // ou posso acessar o indice
    //      echo $row['nome'];
    //      echo "<br>";
    // }
    //Instrucao de modificacao
    // echo $conexao->exec("INSERT INTO aluno (nome,sobrenome,email) VALUES ('Adriana','Correa','adriana.correa@gmail.com')");
    
    //echo $conexao->exec('DELETE FROM aluno WHERE id = "4"');
} catch (PDOException $e) {
    echo "Erro com o banco de dados: {$e}";
    $conexao->rollBack();
    die ();
} catch (Exception $e){
    echo $e;
    die();
}finally{
    unset($conexao);
}