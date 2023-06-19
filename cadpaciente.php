<?php 
var_dump($_POST);
extract($_POST);

//Incluir a conexão
include './conexaomysql.php';
$conexao = getConnection();

$sql = 'INSERT INTO pacientes (nome, telefone, email, cidade, status_paciente, categoria_id) 
VALUES (?,?,?,?,?,?)';

$sqlInsert = $conexao->prepare($sql);

$sqlInsert->bindParam(1,$_POST['inputNome']);
$sqlInsert->bindParam(2,$_POST['inputTelefone']);
$sqlInsert->bindParam(3,$_POST['inputEmail']);
$sqlInsert->bindParam(4,$_POST['inputCidade']);
$sqlInsert->bindParam(5,$_POST['inputCategoria']);
$sqlInsert->bindParam(6,$_POST['inputStatus']); 

if($sqlInsert->execute()){
   echo 'Cadastrou';
}
else{ 
   echo 'Não cadastrou';
}

?>