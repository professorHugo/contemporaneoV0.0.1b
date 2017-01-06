<!--MODAL APAGAR FOTO-->
<div class="modal fade in" tabindex="-1" role="dialog" style="display:block;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Foto apagada com sucesso</h4>
      </div>
      <div class="modal-body">
        <p class="lead">A foto de ID: <?php echo $idFoto?> foi apagada do registro e do banco de dados.</p>
		<p>Para inserir a foto novamente, selecione a op&ccedil;&atilde;o <i class="btn btn-default"><i class="glyphicon glyphicon-open"></i>&nbsp;Publicar Fotos</i> no menu &agrave; esquerda
      </div>
      <div class="modal-footer">
        <a href="home.php?url=VerFotos" class="btn btn-primary">Entendi</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>