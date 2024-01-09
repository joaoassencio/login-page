const loginForm = document.getElementById("login-usuario-form");
const msgAlertErrorLogin = document.getElementById("msgAlertErrorLogin");

loginForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    /*if (document.getElementById("email").value === "" && document.getElementById("senha").value === "")
    {
        msgAlertErrorLogin.innerHTML = "<div class='alert alert-warning' role='alert'>Preencha os campos Usuário e Senha!</div>";
    }
    else if (document.getElementById("email").value === "")
    {
        msgAlertErrorLogin.innerHTML = "<div class='alert alert-warning' role='alert'>Preencha o campo Usuário!</div>";
    }
    else if (document.getElementById("senha").value === "")
    {
        msgAlertErrorLogin.innerHTML = "<div class='alert alert-warning' role='alert'>Preencha o campo Senha!</div>";
    }
    else
    {*/
        const dadosForm = new FormData(loginForm);

        const dados = await fetch("./src/php/validar.php", {
            method: "POST",
            body: dadosForm
        });

        const resposta = await dados.json();

        console.log(resposta);
    //}
});