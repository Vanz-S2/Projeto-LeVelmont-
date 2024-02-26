<?php

    $pagina = @$_GET['ca'];

    if ($pagina == NULL){
        require_once('listar.php');
    }else{
        if($pagina == 'abrir'){require_once('abrir.php');}
        if($pagina == 'atualizar'){require_once('atualizar.php');}
        if($pagina == 'fechar'){require_once('fechar.php');}
    }




?>