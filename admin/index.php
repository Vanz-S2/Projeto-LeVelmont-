<?php

$pagina = @$_GET['p'];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../css/reset.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="css/estilo.css">

</head>






<body>



    <main>

        <section class="tabela">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php?p=dashboard"
                                class="<?php echo (($pagina == 'dashboard') || ($pagina == '')) ? 'menuAtivo' : ''; ?>">Dashboard</a>
                        </li>
                        <li><a href="index.php?p=funcionario"
                                class="<?php echo ($pagina == 'funcionario') ? 'menuAtivo' : ''; ?>">Funcionário</a>
                        </li>
                        <li><a href="index.php?p=cliente"
                                class="<?php echo ($pagina == 'cliente') ? 'menuAtivo' : ''; ?>">Cliente</a></li>
                        <li><a href="index.php?p=produtos"
                                class="<?php echo ($pagina == 'produtos') ? 'menuAtivo' : ''; ?>">Produtos</a> </li>
                        <li><a href="index.php?p=vendas"
                                class="<?php echo ($pagina == 'vendas') ? 'menuAtivo' : ''; ?>">Vendas de bagos</a></li>

                        <li><a href="index.php?p=pagamentos"
                                class="<?php echo ($pagina == 'pagamentos') ? 'menuAtivo' : ''; ?>">Pagamentos</a></li>
                        <li><a href="index.php?p=contato"
                                class="<?php echo ($pagina == 'contato') ? 'menuAtivo' : ''; ?>">E-mail</a></li>
                        <li><a href="index.php?p=ajuda"
                                class="<?php echo ($pagina == 'ajuda') ? 'menuAtivo' : ''; ?>">Ajuda e Suporte</a></li>
                    </ul>
                </nav>
            </div>


            <div class="conteudo">
                <div>



                    <?php

                    switch ($pagina) {
                        case 'ajuda':
                            echo 'pg ajuda';
                            break;

                        case 'contato':
                            require_once('contato/contato.php');
                            break;

                        case 'relatorios':
                            echo 'pg relatorios';
                            break;

                        case 'pagamentos':
                            echo 'pg pagamentos';
                            break;


                        case 'vendas':
                            echo 'pg vendas';
                            break;

                        case 'produtos':
                            echo 'pg produtos';
                            break;

                        case 'cliente':
                            require_once('aluno/aluno.php');
                            break;


                        case 'funcionario':
                            echo 'pg funcionario';
                            break;

                        case 'dashboard':
                            echo 'pg dashboard';
                            break;


                        default:
                            echo 'pg dashboard';
                            break;
                    }

                    ?>
                </div>

            </div>


        </section>


    </main>



    <footer class="rodape">

        <section>
            <h2>Direitos reservados ao Travelers</h2>
        </section>


        <section>
            <h2>Desenvolvido por Isabella, Maycon e Vanzelli</h2>
        </section>

    </footer>






    <script src="https://code.jquery.com/jquery-3.7.1.js"></script> <!--Biblioteca do JQUERY-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script> <!--Biblioteca do BootStrap-->
    <script src="js/script.js"></script>

</body>

</html>