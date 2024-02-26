<?php

$id = $_GET["id"];
require_once('class/produto.php');
$produto = new ProdutoClass($id);



if (isset($_POST['nomeProduto'])) {

    $nomeProduto = $_POST['nomeProduto'];
    $tipoProduto = $_POST['tipoProduto'];
    $precoProdutoUnitario = $_POST['precoProdutoUnitario'];
    $statusProduto = $_POST['statusProduto'];
    $descricaoProduto = $_POST['descricaoProduto'];
    $categoriaProduto = $_POST['categoriaProduto'];


    if (!empty($_FILES['fotoProduto']['name'])) {
        $arquivo = $_FILES['fotoProduto'];
        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
        if (move_uploaded_file($arquivo['tmp_name'], '../img/produto/' . $arquivo['name'])) {
            $fotoProduto = 'produto/' . $arquivo['name']; 
        } else {
            throw new Exception('Erro; não foi possível realizar o upload da imagem.');
        }
    } else {
        $fotoProduto = $produto->fotoProduto;
    }
   

    $produto->nomeProduto = $nomeProduto;
    $produto->tipoProduto = $tipoProduto;
    $produto->precoProdutoUnitario = $precoProdutoUnitario;
    $produto->statusProduto = $statusProduto;
    $produto->descricaoProduto = $descricaoProduto;
    $produto->fotoProduto = $fotoProduto;
    $produto->categoriaProduto = $categoriaProduto;


    $produto->Atualizar();
}



?>


<h2 class="display-4">Atualizar Produto</h2>





<form action="index.php?p=produto&po=atualizar&id=<?php echo $produto->idProduto ?>" method="POST" enctype="multipart/form-data" class="formulario-exercicio">




    <div class="mb-3 foto-exercicio">
    <label for="fotoProduto" class="form-label foto-produto">Foto:</label>
    <input type="file" class="form-control" id="fotoProduto" name="fotoProduto" style="display:none;">
    <img src="../img/<?php echo $produto->fotoProduto; ?>" alt="Funcionário Photo" id="imgfoto">
</div>

    

    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeProduto" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Nome do Produto" value="<?php echo $produto->nomeProduto ?>">

        </div>



        <div class="row">


            <div class="mb-3">
                <label for="tipoProduto" class="form-label">Tipo:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="tipoProduto">
                    <option value="<?php echo $produto->tipoProduto ?>">
                        <?php echo $produto->tipoProduto ?>
                    </option>

                    <option value="Pizza">Pizza</option>
                    <option value="Esfirra">Esfirra</option>
                    <option value="Calzone">Calzone</option>
                    <option value="Bebida">Bebida</option>
                </select>

            </div>


            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição:</label>
                <input type="text" class="form-control" name="descricaoProduto" id="descricaoProduto" placeholder="Descrição do Produto" value="<?php echo $produto->descricaoProduto ?>">
            </div>




            <div class="mb-3">
                <label for="categoriaProduto" class="form-label">Categoria:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="categoriaProduto">
                    <option value="<?php echo $produto->categoriaProduto ?>">
                        <?php echo $produto->categoriaProduto ?>
                    </option>
                    <option value="Broto">Broto</option>
                    <option value="Grande">Grande</option>
                    <option value="Doce">Doce</option>
                    <option value="Bebida">Bebida</option>
                </select>

            </div>


            <div class="mb-3">
                <label for="precoProdutoUnitario">Preço do Produto:</label>
                <input type="text" class="form-control" name="precoProdutoUnitario" id="precoProdutoUnitario"  onkeypress="isNumber(event);" onkeypress="proibirLetras(event);" placeholder="R$00,00" value="<?php echo $produto->precoProdutoUnitario ?>">

            </div>




            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusProduto" id="statusProduto" value="ATIVO">
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusProduto" id="statusProduto" value="DESATIVADO">
                        <label class="form-check-label">
                            DESATIVADO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="confirmar()">Atualizar Produto</button>
            </div>


        </div>


    </div>



</form>