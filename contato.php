<?php


//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$ok = 0;


if (isset($_POST['email'])) {

    $nome   = $_POST['nome'];
    $email  = $_POST['email'];
    $fone   = $_POST['fone'];
    $mens   = $_POST['mens'];

    $assunto = 'Site Pizzaria Le Velmont';

    echo $nome;
    echo $email;
    echo $fone;
    echo $mens;

    require_once('admin/class/contato.php');

    $contato = new ContatoClass();

    $contato->nomeContato = $nome;
    $contato->emailContato = $email;
    $contato->telefoneContato = $fone;
    $contato->mensagemContato = $mens;

    $contato->Inserir();


    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');


    //Crie uma instância; passar `true (verdadeiro)`
    $mail = new PHPMailer(true);


    try {
        //Configurações do servidor
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Habilita saída de depuração detalhada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host       = 'smtp.hostinger.com';                   //Defina o servidor SMTP para enviar
        $mail->SMTPAuth   = true;                                   //Habilitar autenticação SMTP
        $mail->Username   = 'vivabem@ti21.smpsistema.com.br';       //SMTP nome de usuário
        $mail->Password   = 'Senac@ti21';                           //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar criptografia TLS implícita
        $mail->Port       = 465;                                    //Porta TCP para conexão

        //Destinatários
        $mail->setFrom('levelmont.smpsistema.com.br', $assunto);  // Quem dispara o email
        $mail->addAddress('gabrielvanzelli@outlook.com');        //Adicionar um destinatário


        //Conteúdo do email
        $mail->isHTML(true);                                          //Defina o formato do e-mail para HTML
        $mail->Subject = $assunto;

        //Conteúdo HTML
        $mail->Body    = "        
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";
        //Sem formatação HTML
        $mail->AltBody = "
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens
        ";

        $mail->send();
        //echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/responsivo.css">


</head>




<body>


    <!--Começo do Cabeçalho-->
    <header>

        <div class="site">
            <h1 class="animate__animated animate__bounce">Le Velmont</h1>

            <button class="abrir-menu"></button>
            <nav class="menu">
                <button class="fechar-menu"></button>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="promocao.php">Promoções</a></li>
                    <li><a href="cardapio.php">Cardapio</a></li>
                </ul>

            </nav>
        </div>

    </header>
    <!--Fim do Cabeçalho-->





    <!--Começo do Contato-->
    <section class="contato">

        <div class="site">
            <!--Faça seu Pedido -->
            <h2>Contato</h2>


            <h4>
                <?php
                if ($ok == 1) {
                    echo $nome . ", sua mensagem foi enviada com sucesso.";
                } else if ($ok == 2) {
                    echo $nome . ", não foi possível enviar sua mensagem. Tente mais tarde.";
                }

                ?>
            </h4>


            <div>
                <form action="#" method="POST">
                    <div>
                        <div>
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome" placeholder=" *Informe seu nome:" required>
                        </div>
                        <div>
                            <!--Endereço-->
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="*Informe o seu E-mail:" required>
                        </div>
                        <div>
                            <label for="fone">Telefone:</label>
                            <input type="tel" name="fone" id="fone" placeholder="*Infome seu Telefone:">
                        </div>


                    

                        <div>
                            <!--Seu Pedido-->
                            <label for="mens">Mensagem:</label>
                            <textarea name="mens" id="mens" cols="30" rows="10"></textarea>
                        </div>

                        <div class="btnContato">
                            <input type="submit" value="Enviar por e-mail"> <!--butao limpar  -->
                            <input type="button" value="Enviar po WhatsApp" ondblclick="enviarWhats()">
                        </div>
                    </div>

                    <div>
                        <!--Tire suas duvidas / Enviar por e-mail -->



                        <h2 class="h2cont">Perguntas Frequentes</h2>

                        <dl class="faq">
                            <dt>1. Quais são os tamanhos de pizza que vocês oferecem?</dt>
                            <dd>Oferecemos pizzas nos tamanhos pequeno (8"), médio (12") e grande (16").</dd>

                            <dt>2. Vocês têm opções de pizza vegetariana ou vegana?</dt>
                            <dd>Sim, temos uma variedade de opções vegetarianas e veganas em nosso cardápio. Por favor, consulte nossas opções específicas.</dd>

                            <dt>3. Quanto tempo demora para preparar e assar uma pizza?</dt>
                            <dd>O tempo de preparo e cozimento varia de acordo com o tamanho e o tipo de pizza, mas geralmente leva de 10 a 15 minutos.</dd>

                            <dt>4. Quais são os ingredientes da pizza [nome da pizza específica]?</dt>
                            <dd>Os ingredientes específicos de cada pizza estão listados em nosso cardápio. Por favor, consulte o cardápio para obter detalhes.</dd>

                            <dt>5. Vocês entregam? Qual é a área de entrega e qual o custo?</dt>
                            <dd>Sim, oferecemos serviço de entrega. A área de entrega e o custo variam. Por favor, entre em contato conosco ou veri
                        </dl>

                                  
                    </div>

                </form>
                
            </div>

        </div>

        </div>
    </section>

    <!--Fim do Contato-->
    <section class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.9929657354232!2d-46.37983302385577!3d-23.496762859223697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce635f4f16087d%3A0x3c590eda4222c49!2sAv.%20Dr.%20Almiro%20Leal%20da%20Costa%2C%20631%20-%20Parque%20Santa%20Am%C3%A9lia%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008122-260!5e0!3m2!1spt-BR!2sbr!4v1698553842623!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>



    <!--Começo do Rodape-->
    <?php require_once('conteudo/rodape.php') ?>
    <!--Fim do Rodape-->


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script> <!--Biblioteca do JQUERY-->

    <script src="js/slick.min.js"></script> <!--Livro da Biblioteca-->
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/animacao.js"></script> <!--Animações do java-->

    <script>
        // Adiciona evento de clique para cada dt
        document.querySelectorAll('.faq dt').forEach(item => {
            item.addEventListener('click', event => {
                // Remove a classe 'active' de todos os dts
                document.querySelectorAll('.faq dt').forEach(item => {
                    item.classList.remove('active');
                });
                // Adiciona a classe 'active' apenas ao dt clicado
                event.target.classList.add('active');
            });
        });
    </script>



</body>

</html>