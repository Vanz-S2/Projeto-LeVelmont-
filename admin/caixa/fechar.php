<?php

// Verifica se o parâmetro 'id' está definido
$id = isset($_GET["id"]) ? $_GET["id"] : null;

// Inclui a classe CaixaClass
require_once('class/caixa.php');

// Cria uma instância da classe CaixaClass
$caixa = new CaixaClass($id);

// Verifica se os dados do formulário foram submetidos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Obtém os valores dos inputs
    $aberturaCaixaValor = $_POST['aberturaCaixaValor'];
    $horaFechamentoCaixa = $_POST['horaFechamentoCaixa'];
    $fechamentoCaixaValor = $_POST['fechamentoCaixaValor'];
    
    // Calcula o lucro do dia
    $valorTotal = $fechamentoCaixaValor - $aberturaCaixaValor;

    // Define os valores na instância de caixa
    $caixa->aberturaCaixaValor = $aberturaCaixaValor;
    $caixa->horaFechamentoCaixa = $horaFechamentoCaixa;
    $caixa->fechamentoCaixaValor = $fechamentoCaixaValor;
    $caixa->valorTotal = $valorTotal; 

    // Chama o método para fechar o caixa
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
            <input type="number" class="form-control" name="valorTotal" id="valorTotal" placeholder="" value="<?php echo $caixa->valorTotal ?>" disabled>
            <button type="button" onclick="calcularLucroDia()">Calcular Lucro do Dia</button>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" onclick="confirmar()">Fechar Caixa</button>
        </div>

    </div>

</form>

<script>
    function calcularLucroDia() {
        var aberturaCaixaValor = parseFloat(document.getElementById('aberturaCaixaValor').value);
        var fechamentoCaixaValor = parseFloat(document.getElementById('fechamentoCaixaValor').value);
        var lucroDia = fechamentoCaixaValor - aberturaCaixaValor;
        document.getElementById('valorTotal').value = lucroDia.toFixed(2);
    }
</script>