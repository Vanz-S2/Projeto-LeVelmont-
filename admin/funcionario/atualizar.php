<?php

$id = $_GET["id"];
require_once('class/funcionario.php');
$funcionario = new FuncionarioClass($id);



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

    $funcionario->Atualizar();
}


?>


<h2 class="display-4">Atualizar Funcionário</h2>





<form action="index.php?p=funcionario&f=cadastrar" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeFuncionario" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario" placeholder="Nome do Funcionário" value="<?php echo $funcionario->nomeFuncionario ?>">
        </div>


        <div class="mb-3">
            <label for="emailFuncionario" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="emailFuncionario" id="emailFuncionario" placeholder="E-mail do Funcionário" value="<?php echo $funcionario->emailFuncionario ?>">
        </div>


        <div class="mb-3">
            <label for="telefoneFuncionario" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneFuncionario" id="telefoneFuncionario" placeholder="Telefone do Funcionário" value="<?php echo $funcionario->telefoneFuncionario ?>">
        </div>


        <div class="mb-3">
            <label for="cpfFuncionario" class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpfFuncionario" id="cpfFuncionario" placeholder="CPF do Funcionário" value="<?php echo $funcionario->cpfFuncionario ?>">
        </div>



        <div class="row">


            <div class="mb-3">
                <label for="dataNascFuncionario">Data de nascimento:</label>
                <input type="date" class="form-control" id="dataNascFuncionario" name="dataNascFuncionario" value="<?php echo $funcionario->dataNascFuncionario ?>">
            </div>



            <div class="mb-3">
                <label for="funcaoFuncionario" class="form-label">Função:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="funcaoFuncionario" required>

                    <option value="<?php echo $funcionario->funcaoFuncionario ?>">
                        <?php echo $funcionario->funcaoFuncionario ?>
                    </option>

                    <option value="Pizzaiolo">Pizzaiolo</option>
                    <option value="Atendente">Atendente</option>
                    <option value="Entregador">Entregador</option>
                    <option value="ADM">ADM</option>
                </select>

            </div>



            <div class="mb-3">
                <label for="turnoFuncionario" class="form-label">Turno:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="turnoFuncionario" required>
                    <option value="<?php echo $funcionario->turnoFuncionario ?>"><?php echo $funcionario->turnoFuncionario ?>
                    </option>

                    <option value="Noite">Noite</option>
                    <option value="Madrugada">Madrugada</option>
                    <option value="Noite/Madrugada">Noite/Madrugada</option>
                </select>

            </div>




            <div class="mb-3">
                <label for="acessoFuncionario" class="form-label">Nível do acesso:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="acessoFuncionario" required>
                    <option value="<?php echo $funcionario->acessoFuncionario ?>">
                        <?php echo $funcionario->acessoFuncionario ?>
                    </option>

                    <option value="Basico">Básico</option>
                    <option value="Medio">Médio</option>
                    <option value="Total">Total</option>
                </select>

            </div>





            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="ATIVO">
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>






                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="DESATIVADO">
                        <label class="form-check-label">
                        DESATIVADO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar Funciónario</button>
            </div>


        </div>


    </div>
</form>
