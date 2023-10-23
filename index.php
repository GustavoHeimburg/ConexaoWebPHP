<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword ='';
$dbname = 'clientes';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbname );

if ($conexao ->connect_errno)
{
    echo "ErroConnection";
}else{
    echo "Deu certo a conexao";
}
?>
