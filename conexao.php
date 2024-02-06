<?php
$servername = 'localhost';
$user = 'root';
$password = '';
$dbname = 'bd_comments'; 

// Criando a conexão
$con = mysqli_connect($servername, $user, $password, $dbname);

// Verifica a Conexão com o banco
if (!$con) {
    die('Conexão falhou: ' . mysqli_connect_error());
}
return $con;
