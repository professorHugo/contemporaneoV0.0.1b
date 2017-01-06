<?php
	
$UploadFile = $_FILES['DescricaoConteudo'];
#Tipos de Arquivos permitidos
$tiposArquivos = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');
$extFotos = ($UploadFile['type'] == 'image/png' ? '.png' : '.png');
$FotoSize = 1024 * 1024 * 3;

if ($UploadFile['size'] > $FotoSize) {
    #Validar Tamanho
    echo 'O arquivo é muito pesado, somente fotos com até 3MB';
} else if (!in_array($UploadFile['type'], $tiposArquivos)) {
    #Validar Tipo
    echo 'Tipo de arquivo não permitido, somente fotos em JPG ou PNG';
} else {
    #Fazer Upload
    $NomeArquivo = $UpdateAboutUs['TituloConteudo'] . $extFotos;
    if (move_uploaded_file($UploadFile['tmp_name'], 'img/paginas/' . $UpdateAboutUs['CategoriaEditar'] . '/' . $NomeArquivo)) {
        ?>
        <div class="col-md-12">
            Página: Quem Somos<br>
            Nome da Foto: <?php echo $UpdateAboutUs['DescricaoConteudo'] ?><br>
            Data de UpLoad: <?php echo date('dd/mm/aaaa - H:m:i') ?><br>
            Arquivo: <?php echo $UpdateAboutUs['DescricaoConteudo'] ?><br>
            Arquivo Upload: <?php print_r($UploadFile) ?><br>            
            Informação Completa: <?php echo $UpdateAboutUs['ConteudoNovo'] ?><br>
            Local de Armazenamento: <?php echo 'img/paginas/' . $UpdateAboutUs['CategoriaEditar'] . '/' . $NomeArquivo?><br>
            Usuário Responsável: <?php echo $UpdateAboutUs['usuarioUpdate'] ?><br>
        </div>
        <?php
        #SQLupdate da tabela
    $SQLUpdateAboutUs = "UPDATE conteudo SET titulo_conteudo = '$UpdateAboutUs[TituloConteudo]', descricao_conteudo = '$UpdateAboutUs[DescricaoConteudo]',informacao_conteudo ='$UpdateAboutUs[ConteudoNovo]',ultimo_update = '$UpdateAboutUs[usuarioUpdate]' WHERE id = '$UpdateAboutUs[idAboutUs]'";
    mysql_query($SQLUpdateAboutUs);
    ?>
    <div class="modal fade in text-muted" id="modalLoggedIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:7%">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="home.php?url=verFotos" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                    <h4 class="modal-title" id="myModalLabel">Conteúdo alterado em: <?php echo date('d/m/Y') . 'As ' . date('H:i:s') ?></h4>
                </div>
                <div class="modal-body">
                    Categoria: <?php echo $UpdateAboutUs['TituloConteudo'] ?><br>
                    Título: <?php echo $UpdateAboutUs['TituloConteudo'] ?><br>
                    Nova Foto: <?php echo $UpdateAboutUs['DescricaoConteudo'] ?><br>
                    Conteúdo: <?php echo $UpdateAboutUs['ConteudoNovo'] ?><br>
                    Usuário Responsável: <?php echo $UpdateAboutUs['usuarioUpdate'] ?><br>
                </div>
                <div class="modal-footer">
                    <a href="home.php?url=VerConteudo&pagina=AboutUs" class="btn btn-default">Fechar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
        
        <?php
        
        echo $SQLUpdateAboutUs;
    } else {
        echo 'Não Enviado!';
    }
    return $NomeArquivo;
}