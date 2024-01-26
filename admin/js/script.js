

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
