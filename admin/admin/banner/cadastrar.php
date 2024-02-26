<?php

if (isset($_POST['nomeBanner'])) {

    $nomeBanner = $_POST['nomeBanner'];
    $dscBanner = $_POST['dscBanner'];
    $statusBanner = $_POST['statusBanner'];


    $arquivo = $_FILES['altBanner'];

    if ($arquivo['error']) {
        throw new Exception("o error foi: ", $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/banner/' . $arquivo['name'])) {
        $altBanner = 'banner/' . $arquivo['name'];
    } else {
        throw new Exception("o error foi: ", $arquivo['error']);
    }





    require_once('class/banner.php');

    $banner = new BannerClass();

    $banner->nomeBanner = $nomeBanner;
    $banner->dscBanner = $dscBanner;
    $banner->statusBanner = $statusBanner;
    $banner->altBanner = $altBanner;


    $banner->Cadastrar();
}


?>








<h2 class="display-4">Cadastrar Banner</h2>





<form action="index.php?p=banner&b=cadastrar" method="POST" enctype="multipart/form-data" class="formulario-exercicio">

    <div class="mb-3 foto-exercicio">
        <label for="altBanner" class="form-label foto-produto">Foto:</label>
        <input type="file" class="form-control" id="altBanner" name="altBanner" style="display:none;">
        <img src="../img/imagem/semImagem.png" alt="Imagem Sem Foto" id="imgFoto">
    </div>


    <div class="nome-exercicio">

        <div class="mb-3">
            <label for="nomeBanner" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeBanner" id="nomeBanner" placeholder="Nome do Banner" required>

        </div>


        <div class="row">


            <div class="mb-3">
                <label for="dscBanner" class="form-label">Descrição:</label>
                <input type="text" class="form-control" name="dscBanner" id="dscBanner" placeholder="Descrição do Banner" required>
            </div>




            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusBanner" id="statusBanner" value="ATIVO" required>
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusBanner" id="statusBanner" value="DESATIVADO">
                        <label class="form-check-label">
                            DESATIVADO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="confirmar()">Cadastrar Banner</button>
            </div>


        </div>


    </div>
</form>