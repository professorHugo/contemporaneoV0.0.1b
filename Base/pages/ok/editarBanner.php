<?php

if(isset($_POST['editarBanner'])){
    $UpdateBanner['idBanner'] = $_POST['idBanner'];
    $UpdateBanner['tituloBanner'] = $_POST['tituloBanner'];
    $UpdateBanner['textoBanner'] = $_POST['textoBanner'];
    $UpdateBanner['novaImg'] = $_POST['novaImg'];
    
    #Upload de Nova IMG
    $ImgBannerNova = $_FILES['novaImg'];
    include 'pages/ok/UploadNovaFotoBanner.php';
}