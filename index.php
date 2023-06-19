<?php 



//Incluir a conexão
include './conexaomysql.php';
$conexao = getConnection();


$sql = 'SELECT * FROM pacientes';
$result = $conexao->query($sql);
foreach($result as $dadosMySql){
    echo "<p>".$dadosMySql['id']."</p>";
    echo "<p>".$dadosMySql['nome']."</p>";
    echo "<p>".$dadosMySql['telefone']."</p>";
    echo "<p>".$dadosMySql['email']."</p>";
    echo "<p>".$dadosMySql['cidade']."</p>";
    echo "<p>".$dadosMySql['UF']."</p>";
    echo "<p>".$dadosMySql['status_paciente']."</p>";
    echo "<p>".$dadosMySql['categoria_id']."</p>";
}

?>
