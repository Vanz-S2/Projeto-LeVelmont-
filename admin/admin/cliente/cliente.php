<?php

    $pagina = @$_GET['c'];

    if ($pagina == NULL){
        require_once('listar.php');
    }else{
        if($pagina == 'cadastrar'){require_once('cadastrar.php');}
        if($pagina == 'atualizar'){require_once('atualizar.php');}
        if($pagina == 'desativar'){require_once('desativar.php');}
    }




?>