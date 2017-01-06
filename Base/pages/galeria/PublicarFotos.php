<?php
if ($_POST['upload'] == "ok") {
    include_once 'pages/ok/modal_publicar_foto_ok.php';
} else {
    #Query para exibir
    $queryBuscarFotos = "SELECT * FROM categorias";
    $exeQrBuscarFotos = mysql_query($queryBuscarFotos);
    $linhasFotos = mysql_num_rows($exeQrBuscarFotos);

    if ($linhasFotos > 0) {
        $labels = $xs[10] . $push_xs[1] . $sm[10] . $push_sm[1] . $md[3] . $push_md[0] . $lg[3] . $push_lg[0];
        $inputs = $xs[10] . $push_xs[1] . $sm[10] . $push_sm[1] . $md[7] . $push_md[0] . $lg[7] . $push_lg[0];
        ?>
        <div class="row">
            <div class="<?php echo $xs[12] . $sm[12] . $md[10] . $push_md[1] . $lg[8] . $push_lg[2] ?>" style="padding:0 0 10px 0; border: 1px solid #005983">
                <div class="modal-header bg-info">
                    <h4 style="padding: 0 10px;">Publicar Fotos</h4>
                </div>
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="upload" value="ok">
                    <div class="form-group">
                        <div class="<?php echo $labels; ?> text-left">
                            <label for="categoriaFoto">Categoria:</label>
                        </div>
                        <style>
                            #colecaoFoto option[value="Loading"]{
                                background:url('../img/ajax-loader.gif');
                            }
                        </style>
                        <div class="<?php echo $inputs; ?>">
                            <select class="form-control" name="categoriaFoto" id="categoriaFoto" onchange="returnGallery()">
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Infantil">Infantil</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="<?php echo $labels; ?> text-left">
                            <label for="colecaoFoto">Coleção:</label>
                        </div>
                        <div class="<?php echo $inputs; ?>">
                            <select class="form-control" name="colecaoFoto" id="colecaoFoto">
                                <!--O valor buscado com ajax vai retornado aqui-->
                                <?php include 'pages/galeria/returnGallery.php'; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="<?php echo $labels; ?> text-left">
                            <label for="nome_foto">Nome Foto :</label>
                        </div>
                        <div class="<?php echo $inputs; ?>">
                            <input type="text" name="nome_foto" id="nome_foto" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="<?php echo $labels; ?> text-left">
                            <label for="data_foto">Data Foto :</label>
                        </div>
                        <div class="<?php echo $inputs; ?>">
                            <input type="date" name="data_foto" id="data_foto" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="<?php echo $labels; ?> text-left">
                            <label for="arquivo_foto">Foto :</label>
                        </div>
                        <div class="<?php echo $inputs; ?>">
                            <input type="file" name="arquivo_foto" id="arquivo_foto" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="<?php echo $labels; ?> text-left">
                            <label for="modelo_foto">Modelo :</label>
                        </div>
                        <div class="<?php echo $inputs; ?>">
                            <input type="text" name="modelo_foto" id="modelo_foto" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="<?php echo $labels; ?> text-left">
                            <label for="tags_foto">Descrição:</label>
                        </div>
                        <div class="<?php echo $inputs; ?>">
                            <textarea name="tags_foto" id="tags_foto" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 com-md-6 col-lg-6" style="margin: 10px 0 0;">
                        <button type="submit" class="btn btn-default pull-left" name="publicarFoto">Enviar Foto</button>
                    </div>
                    <div class="col-xs-6 col-sm-6 com-md-6 col-lg-6" style="margin: 10px 0 0;">
                        <a href="home.php" type="reset" class="btn btn-default pull-right">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
        <?php
    } else {
        echo 'Não existem categorias cadastradas';
    }
}