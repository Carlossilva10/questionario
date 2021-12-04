<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'Macaca10';
$dbName = 'bomhumor';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){
    echo "Erro";
}else{
    echo "Conexao efetuada com sucesso";
}

?>

