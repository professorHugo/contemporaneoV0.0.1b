<?php
$UploadFile = $_FILES['UploadNovo'];
#Tipos de Arquivos permitidos
$tiposArquivos = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');
$extFotos = ($UploadFile['type'] == 'image/png' ? '.png' : '.png');
$FotoSize = 1024 * 1024 * 8;

if ($UploadFile['size'] > $FotoSize) {
    #Validar Tamanho
    echo 'O arquivo é muito pesado, somente fotos com até 8MB';
} else if (!in_array($UploadFile['type'], $tiposArquivos)) {
    #Validar Tipo
    echo 'Tipo de arquivo não permitido, somente fotos em JPG ou PNG';
} else {
    #Fazer Upload
    $NomeArquivo = $UpdateConteudo['TituloNovo'] . $extFotos;
    if (move_uploaded_file($UploadFile['tmp_name'], 'img/paginas/' . $UpdateConteudo['CategoriaEditar'] . '/' . $NomeArquivo)) {
        ?>
        <div class="col-md-12">
            Título: <?php echo $UpdateConteudo[TituloNovo] ?><br>
            Nome da Foto: <?php echo $fotoUpload['nomeFotoUp'] ?><br>
            Data da Foto: <?php echo $fotoUpload['dataFotoUp'] ?><br>
            Arquivo: <?php echo $fotoUploadArq['name'] ?><br>
            Arquivo Upload: <?php print_r($fotoUploadArq) ?><br>
            Modelo: <?php echo $fotoUpload['modeloFotoUp'] ?><br>
            Descrição: <?php echo $fotoUpload['tagsFotoUp'] ?><br>
            Local de Armazenamento: <?php echo $fotoUpload['caminhoFotoUp'] ?><br>
            Usuário Responsável: <?php echo $fotoUpload['usuario_responsavel'] ?><br>
        </div>
        <?php
        #SQLupdate da tabela
        $SQLUpdateConteudo = "UPDATE conteudo SET titulo_conteudo = '$UpdateConteudo[TituloNovo]', descricao_conteudo = '$NomeArquivo',informacao_conteudo ='$UpdateConteudo[DescricaoNovo]',ultimo_update = '$UpdateConteudo[usuarioUpdate]' WHERE id = '$UpdateConteudo[idUpdateConteudo]'";
        $exeSQLUpdateConteudo = mysql_query($SQLUpdateConteudo);
        echo $SQLUpdateConteudo;
    } else {
        echo 'Não Enviado!';
    }
    return $NomeArquivo;
}