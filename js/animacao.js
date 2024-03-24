$('.galeria').slick({
  centerMode: true,
  centerPadding: '5%',
  slidesToShow: 7,
  autoplay: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 5
      }
    },
    {
      breakpoint: 600,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
})


/*-----Banner-----*/ 
$(document).ready(function () {
  $('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,

  });
});



/*-----WOW js-----*/
new WOW().init();


/*----Menu Mobile----*/

document.querySelector(".abrir-menu").onclick = function (){
  console.log("Menu")
  document.documentElement.classList.add("menu-mobile")

}


document.querySelector(".fechar-menu").onclick = function (){
  console.log("Menu")
  document.documentElement.classList.remove("menu-mobile")

}



/*cardapio antigo-*/

document.getElementById("myButton1").addEventListener("click", function() {
  var table = document.getElementById("myTable1");
  if (table.style.display === "none") {
    table.style.display = "table";
  } else {
    table.style.display = "none";
  }
});

document.getElementById("myButton2").addEventListener("click", function() {
  var table = document.getElementById("myTable2");
  if (table.style.display === "none") {
    table.style.display = "table";
  } else {
    table.style.display = "none";
  }
});

document.getElementById("myButton3").addEventListener("click", function() {
  var table = document.getElementById("myTable3");
  if (table.style.display === "none") {
    table.style.display = "table";
  } else {
    table.style.display = "none";
  }
});





// Enviar dados do form por Whatsaap

function EnviarWhats (){
  
  let assunto = '*Site - Viva Bem Academia*';
  let nome    = '*Nome:* '  + document.querySelector('#nome').value;
  let email   = '*E-mail:* ' + document.querySelector('#email').value;
  let fone    = '*Telefone:* ' + document.querySelector('#fone').value;
  let mens    = '*Mensagem:* ' + document.querySelector('#mens').value;

  let numeroWhats = '5511977877878';

  let quebraDeLinha = '%0A'

  window.open('https://api.whatsapp.com/send?phone=' +
    numeroWhats + '&text=' +
    assunto + quebraDeLinha + quebraDeLinha + 
    nome + quebraDeLinha + 
    email + quebraDeLinha + 
    fone + quebraDeLinha + 
    mens, '_blank');//abrir uma nova aba
}























// Cardapio

function showMenu(menuId) {
  const menuDetails = document.getElementById("menu-details");
  const menuName = document.getElementById("menu-name");
  const menuItems = document.getElementById("menu-items");



  const menus = [
    {
      name: "Grandes",
      items: [
        {
          name: "Calabresa",
          description: "Molho de tomate, muçarela, calabresa, cebola, pimentão.",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Margherita",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "A moda do Le Velmont",
          description: "Mussarela,escarola,catupiry,bacon e calabresa",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Atum",
          description: "Atum e cebola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Atum 2",
          description: "Atum,cebola e tomate",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "A Moda do Chefe",
          description: "Atum,champignon,mussarela,salpicada com bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Bacon",
          description: "Bacon,cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Frango",
          description: "Frango e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Frango 2",
          description: "Frango e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Frango Especial",
          description: "Frango,catupiry e Batata palha",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Baiacatu",
          description: "Calabresa moida com catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Brasileira",
          description: "Palmito, milho verde, mussarela e bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Portuguesa",
          description: "Presunto, ovos cozidos, ervilha, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Portuguesa 2",
          description: "Pesunto, ovos cozidos, milho verde, cebola e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "2 Queijos",
          description: "mussarela e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Milho verde",
          description: "milho verde e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Milho verde 2",
          description: "milho verde e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Francesa",
          description: "pesunto, ovos cozidos, catupiry e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Lombo Canadense",
          description: "lombo canadense, cebola e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Peito de peru",
          description: "peito de peru e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Palmito",
          description: "palmito, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Atum especial",
          description: "atum, cebola, milho verde e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Chilena",
          description: "Calabresa fatiada, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Escarola",
          description: "escarola refogada, bacon, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },



        {
          name: "Brocolis",
          description: "Brocolis, catupiry, mussarela e bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Abobrinha",
          description: "mussarela, abobrinha e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Beringela",
          description: "beringela, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Mussarela c/alho",
          description: "mussarela e alho",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Mussarela",
          description: "mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Carne seca",
          description: "carne seca refogada coberta com mussarela de bufala",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Calabacon",
          description: "calabresa, bacon e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "La Grasa",
          description: "frango, bacon, catupiry e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Catupiry",
          description: "catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Baiana",
          description: "calabesa moida, ovos cozidos, pimenta e cebola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        
        {
          name: "Baiana 2",
          description: "calabesa moida, ovos cozidos, tomate, pimenta e cebola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Toscana",
          description: "calabesa moida, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Peperone",
          description: "peperone, mussarela e parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Castelone",
          description: "mussarela, calabresa frita, cebolinha e salsinha",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "4 Queijo",
          description: "catupiry, mussarela, provolone e gorgonzola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "5 Queijo",
          description: "catupiry, mussarela, provolone, parmesão, (opção) gorgonzola ou cheddar",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "3 Queijos",
          description: "catupiry, mussarela e parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Bauru",
          description: "presunto, rodela de tomate e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Napolitana",
          description: "mussarela, rodela de tomate gratinado com parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Caipira",
          description: "frango, milho verde e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Rucula",
          description: "mussarela de bufala, tomate seco e rucula",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Alho e oleo",
          description: "Alho e oleo",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Caprezi",
          description: "mussarela de bufala e tomate seco",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Siciliana",
          description: "bacon, cebola, champignon coberto com catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Pizza do Alemão",
          description: "brocolis, palmito, mussarela, tomate seco e manjericão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Ge & Lu",
          description: "Borda recheada de mussarela e presunto, recheada com alho poró, e mussarela salpicada com bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

       


        // Adicione mais 9 itens com nome, descrição, preço e imagem
      ],
    },

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////






    {
      name: "Médias",
      items: [
        {
          name: "Calabresa",
          description: "Molho de tomate, muçarela, calabresa, cebola, pimentão.",
          price: "$45.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Margherita",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "A moda do Le Velmont",
          description: "Mussarela,escarola,catupiry,bacon e calabresa",
          price: "$45.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Atum",
          description: "Atum e cebola",
          price: "$45.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Atum 2",
          description: "Atum,cebola e tomate",
          price: "$45.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "A Moda do Chefe",
          description: "Atum,champignon,mussarela,salpicada com bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Bacon",
          description: "Bacon,cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Frango",
          description: "Frango e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Frango 2",
          description: "Frango e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Frango Especial",
          description: "Frango,catupiry e Batata palha",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Baiacatu",
          description: "Calabresa moida com catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Brasileira",
          description: "Palmito, milho verde, mussarela e bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Portuguesa",
          description: "Presunto, ovos cozidos, ervilha, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Portuguesa 2",
          description: "Pesunto, ovos cozidos, milho verde, cebola e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "2 Queijos",
          description: "mussarela e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Milho verde",
          description: "milho verde e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Milho verde 2",
          description: "milho verde e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Francesa",
          description: "pesunto, ovos cozidos, catupiry e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Lombo Canadense",
          description: "lombo canadense, cebola e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Peito de peru",
          description: "peito de peru e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Palmito",
          description: "palmito, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Atum especial",
          description: "atum, cebola, milho verde e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Chilena",
          description: "Calabresa fatiada, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Escarola",
          description: "escarola refogada, bacon, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },



        {
          name: "Brocolis",
          description: "Brocolis, catupiry, mussarela e bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Abobrinha",
          description: "mussarela, abobrinha e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Beringela",
          description: "beringela, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Mussarela c/alho",
          description: "mussarela e alho",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Mussarela",
          description: "mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Carne seca",
          description: "carne seca refogada coberta com mussarela de bufala",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Calabacon",
          description: "calabresa, bacon e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "La Grasa",
          description: "frango, bacon, catupiry e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Catupiry",
          description: "catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Baiana",
          description: "calabesa moida, ovos cozidos, pimenta e cebola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        
        {
          name: "Baiana 2",
          description: "calabesa moida, ovos cozidos, tomate, pimenta e cebola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Toscana",
          description: "calabesa moida, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Peperone",
          description: "peperone, mussarela e parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Castelone",
          description: "mussarela, calabresa frita, cebolinha e salsinha",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "4 Queijo",
          description: "catupiry, mussarela, provolone e gorgonzola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "5 Queijo",
          description: "catupiry, mussarela, provolone, parmesão, (opção) gorgonzola ou cheddar",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "3 Queijos",
          description: "catupiry, mussarela e parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Bauru",
          description: "presunto, rodela de tomate e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Napolitana",
          description: "mussarela, rodela de tomate gratinado com parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Caipira",
          description: "frango, milho verde e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Rucula",
          description: "mussarela de bufala, tomate seco e rucula",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Alho e oleo",
          description: "Alho e oleo",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Caprezi",
          description: "mussarela de bufala e tomate seco",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Siciliana",
          description: "bacon, cebola, champignon coberto com catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Pizza do Alemão",
          description: "brocolis, palmito, mussarela, tomate seco e manjericão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Ge & Lu",
          description: "Borda recheada de mussarela e presunto, recheada com alho poró, e mussarela salpicada com bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        // SEGUIR O MESMO PADRÃO PARA ADICIONAR NOVOS PRODUTOS
      ],
    },

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    {
      name: "Broto",
      items: [
        {
          name: "Calabresa",
          description: "Molho de tomate, muçarela, calabresa, cebola, pimentão.",
          price: "$45.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Margherita",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "A moda do Le Velmont",
          description: "Mussarela,escarola,catupiry,bacon e calabresa",
          price: "$45.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Atum",
          description: "Atum e cebola",
          price: "$45.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Atum 2",
          description: "Atum,cebola e tomate",
          price: "$45.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "A Moda do Chefe",
          description: "Atum,champignon,mussarela,salpicada com bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Bacon",
          description: "Bacon,cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Frango",
          description: "Frango e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Frango 2",
          description: "Frango e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Frango Especial",
          description: "Frango,catupiry e Batata palha",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Baiacatu",
          description: "Calabresa moida com catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Brasileira",
          description: "Palmito, milho verde, mussarela e bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Portuguesa",
          description: "Presunto, ovos cozidos, ervilha, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Portuguesa 2",
          description: "Pesunto, ovos cozidos, milho verde, cebola e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "2 Queijos",
          description: "mussarela e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Milho verde",
          description: "milho verde e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Milho verde 2",
          description: "milho verde e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Francesa",
          description: "pesunto, ovos cozidos, catupiry e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        {
          name: "Lombo Canadense",
          description: "lombo canadense, cebola e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Peito de peru",
          description: "peito de peru e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Palmito",
          description: "palmito, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Atum especial",
          description: "atum, cebola, milho verde e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },


        {
          name: "Chilena",
          description: "Calabresa fatiada, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-1.jpg", // Adicione o nome da imagem
        },

        {
          name: "Escarola",
          description: "escarola refogada, bacon, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },



        {
          name: "Brocolis",
          description: "Brocolis, catupiry, mussarela e bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Abobrinha",
          description: "mussarela, abobrinha e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Beringela",
          description: "beringela, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Mussarela c/alho",
          description: "mussarela e alho",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Mussarela",
          description: "mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Carne seca",
          description: "carne seca refogada coberta com mussarela de bufala",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Calabacon",
          description: "calabresa, bacon e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "La Grasa",
          description: "frango, bacon, catupiry e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Catupiry",
          description: "catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Baiana",
          description: "calabesa moida, ovos cozidos, pimenta e cebola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        
        {
          name: "Baiana 2",
          description: "calabesa moida, ovos cozidos, tomate, pimenta e cebola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Toscana",
          description: "calabesa moida, cebola e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Peperone",
          description: "peperone, mussarela e parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Castelone",
          description: "mussarela, calabresa frita, cebolinha e salsinha",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "4 Queijo",
          description: "catupiry, mussarela, provolone e gorgonzola",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "5 Queijo",
          description: "catupiry, mussarela, provolone, parmesão, (opção) gorgonzola ou cheddar",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "3 Queijos",
          description: "catupiry, mussarela e parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Bauru",
          description: "presunto, rodela de tomate e mussarela",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Napolitana",
          description: "mussarela, rodela de tomate gratinado com parmesão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Caipira",
          description: "frango, milho verde e catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Rucula",
          description: "mussarela de bufala, tomate seco e rucula",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Alho e oleo",
          description: "Alho e oleo",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Caprezi",
          description: "mussarela de bufala e tomate seco",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Siciliana",
          description: "bacon, cebola, champignon coberto com catupiry",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Pizza do Alemão",
          description: "brocolis, palmito, mussarela, tomate seco e manjericão",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },

        {
          name: "Ge & Lu",
          description: "Borda recheada de mussarela e presunto, recheada com alho poró, e mussarela salpicada com bacon",
          price: "$55.00",
          image: "img/imagem/pizza-2.jpg",
        },
        
        // SEGUIR O MESMO PADRÃO PARA ADICIONAR NOVOS PRODUTOS
      ],
    },

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    {
      name: "Esfihas",
      items: [
        {
          name: "Esfiha de Carne",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.50",
          image: "img/imagem/esfiha2.jpg",
        },




        {
          name: "Esfiha de Calabresa",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.00",
          image: "img/imagem/esfihacalabresa.jpg",
        },


        {
          name: "Esfiha de Frango",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.00",
          image: "img/imagem/esfihafrango.jpg",
        },


        {
          name: "Esfiha de Frango",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.00",
          image: "img/imagem/esfihaqueijo.jpg",
        },
        {
          name: "Esfiha de Carne",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.50",
          image: "img/imagem/esfiha2.jpg",
        },

        {
          name: "Esfiha de Calabresa",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.00",
          image: "img/imagem/esfihacalabresa.jpg",
        },


        {
          name: "Esfiha de Frango",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.00",
          image: "img/imagem/esfihafrango.jpg",
        },


        {
          name: "Esfiha de Frango",
          description: "Carne moída temperada com especiarias, cebola, e limão.",
          price: "$3.00",
          image: "img/imagem/esfihaqueijo.jpg",
        },





        // SEGUIR O MESMO PADRÃO PARA ADICIONAR NOVOS PRODUTOS
      ],
    },
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    {
      name: "Bebidas",
      items: [
        {
          name: "Coca-Cola",
          description: "Lata 350ml.",
          price: "$6.99",
          image: "img/imagem/coca1.jpg",
        },

        {
          name: "Sprite",
          description: "Lata 350ml.",
          price: "$5.99",
          image: "img/imagem/sprite.jpg",
        },

        {
          name: "Fanta Uva",
          description: "Lata 350ml.",
          price: "$4.99",
          image: "img/imagem/fantauva.jpg",
        },

        {
          name: "Guarana",
          description: "Lata 350ml.",
          price: "$5.99",
          image: "img/imagem/guarana.jpg",
        },
        {
          name: "Coca-Cola",
          description: "Lata 350ml.",
          price: "$6.99",
          image: "img/imagem/coca1.jpg",
        },

        {
          name: "Sprite",
          description: "Lata 350ml.",
          price: "$5.99",
          image: "img/imagem/sprite.jpg",
        },

        {
          name: "Fanta Uva",
          description: "Lata 350ml.",
          price: "$4.99",
          image: "img/imagem/fantauva.jpg",
        },

        {
          name: "Guarana",
          description: "Lata 350ml.",
          price: "$5.99",
          image: "img/imagem/guarana.jpg",
        },




        // SEGUIR O MESMO PADRÃO PARA ADICIONAR NOVOS PRODUTOS
      ],
    },
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




    {
      name: "Calzone",
      items: [
        {
          name: "Calzone de Presunto e Queijo",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },

        {
          name: "Calzone",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },

        {
          name: "Calzone",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },

        {
          name: "Calzone",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },

        {
          name: "Calzone de Presunto e Queijo",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },

        {
          name: "Calzone",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },

        {
          name: "Calzone",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },

        {
          name: "Calzone",
          description: "Molho de tomate, muçarela, manjericão fresco.",
          price: "$45.00",
          image: "img/imagem/calzone.jpg",
        },


        // SEGUIR O MESMO PADRÃO PARA ADICIONAR NOVOS PRODUTOS
      ],
    },

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



  ];



  const selectedMenu = menus[menuId - 1];

  menuName.textContent = selectedMenu.name;
  menuItems.innerHTML = "";

  for (const item of selectedMenu.items) {
      const menuItem = document.createElement("div");
      menuItem.classList.add("menu-item");

      // Adicione a imagem redonda do produto
      const itemImage = document.createElement("img");
      itemImage.classList.add("menu-item-image");
      itemImage.src = item.image;
      menuItem.appendChild(itemImage);

      const itemDetails = document.createElement("div");
      itemDetails.classList.add("menu-item-details");

      const itemName = document.createElement("h3");
      itemName.textContent = item.name;

      const itemDescription = document.createElement("p");
      itemDescription.textContent = item.description;

      const itemPrice = document.createElement("p");
      itemPrice.textContent = item.price;

      itemDetails.appendChild(itemName);
      itemDetails.appendChild(itemDescription);
      itemDetails.appendChild(itemPrice);

      menuItem.appendChild(itemDetails);

      menuItems.appendChild(menuItem);
  }

  // Dividir os itens em duas colunas
  const items = menuItems.querySelectorAll(".menu-item");
  const half = Math.ceil(items.length / 2);
  const leftColumn = document.getElementById("menu-left");
  const rightColumn = document.getElementById("menu-right");

  leftColumn.innerHTML = "";
  rightColumn.innerHTML = "";

  for (let i = 0; i < half; i++) {
      leftColumn.appendChild(items[i]);
  }

  for (let i = half; i < items.length; i++) {
      rightColumn.appendChild(items[i]);
  }

  menuDetails.style.display = "block";
}