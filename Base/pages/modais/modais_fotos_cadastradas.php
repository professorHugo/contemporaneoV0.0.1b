<!--Modal Foto Ver Foto-->
<div class="modal fade" id="verFoto<?php echo $idFoto ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $idFoto ?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Foto: <?php echo $idFoto ?> - <?php echo $nomeModelo ?></h4>
            </div>
            <div class="modal-body">
                <div class="<?php echo $xs[12] . $sm[12] . $md[6] . $lg[6]; ?>">
                    <img src="<?php echo$caminhoFoto . '/' . $nomeFoto ?>.jpg" class="img-responsive">
                </div>
                <div class="<?php echo $xs[12] . $sm[12] . $md[6] . $lg[6]; ?>">
                    <h3>Descrição:</h3>
                    <strong>Nome da Modelo: </strong><?php echo $nomeModelo; ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Foto Editar Foto-->
<div class="modal fade" id="editarFoto<?php echo $idFoto ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form name="editarFoto">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Editar a Foto: <?php echo $idFoto ?> - <?php echo $nomeModelo ?></h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <img src="<?php echo$caminhoFoto . '/' . $nomeFoto ?>.jpg" class="img-responsive">
                            <input type="file" name="novaFoto" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6" style="border-left: 1px solid #333">
                        <div class="form-group">
                            <label>ID da foto: </label>
                            <input type="text" name="nomeFotoNovo" value="<?php echo $idFoto ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nome da foto: </label>
                            <input type="text" name="nomeFotoNovo" value="<?php echo base64_decode($nomeFoto) ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nome da Modelo: </label>
                            <input type="text" name="nomeFotoNovo" value="<?php echo $nomeModelo ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Data da foto: </label>
                            <input type="text" name="nomeFotoNovo" value="<?php echo $dataFoto ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tags da foto: </label>
                            <input type="text" name="nomeFotoNovo" value="<?php echo $tagsFoto ?>" class="form-control">
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
<!--Modal Apagar Foto-->
<div class="modal fade" id="apagarFoto<?php echo $idFoto ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form name="apagarFoto" method="get">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirmação para apagar a Foto: <?php echo $idFoto ?> - <?php echo $nomeModelo ?></h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-4">
                        <div class="form-group">
                            <img src="<?php echo$caminhoFoto . '/' . $nomeFoto ?>.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8" style="border-left: 1px solid #333">
                        <div class="bg-danger">
							<p class="lead">Atenção: Ao excluir a imagem selecionada, esta será apagada do servidor.</p>
							<p class="lead">Este processo é irreversível.</p>
							<input type="hidden" name="url" value="VerFotos">
							<input type="hidden" name="apagarFoto<?php echo $idFoto?>" value="true">
						</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Apagar Foto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>