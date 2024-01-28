<?php
 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
 
    require_once("class/funcionario.php");
    $cliente = new ClienteClass($id);
    $cliente->desativar();
 
    // Redireciona de volta para a lista após a desativação
    echo "<script>document.location='index.php?p=cliente'</script>";
    exit;
}
 
?>