<section class="banner">

    <?php  

    require_once('admin/class/banner.php');
    $banner = new BannerClass();
    $lista = $banner->Listar();

    // Filtra apenas banners com status "ATIVO"
    $listaAtivos = array_filter($lista, function($banner) {
        return $banner['statusBanner'] == 'ATIVO';
    });

    // Embaralha os banners ativos
    shuffle($listaAtivos);

    // Limita a exibição para até  3 banners ativos
    $listaAtivos = array_slice($listaAtivos,  0,  3);

    foreach ($listaAtivos as $banner) {
        echo "<img src='img/" . $banner['altBanner'] . "' alt='" . $banner['nomeBanner'] . "'>";
    }

    ?>

</section>
