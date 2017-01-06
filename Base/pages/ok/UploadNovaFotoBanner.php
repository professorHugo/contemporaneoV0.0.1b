<?php
$UploadFile = $_FILES['novaImg'];
#Tipos de Arquivos permitidos
$tiposArquivos = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');
$extFotos = ($UploadFile['type'] == 'image/png' ? '.jpg' : '.jpg');
$FotoSize = 1024 * 1024 * 4;

if ($UploadFile['size'] > $FotoSize) {
    #Validar Tamanho
    echo 'O arquivo é muito pesado, somente fotos com até 8MB';
} else if (!in_array($UploadFile['type'], $tiposArquivos)) {
    #Validar Tipo
    echo 'Tipo de arquivo não permitido, somente fotos em JPG ou PNG';
} else {
    #Fazer Upload
    $NomeArquivo = 'img/banners/' . $UpdateBanner['idBanner'] . $extFotos;
    if (move_uploaded_file($UploadFile['tmp_name'], $NomeArquivo)) {
        ?>
        <div class="col-md-12">
            Id: <?php echo $UpdateBanner['idBanner'] ?><br>
            Título: <?php echo $UpdateBanner['tituloBanner'] ?><br>
            Texto do Banner: <?php $UpdateBanner['textoBanner'] ?><br>
            Nome da IMG: <?php echo $UpdateBanner['novaImg'] ?><br>
            Data Update: <?php echo $UpdateBanner['dataUpdate'] = FormDate(date('d/m/Y')) ?><br>
            Usuário Responsável: <?php echo $fotoUpload['usuario_responsavel'] ?><br>
        </div>
        <?php
        #SQLupdate da tabela
        $SQLUpdateConteudo = "UPDATE banners_portal SET titulo_banner = '$UpdateBanner[tituloBanner]', texto_banner = '$UpdateBanner[textoBanner]',img_banner ='$NomeArquivo',data_update = '$UpdateBanner[dataUpdate]',usuario_responsavel = '$_SESSION[login][usuario]' WHERE id = '$UpdateBanner[idBanner]'";
        $exeSQLUpdateConteudo = mysql_query($SQLUpdateConteudo);
        echo $SQLUpdateConteudo;
    } else {
        echo 'Não Enviado!';
    }
    return $NomeArquivo;
}