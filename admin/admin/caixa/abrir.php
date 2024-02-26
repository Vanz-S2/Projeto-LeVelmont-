<?php

if (isset($_POST['dataCaixa'])) {

    $dataCaixa = $_POST['dataCaixa'];
    $horaCaixa = $_POST['horaCaixa'];
    $aberturaCaixaValor = $_POST['aberturaCaixaValor'];
    


    require_once('class/caixa.php');

    $caixa = new CaixaClass();

    
    $caixa->dataCaixa = $dataCaixa;
    $caixa->horaCaixa = $horaCaixa;
    $caixa->aberturaCaixaValor = $aberturaCaixaValor;
    

    $caixa->AbrirCaixa();
}



?>


<h2 class="display-4">Abertura de Caixa</h2>





<form action="index.php?p=caixa&ca=abrir" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="dataCaixa" class="form-label">Data da Abertura:</label>
            <input type="date" class="form-control" name="dataCaixa" id="dataCaixa" placeholder="" required>
        </div>


        <div class="mb-3">
            <label for="horaCaixa" class="form-label">Hora da Abertura:</label>
            <input type="time" class="form-control" name="horaCaixa" id="horaCaixa" placeholder="" required>
        </div>


        <div class="mb-3">
            <label for="aberturaCaixaValor" class="form-label">Valor Atual no Caixa:</label>
            <input type="number" class="form-control" name="aberturaCaixaValor" id="aberturaCaixaValor" placeholder="" required>
        </div>




            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="confirmar()">Abrir Caixa</button>
            </div>


        </div>


    </div>
</form>