

document.getElementById('imgFoto').addEventListener('click', function () {
  document.getElementById('fotoProduto').click();
});

document.getElementById('fotoProduto').addEventListener('change', function (e) {

  let imgFoto = document.getElementById('imgFoto');
  let arquivo = e.target.files[0];

  if (arquivo) {
    let carregar = new FileReader();

    carregar.onload = function (e) {
      imgFoto.src = e.target.result;
      console.log(imgFoto.src);
    }

    carregar.readAsDataURL(arquivo);
  }

});



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
    } else {
        // Código a ser executado se o usuário clicar em Cancelar
        console.log('Usuário cancelou');
    }
}



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


function filtrarTabela() {
  var tipoSelecionado = document.getElementById('tipoProduto').value.toLowerCase();
  var categoriaSelecionada = document.getElementById('categoriaProduto').value.toLowerCase();
  var filtro = document.getElementById('pesquisa').value.toLowerCase();
  var linhas = document.getElementById('tabela').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
   
  for (var i = 0; i < linhas.length; i++) {
     var linha = linhas[i];
     var celulas = linha.getElementsByTagName('td');
     if (celulas.length >= 5) {
         var texto = celulas[2].textContent || celulas[2].innerText;
         var tipo = celulas[3].textContent || celulas[3].innerText;
         var categoria = celulas[4].textContent || celulas[4].innerText;
         if ((texto.toLowerCase().indexOf(filtro) > -1) && (tipo.toLowerCase().indexOf(tipoSelecionado) > -1) && (categoria.toLowerCase().indexOf(categoriaSelecionada) > -1)) {
             linha.style.display = "";
         } else {
             linha.style.display = "none";
         }
     }
  }
 }
 
 
 
 
 


 
 
 
 
 
