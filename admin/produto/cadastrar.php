<?php

if (isset($_POST['nomeProduto'])) {

    $nomeProduto = $_POST['nomeProduto'];
    $tipoProduto = $_POST['tipoProduto'];
    $precoProduto = $_POST['precoProduto'];
    $statusProduto = $_POST['statusProduto'];
    $descricaoProduto = $_POST['descricaoProduto'];
    $categoriaProduto = $_POST['categoriaProduto'];


    $arquivo = $_FILES['fotoProduto'];

    if ($arquivo['error']) {
        throw new Exception("o error foi: ", $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/produto/' . $arquivo['name'])) {
        $fotoProduto = 'produto/' . $arquivo['name']; // exercicio/corrida.png

    } else {
        throw new Exception("o error foi: ", $arquivo['error']);
    }


    require_once('class/produto.php');

    $produto = new ProdutoClass();

    $produto->nomeProduto = $nomeProduto;
    $produto->tipoProduto = $tipoProduto;
    $produto->precoProduto = $precoProduto;
    $produto->statusProduto = $statusProduto;
    $produto->descricaoProduto = $descricaoProduto;
    $produto->fotoProduto = $fotoProduto;
    $produto->categoriaProduto = $categoriaProduto;


    $produto->Cadastrar();
}


?>








<h2 class="display-4">Cadastrar Produto</h2>





<form action="index.php?p=produto&po=cadastrar" method="POST" enctype="multipart/form-data" class="formulario-exercicio">

    <div class="mb-3 foto-exercicio">
        <label for="fotoProduto" class="form-label foto-produto">Foto:</label>
        <input type="file" class="form-control" id="fotoProduto" name="fotoProduto" style="display:none;">
        <img src="../img/imagem/semImagem.png" alt="Imagem Sem Foto" id="imgFoto">
    </div>


    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeProduto" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Nome do Produto" required>

        </div>




        <div class="row">


            <div class="mb-3">
                <label for="tipoProduto" class="form-label">Tipo:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="tipoProduto" required>
                    <option selected="">Selecione o tipo do Produto</option>
                    <option value="Pizza">Pizza</option>
                    <option value="Esfirra">Esfirra</option>
                    <option value="Calzone">Calzone</option>
                    <option value="Bebida">Bebida</option>
                </select>

            </div>


            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição:</label>
                <input type="text" class="form-control" name="descricaoProduto" id="descricaoProduto" placeholder="Descrição do Produto" required>
            </div>

            <!-- <div class="mb-3">
                <label for="categoriaProduto" class="form-label">Categoria:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="categoriaProduto" required>
                    <option selected="">Selecione a categoria do produto</option>
                    <option value="Noite">Pequena</option>
                    <option value="Madrugada"></option>
                    <option value="Noite/Madrugada">Noite/Madrugada</option>
                </select>

            </div> -->










            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusProduto" id="statusProduto" value="ATIVO" required>
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusProduto" id="statusProduto" value="DESATIVO">
                        <label class="form-check-label">
                            DESATIVO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="confirmar()">Cadastrar Produto</button>
            </div>


        </div>


    </div>
</form>