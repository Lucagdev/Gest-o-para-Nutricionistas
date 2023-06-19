<?php

function getConnection(){

$dsn = "mysql:host=localhost;dbname=gestaoNutri;charset=utf8";
$user = "root";
$pass = "";

    try{
    $pdo = new PDO($dsn, $user, $pass);
    return $pdo;
    }

    catch (PDOException $ex){
        echo 'Erro ao conectar: '. $ex->getMessage(); //Aqui é para mostrar onde foi o erro. 
    }
}
?>