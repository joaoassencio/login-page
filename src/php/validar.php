<?php

include_once "./src/php/conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['email']) && $dados['senha'])
{
    $retorna = [
        'Erro' => true,
        'msg' => "<div class='alert alert-warning' role='alert'>Preencha os campos Usuário e Senha!</div>"
    ];
}
elseif (empty($dados['email']))
{
    $retorna = [
        'Erro' => true,
        'msg' => "<div class='alert alert-warning' role='alert'>Preencha o campo Usuário!</div>"
    ];
}
elseif (empty($dados['senha']))
{
    $retorna = [
        'Erro' => true,
        'msg' => "<div class='alert alert-warning' role='alert'>Preencha o campo Senha!</div>"
    ];
}
else
{
    $retorna = [
        'Erro' => false,
        'msg' => "<div class='alert alert-success' role='alert'>Validar!</div>"
    ];
}

echo json_encode($retorna);