<!DOCTYPE html>
<html lang="en, pt-br" class="loginHtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
    <link rel="stylesheet" href="../css/reset.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

    <section class="contente">



        <div class="formularLogin">
            <div class="formulImg">

                <h1><span>Le</span>Velmont</h1>

            </div>

            <div class="formulImg2">
                <h2>
                    Meu <span>Login </span>
                    e tenha sua pizzaria na palma da <span>Mão</span>
                </h2>
            </div>



            <form id="loginForm">
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Informe seu E-mail" require>
                </div>

                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="senha" class="form-control2" id="senha" name="senha" placeholder="Informe sua Senha" require>
                </div>

                <!--BTN COM O TIPO BUTTON ONDE PERMITE A CONF DE BOTAO CRIAÇÃO DO ONCLICK QUE IRA SUBIR 
                    UMA MENSAGEM AO CLICKAR -->

                <button class="entrarLogin" type="button" onclick="carregarLogin()"> Área de Login </button>
            </form>

            <di id="msgLogin"> </di>

        </div>
    </section>
    <!--Começo da biblioteca /-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="../js/login.js"></script>
</body>

</html>