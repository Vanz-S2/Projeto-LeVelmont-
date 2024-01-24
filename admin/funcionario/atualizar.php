<?php

if (isset($_POST['nomeFuncionario'])) {

    $nomeFuncionario = $_POST['nomeExercicio'];
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


?>


<h2 class="display-4">Cadastrar Funcionário</h2>





<form action="index.php?p=funcionario&f=cadastrar" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeFuncionario" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario" placeholder="Nome do Funcionário" value="<?php echo $exercicio->nomeExercicio ?>">
        </div>


        <div class="mb-3">
            <label for="emailFuncionario" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="emailFuncionario" id="emailFuncionario" placeholder="E-mail do Funcionário">
        </div>


        <div class="mb-3">
            <label for="telefoneFuncionario" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneFuncionario" id="telefoneFuncionario" placeholder="Telefone do Funcionário">
        </div>


        <div class="mb-3">
            <label for="cpfFuncionario" class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpfFuncionario" id="cpfFuncionario" placeholder="CPF do Funcionário">
        </div>

        

        <div class="row">


            <div class="mb-3">
                <label for="dataNascFuncionario">Data de nascimento:</label><br>
                <input type="date" class="form-control" id="dataNascFuncionario" name="dataNascFuncionario"><br>
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
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="ATIVO" checked>
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
                <button type="submit" class="btn btn-primary">Cadastrar Funciónario</button>
            </div>


        </div>


    </div>
</form>

















<?php

$id = $_GET["id"];
require_once('class/funcionario.php');
$funcionario = new FuncionarioClass($id);

echo $funcionario->nomeFuncionario;

if (isset($_POST['nomeFuncionario'])) {

    $nomeFuncionario = $_POST['nomeExercicio'];
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

//print($_POST['nomeFuncionario']);
//var_dump ($_POST['dataNascFuncionario']);

?>


<h2 class="display-4">Atualizar Funcionário</h2>





<form action="index.php?p=exercicios&e=atualizar" method="POST" enctype="multipart/form-data"
    class="formulario-exercicio">

    <div class="mb-3 foto-exercicio">
        <label for="fotoExercicio" class="form-label">Foto:</label>
        <input type="file" class="form-control" id="fotoExercicio" name="fotoExercicio" style="display:none;">
        <img src="../img/imagemPNG/semImagem.png" alt="Imagem Sem Foto" id="imgFoto">
    </div>

    value="<?php echo $exercicio->nomeExercicio ?>">
    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeExercicio" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeExercicio" id="nomeExercicio"
                placeholder="Nome do exercício" value="<?php echo $exercicio->nomeExercicio ?>">
        </div>


        <div class="mb-3">
            <label for="descricaoExercicio" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="descricaoExercicio" id="descricaoExercicio"
                placeholder="Descrição do exercício" value="<?php echo $exercicio->descricaoExercicio ?>">
        </div>


        <div class="row">

            <div class="mb-3">
                <label for="grupoMuscularExercicio" class="form-label">Status:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="grupoMuscularExercicio"
                    required>
                    <option value="<?php echo $exercicio->grupoMuscularExercicio ?>">
                        <?php echo $exercicio->grupoMuscularExercicio ?>
                    </option>
                    <option value="Peito">Peito</option>
                    <option value="Pernas">Pernas</option>
                    <option value="Bracos">Braços</option>
                    <option value="Abdômen">Abdômen</option>
                    <option value="Cardio">Cardio</option>
                </select>

            </div>




            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>

                 
                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                        if ($exercicio->statusExercicio == 'ATIVO') {
                            echo 'checked';
                        }
                        ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Ativo
                        </label>
                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                        if ($exercicio->statusExercicio == 'DESATIVADO') {
                            echo 'checked';
                        }
                        ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Desativado
                        </label>
                    </div>

                    

                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                        if ($exercicio->statusExercicio == 'INATIVO') {
                            echo 'checked';
                        }
                        ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Inativo
                        </label>
                    </div>

                </div>


                <div class="mb-3">
                    <label for="linkExercicio" class="form-label">Link:</label>
                    <input type="text" class="form-control" id="linkExercicio" name="linkExercicio"
                        placeholder="Link do exercício">
                </div>

            </fieldset>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Atualizar Exercício</button>
            </div>

        </div>

    </div>

</form>