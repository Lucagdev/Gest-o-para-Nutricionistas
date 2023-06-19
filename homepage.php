<?php 

//Incluir a conexão
include './conexaomysql.php';
$conexao = getConnection();





?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pacientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body onload="init()">
    <h1>Cadastro de Pacientes</h1>

    <div class="container">
        <div class="row">
            <div id="msg" class="col-sm-10 offset-sm-1 ">
                <!--<div class="alert alert-warning">Contato não encontrado.</div>-->
            </div>
        </div>

        <form id="form-contato" method="POST" action="./cadpaciente.php">
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="inputId">Id</label>
                    <input type="text" class="form-control" id="inputId" placeholder="ID" disabled name="inputId">
                </div>
                <div class="col-sm-8">
                    <label for="inputNome">Nome (*)</label>
                    <input type="text" class="form-control" id="inputNome" required placeholder="Informe o nome do paciente" name="inputNome">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-5">
                    <label for="inputTelefone">Telefone (*)</label>
                    <input type="text" class="form-control" id="inputTelefone" required placeholder="Telefone" name="inputTelefone">
                </div>
                <div class="col-sm-7">
                    <label for="inputEmail">E-mail (*)</label>
                    <input type="email" class="form-control" id="inputEmail" required placeholder="Informe o e-mail" name="inputEmail">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="inputCidade">Cidade</label>
                    <input type="text" class="form-control" id="inputCidade" placeholder="Informe a cidade do paciente" name="inputCidade">
                </div>
                <div class="col-sm-6">
                    <label for="inputCategoria">Categoria</label>
                    <input value="1" type="text" class="form-control" id="inputCategoria" required placeholder="Ex: Retorno 30D, Plano, etc." name="inputCategoria">
                </div>
            </div>
            <div class="form-group row">    
                <div class="col-sm-12">
                    <label for="inputStatus">Status (*)</label>
                    <select class="form-control" id="inputStatus" name="inputStatus"> 
                    <option value="1">Ativo</option>    
                    <option value="0">Inativo</option>    
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <small>(*) Campos obrigatórios</small>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-success" id="btnInsert" value="Inserir">
                    <input type="button" class="btn btn-warning" id="btnUpdate" value="Alterar">
                    <input type="button" class="btn btn-danger" id="btnDelete" value="Excluir">
                    <input type="button" class="btn btn-secondary" id="btnClear" value="Limpar Form">
                    <a href="pacientes.html"><input type="button" class="btn btn-warning" id="btnClear" value="Pesquisar Contatos"></a>
                </div>
            </div>
        </form>

</body>

</html>