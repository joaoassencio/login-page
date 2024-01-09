<?php 

try
{
    $conn = new PDO('mysql:host=localhost;dbname=celke','root','');
    echo 'Conexão ao banco de dados realizada com sucesso!';
}
catch (PDOException $err)
{
    echo 'Erro de conexão ao banco de dados' . $err->getMessage();
}