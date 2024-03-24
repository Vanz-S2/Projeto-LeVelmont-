<?php

$id = $_GET["id"];
require_once('class/estoque.php');
$estoque = new EstoqueClass($id);



if (isset($_POST['nomedoProduto'])) {

    $nomedoProduto = $_POST['nomedoProduto'];
    $quantidade = $_POST['quantidade'];
    $preçoUnitário = $_POST['preçoUnitário'];
    $datadeValidade = $_POST['datadeValidade'];
    $fornecedor = $_POST['fornecedor'];
    $Categoria = $_POST['Categoria'];
    $statusEstoque = $_POST['statusEstoque'];


    

    $estoque->nomedoProduto = $nomedoProduto;
    $estoque->quantidade = $quantidade;
    $estoque->preçoUnitário = $preçoUnitário;
    $estoque->datadeValidade = $datadeValidade;
    $estoque->fornecedor = $fornecedor;
    $estoque->Categoria = $Categoria;
    $estoque->statusEstoque = $statusEstoque;

    

    $estoque->Atualizar();
}




?>


<h2 class="display-4">Atualizar Estoque</h2>





<form action="index.php?p=estoque&e=atualizar&id=<?php echo $estoque->idEstoque ?>" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



<div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomedoProduto" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomedoProduto" id="nomedoProduto" placeholder="Nome do Produto" value="<?php echo $estoque->nomedoProduto ?>">

        </div>


        <div class="mb-3">
            <label for="quantidade">Quantidade:</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade" onkeypress="isNumber(event);" onkeypress="proibirLetras(event);" placeholder="00" value="<?php echo $estoque->quantidade ?>">
        </div>


        <div class="mb-3">
            <label for="preçoUnitário">Preço do Produto:</label>
            <input type="text" class="form-control" name="preçoUnitário" id="preçoUnitário" onkeypress="isNumber(event);" onkeypress="proibirLetras(event);" placeholder="R$00,00" value="<?php echo $estoque->preçoUnitário ?>">
        </div>



        <div class="mb-3">
                <label for="datadeValidade">Data da Válidade:</label><br>
                <input type="date" class="form-control" id="datadeValidade" name="datadeValidade" value="<?php echo $estoque->datadeValidade ?>">
            </div>


        <div class="row">


           


            <div class="mb-3">
                <label for="fornecedor" class="form-label">Fornecedor:</label>
                <input type="text" class="form-control" name="fornecedor" id="fornecedor" placeholder="Nome da Fornecedora" value="<?php echo $estoque->fornecedor ?>">
            </div>




            <div class="mb-3">
                <label for="Categoria" class="form-label">Categoria:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="Categoria" value="<?php echo $estoque->Categoria ?>">
                <option value="<?php echo $estoque->Categoria ?>">
                        <?php echo $estoque->Categoria ?>
                    </option>
                    <option value="Ingredientes para Massa">Ingredientes para Massa</option>
                    <option value="Sabores de Pizza">Sabores de Pizza</option>
                    <option value="Ingredientes Gerais">Ingredientes Gerais</option>
                    <option value="Materiais de Embalagem">Materiais de Embalagem</option>
                    <option value="Materiais de Serviço">Materiais de Serviço</option>
                    <option value="Materiais de Higiene">Materiais de Higiene</option>
                </select>
                

            </div>









            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusEstoque" id="statusEstoque" value="ATIVO" required>
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusEstoque" id="statusEstoque" value="DESATIVADO">
                        <label class="form-check-label">
                            DESATIVADO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="confirmar()">Atualizar estoque</button>
            </div>


        </div>


    </div>
</form>