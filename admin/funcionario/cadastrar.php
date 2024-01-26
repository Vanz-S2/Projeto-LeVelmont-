<?php

if (isset($_POST['nomeFuncionario'])) {

    $nomeFuncionario = $_POST['nomeFuncionario'];
    $dataNascFuncionario = $_POST['dataNascFuncionario'];
    $cpfFuncionario = $_POST['cpfFuncionario'];
    $telefoneFuncionario = $_POST['telefoneFuncionario'];
    $emailFuncionario = $_POST['emailFuncionario'];
    $turnoFuncionario = $_POST['turnoFuncionario'];
    $funcaoFuncionario = $_POST['funcaoFuncionario'];
    $acessoFuncionario = $_POST['acessoFuncionario'];
    $statusFuncionario = $_POST['statusFuncionario'];


    require_once('class/funcionario.php');

    $funcionario = new FuncionarioClass();

    $funcionario->nomeFuncionario = $nomeFuncionario;
    $funcionario->dataNascFuncionario = $dataNascFuncionario;
    $funcionario->cpfFuncionario = $cpfFuncionario;
    $funcionario->telefoneFuncionario = $telefoneFuncionario;
    $funcionario->emailFuncionario = $emailFuncionario;
    $funcionario->turnoFuncionario = $turnoFuncionario;
    $funcionario->funcaoFuncionario = $funcaoFuncionario;
    $funcionario->acessoFuncionario = $acessoFuncionario;
    $funcionario->statusFuncionario = $statusFuncionario;

    $funcionario->Cadastrar();
}






// Verifique se o nome foi definido
if (empty($_POST["nomeFuncionario"])) {
    $nomeFuncionario = "O nome é obrigatório";
} else {
    $nomeFuncionario = test_input($_POST["nomeFuncionario"]);
    // Verifique se o nome contém apenas letras e espaços
    if (!preg_match("/^[a-zA-Z ]*$/", $nomeFuncionario)) {
        $nomeFuncionario = "Apenas letras e espaços são permitidos";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>








<h2 class="display-4">Cadastrar Funcionário</h2>





<form action="index.php?p=funcionario&f=cadastrar" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeFuncionario" class="form-label" >Nome:</label>
            <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario" placeholder="Nome do Funcionário" required>

        </div>


        <div class="mb-3">
            <label for="emailFuncionario" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="emailFuncionario" id="emailFuncionario" placeholder="E-mail do Funcionário" required>
        </div>


        <div class="mb-3">
            <label for="telefoneFuncionario" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneFuncionario" id="telefoneFuncionario" placeholder="Telefone do Funcionário" required>
        </div>


        <div class="mb-3">
            <label for="cpfFuncionario" class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpfFuncionario" id="cpfFuncionario" placeholder="CPF do Funcionário" required>
        </div>



        <div class="row">


            <div class="mb-3">
                <label for="dataNascFuncionario">Data de nascimento:</label><br>
                <input type="date" class="form-control" id="dataNascFuncionario" name="dataNascFuncionário" required>
            </div>



            <div class="mb-3">
                <label for="funcaoFuncionario" class="form-label">Função:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="funcaoFuncionario" required>
                    <option selected="">Selecione a função do funcionário</option>
                    <option value="Pizzaiolo">Pizzaiolo</option>
                    <option value="Atendente">Atendente</option>
                    <option value="Entregador">Entregador</option>
                    <option value="ADM">ADM</option>
                </select>

            </div>



            <div class="mb-3">
                <label for="turnoFuncionario" class="form-label">Turno:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="turnoFuncionario" required>
                    <option selected="">Selecione o turno do funcionario</option>
                    <option value="Noite">Noite</option>
                    <option value="Madrugada">Madrugada</option>
                    <option value="Noite/Madrugada">Noite/Madrugada</option>
                </select>

            </div>




            <div class="mb-3">
                <label for="acessoFuncionario" class="form-label">Nível do acesso:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="acessoFuncionario" required>
                    <option selected="">Selecione o nível de acesso do funcionário</option>
                    <option value="Basico">Básico</option>
                    <option value="Medio">Médio</option>
                    <option value="Total">Total</option>
                </select>

            </div>





            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="ATIVO" required>
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="DESATIVO">
                        <label class="form-check-label">
                            DESATIVO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="confirmar()">Cadastrar Funciónario</button>
            </div>


        </div>


    </div>
</form>