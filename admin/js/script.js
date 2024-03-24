
/* onclique do Botão Desativar */
 
function confirmarDesativacao() {
  // Exibir uma caixa de diálogo de confirmação
  var confirmacao = confirm("Tem certeza de que deseja desativar este item?");

  // Retorna true se o usuário clicou em "OK", caso contrário, retorna false
  return confirmacao;
}


function confirmar() {
    let resultado = confirm("Todas as informações foram inseridas?");
    if (resultado == true) {
        // Código a ser executado se o usuário clicar em OK
        console.log('Usuário confirmou');
        console.log ("<script>document.location='index.php?p=caixa'</script>")
    } else {
        // Código a ser executado se o usuário clicar em Cancelar
        console.log('Usuário cancelou');
    }
}




/*     Tabela Funcionario    */









/*    Tabelea Produto    */












/*---*/

function adicionarReal() {
  var precoProduto = document.getElementById('precoProduto').value;
  if (!precoProduto.startsWith("R$")) {
     precoProduto = "R$" + precoProduto;
     document.getElementById('precoProduto').value = precoProduto;
  }
 }
 

function proibirLetras(event) {
  var charCode = (event.which) ? event.which : event.keyCode;
  // Permitir: backspace, delete, tab, escape, enter e .
  if ([46, 8, 9, 27, 13, 110, 190].indexOf(charCode) !== -1 ||
      // Permitir: Ctrl+A
      (charCode === 65 && event.ctrlKey === true) || 
      // Permitir: home, end, left, right
      (charCode >= 35 && charCode <= 39)) {
          // Permitir: 0-9
          return (charCode >= 48 && charCode <= 57);
  }
  else {
      // Impedir qualquer outro caractere
      event.preventDefault();
  }
}
 

function isNumber(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode(key);
  if (key.length == 0) return;
  var regex = /^[0-9.,\b]+$/;
  if (!regex.test(key)) {
      theEvent.returnValue = false;
      if (theEvent.preventDefault) theEvent.preventDefault();
  }
}


/*     Tabela Produto   */



 





/*     Tabela Banner   */

function filtrarTabela() {
    var statusSelecionado = document.getElementById('statusBanner').value.toLowerCase();
    var filtro = document.getElementById('pesquisa').value.toLowerCase();
    var linhas = document.getElementById('tabela').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
   
    for (var i =  0; i < linhas.length; i++) {
        var linha = linhas[i];
        var celulas = linha.getElementsByTagName('td');
        if (celulas.length >=  5) { // Certifique-se de que há pelo menos  5 células
            var texto = celulas[2].textContent || celulas[2].innerText; // Nome do banner
            var status = celulas[5].textContent || celulas[5].innerText; // Status do banner
            if ((texto.toLowerCase().indexOf(filtro) > -1) && (status.toLowerCase().indexOf(statusSelecionado) > -1)) {
                linha.style.display = "";
            } else {
                linha.style.display = "none";
            }
        }
    }
}



/*    Tabela Caixa   */

function calcularLucroDia() {
    // Obtém os valores dos campos de input
    var aberturaCaixaValor = document.getElementById('aberturaCaixaValor').value;
    var fechamentoCaixaValor = document.getElementById('fechamentoCaixaValor').value;

    // Realiza a subtração
    var lucroDia = fechamentoCaixaValor - aberturaCaixaValor;

    // Define o resultado no campo de input "Lucro do Dia"
    document.getElementById('valorTotal').value = lucroDia;
}

 


