<?php

session_start();

$id = $_GET["id"];
require_once('class/caixa.php');
$caixa = new CaixaClass($id);



if (isset($_POST['dataCaixa'])) {

    $aberturaCaixaValor = $_POST['aberturaCaixaValor'];
    $horaFechamentoCaixa = $_POST['horaFechamentoCaixa'];
    $fechamentoCaixaValor = $_POST['fechamentoCaixaValor'];

    // Calcula o lucro do dia subtraindo o valor de abertura do valor de fechamento
    $valorTotal  = $fechamentoCaixaValor - $aberturaCaixaValor;


    $caixa->aberturaCaixaValor = $aberturaCaixaValor;
    $caixa->horaFechamentoCaixa = $horaFechamentoCaixa;
    $caixa->fechamentoCaixaValor = $fechamentoCaixaValor;
    $caixa->valorTotal = $valorTotal; // Atribui o resultado do cálculo ao valorTotal
    $_SESSION['valorTotal'] = $valorTotal;

    $caixa->FecharCaixa();
}

?>


<h2 class="display-4">Fechar Caixa</h2>





<form action="index.php?p=caixa&ca=fechar&id=<?php echo $caixa->idCaixa ?>" method="POST" enctype="multipart/form-data" class="formulario-exercicio">



    <div class="nome-exercicio">


    <div class="mb-3">
            <label for="aberturaCaixaValor" class="form-label">Valor Caixa na Abertura:</label>
            <input type="number" class="form-control" name="aberturaCaixaValor" id="aberturaCaixaValor" placeholder="" value="<?php echo $caixa->aberturaCaixaValor ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="horaFechamentoCaixa" class="form-label">Hora de Fechamento:</label>
            <input type="time" class="form-control" name="horaFechamentoCaixa" id="horaFechamentoCaixa" placeholder="" required>
        </div>


        <div class="mb-3">
            <label for="fechamentoCaixaValor" class="form-label">Valor Atual no Caixa:</label>
            <input type="number" class="form-control" name="fechamentoCaixaValor" id="fechamentoCaixaValor" placeholder="" required>
        </div>

        <div class="mb-3">
            <label for="valorTotal" class="form-label">Lucro do Dia:</label>
            <input type="number" class="form-control" name="valorTotal" id="valorTotal" placeholder="" value="<?php echo isset($_SESSION['valorTotal']) ? $_SESSION['valorTotal'] : ''; ?>" disabled>
        </div>



        <div class="col-12">
            <button type="submit" class="btn btn-primary" onclick="confirmar()">Fechar Caixa</button>
        </div>


    </div>





    </div>


    </div>
</form>