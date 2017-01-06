<!--Modal Foto Editar Banner-->
<div class="modal fade" id="editarBanner<?php echo $IdBanner ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form name="editarBanner" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Alterar Banner: <?php echo $IdBanner ?> - <?php echo $TituloBanner ?></h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <img src="<?php echo $ImgBanner ?>" class="img-responsive">
                            <input type="file" name="novaImg" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6" style="border-left: 1px solid #333">
                        <div class="form-group">
                            <label>ID do banner: </label>
                            <input type="text" name="idBanner" value="<?php echo $IdBanner ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Título do Banner: </label>
                            <input type="text" name="tituloBanner" value="<?php echo base64_decode($TituloBanner) ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Texto do Banner: </label>
                            <textarea name="textoBanner" value="" class="form-control"><?php echo $TextoBanner ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Data do último update: </label>
                            <input type="text" name="updateBanner" value="<?php echo $DataUpdate ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Último usuário: </label>
                            <input type="text" name="nomeFotoNovo" value="<?php echo $UsuarioResp ?>" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar Modificações</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>