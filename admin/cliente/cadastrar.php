<?php

if (isset($_POST['nomeCliente'])) {

    $nomeCliente = $_POST['nomeCliente'];
    $dataNascCliente = $_POST['dataNascCliente'];
    $enderecoCliente = $_POST['enderecoCliente'];
    $telefoneCliente = $_POST['telefoneCliente'];
    $pontosCliente = $_POST['pontosCliente'];
    $statusCliente = $_POST['statusCliente'];


    require_once('class/cliente.php');

    $cliente = new ClienteClass();

    $cliente->nomeCliente = $nomeCliente;
    $cliente->dataNascCliente = $dataNascCliente;
    $cliente->enderecoCliente = $enderecoCliente;
    $cliente->telefoneCliente = $telefoneCliente;
    $cliente->pontosCliente = $pontosCliente;
    $cliente->statusCliente = $statusCliente;

    $cliente->Cadastrar();
}



?>








<h2 class="display-4">Cadastrar Cliente</h2>





<form action="index.php?p=cliente&c=cadastrar" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeCliente" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" placeholder="Nome do Cliente" required>

        </div>


        <div class="mb-3">
            <label for="enderecoCliente" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="enderecoCliente" id="enderecoCliente" placeholder="Endereço do Cliente" required>
        </div>


        <div class="mb-3">
            <label for="telefoneCliente" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneCliente" id="telefoneCliente" placeholder="Telefone do Cliente" required>
        </div>






        <div class="row">


            <div class="mb-3">
                <label for="dataNascCliente">Data de nascimento:</label><br>
                <input type="date" class="form-control" id="dataNascCliente" name="dataNascCliente" required>
            </div>


            <div class="mb-3">
                <label for="pontosCliente">Pontos:</label>
                <input type="text" class="form-control" name="pontosCliente" id="pontosCliente" onkeypress="isNumber(event);" onkeypress="proibirLetras(event);" placeholder="00" required>
            </div>



            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusCliente" id="statusCliente" value="ATIVO" required>
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusCliente" id="statusCliente" value="DESATIVADO">
                        <label class="form-check-label">
                            DESATIVADO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="confirmar()">Cadastrar Cliente</button>
            </div>


        </div>


    </div>
</form>