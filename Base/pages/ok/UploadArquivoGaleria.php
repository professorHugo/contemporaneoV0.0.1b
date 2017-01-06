<!-- Modal Cadastrar Conteúdo-->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:7%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="home.php?url=verFotos" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" id="myModalLabel">Foto Enviada em: <?php echo date('d/m/Y') . 'As ' . date('H:i:s') ?></h4>
            </div>
            <div class="modal-body">
                <?php
                if (isset($fotoUploadArq)) {
                    $UploadFile = $_FILES['arquivo_foto'];
                    #Tipos de Arquivos permitidos
                    $tiposArquivos = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');
                    $extFotos = ($UploadFile['type'] == 'image/png' ? '.jpg' : '.jpg');
                    $FotoSize = 1024 * 1024 * 3;

                    if ($UploadFile['size'] > $FotoSize) {
                        #Validar Tamanho
                        echo 'O arquivo é muito pesado, somente fotos com até 3MB';
                    } else if (!in_array($UploadFile['type'], $tiposArquivos)) {
                        #Validar Tipo
                        echo 'Tipo de arquivo não permitido, somente fotos em JPG ou PNG';
                    } else {
                        #Fazer Upload
                        $nome = $fotoUpload['nomeFotoUp'] . $extFotos;
                        if (move_uploaded_file($UploadFile['tmp_name'], $fotoUpload['caminhoFotoUp'] . '/' . $nome)) {
                            ?>
                            <div class="col-md-12">
                                Categoria: <?php echo $fotoUpload['categoriaFotoUp'] ?><br>
                                Coleção: <?php echo $fotoUpload['colecaoFotoUp'] ?><br>
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
                        } else {
                            echo 'Não Enviado!';
                        }
                    }
                }
                ?>

            </div>
            <div class="modal-footer">
                <a href="home.php?url=PublicarFotos" class="btn btn-success">Cadastrar Novo</a>
                <a href="home.php?url=VerFotos" class="btn btn-warning">Voltar</a>
            </div>
        </div>
    </div>
</div>