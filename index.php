<?php
include_once "./src/php/conexao.php";
echo password_hash("50queijos", PASSWORD_DEFAULT);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Página de login</title>
</head>

<body>

    <div class="container text-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            Acessar
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel">Área restrita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="login-usuario-form">
                        <span id="msgAlertErrorLogin"></span>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Usuário</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="col-form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-primary bt-sm" id="login-usuario-btn" value="Acessar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./src/js/custom.js"></script>
</body>

</html>