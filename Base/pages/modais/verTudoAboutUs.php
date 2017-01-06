<!-- Modal -->
<div class="modal fade" id="modalEditar<?php echo $resPaginas['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ver / Editar Conteúdo: "<?php echo $resPaginas['titulo_conteudo'] ?>"</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="TituloConteudo">Título:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="TituloConteudo" value="<?php echo $resPaginas['titulo_conteudo'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="DescricaoConteudo">Descrição:</label>
                        </div>
                        <div class="col-md-9">
						<?php
						if ($resPaginas['titulo_conteudo'] != "FotoLoja" && $resPaginas['titulo_conteudo'] != "Secundarias"){
							?>
							<p class="form-control-static"><?php echo $resPaginas['titulo_conteudo']?></p>
							<?php
						}else{
						?>
                            <input type="file" name="DescricaoConteudo" class="form-control">
						<?php
						}
						?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for="ConteudoNovo">Informação Completa:</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="ConteudoNovo" class="form-control" style="min-height:200px"><?php echo $resPaginas['informacao_conteudo'] ?></textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idAboutUs" value="<?php echo $resPaginas['id'] ?>">
                <input type="hidden" name="CategoriaEditar" value="<?php echo $resPaginas['categoria_pagina'] ?>">

                <div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" name="salvarAlteracoes">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</div>