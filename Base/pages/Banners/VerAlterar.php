<?php
if (isset($_POST['editarBanner'])) {
    include_once 'pages/ok/editarBanner.php';
} else {
    $SQLBanners = "SELECT * FROM banners_portal";
    $ExeSQLBanners = mysql_query($SQLBanners);
    $LinhasSQLBanners = mysql_num_rows($ExeSQLBanners);

    if ($LinhasSQLBanners > 0) {
        while ($resBanners = mysql_fetch_assoc($ExeSQLBanners)) {
            $IdBanner = $resBanners['id'];
            $TituloBanner = $resBanners['titulo_banner'];
            $TextoBanner = $resBanners['texto_banner'];
            $ImgBanner = $resBanners['img_banner'];
            $DataUpdate = $resBanners['data_update'];
            $UsuarioResp = $resBanners['usuario_responsavel'];
            ?>
            <div class="col-md-12 col-lg-4" style="min-height: 400px;background: #00d6b2">
                <h3><?php echo $IdBanner ?>º - <?php echo $TituloBanner ?></h3>
                <img src="<?php echo $ImgBanner ?>" class="img-responsive">
                <p style="min-height: 80px;margin-top: 10px"><?php echo $TextoBanner ?></p>
                <p>Data Update: <?php echo $DataUpdate ?></p>
                <p>Usuário Resp: <?php echo $UsuarioResp ?></p>

                <button class="btn btn-default" data-toggle="modal" data-target="#editarBanner<?php echo $IdBanner ?>">Alterar</button>
            </div>
            <?php
            include 'pages/modais/modalAlterarDadosBanner.php';
        }
    }
}