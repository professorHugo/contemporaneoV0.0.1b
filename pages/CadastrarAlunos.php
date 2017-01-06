<script src="js/buscarCEP.js"></script>
<form class="inline-form col-md-8 col-md-push-2" action="" method="post" enctype="multipart/form-data">
    <div class="col-md-12 form-group">
        <h3>Cadastro de Alunos</h3>
    </div>
    <div class="form-group col-md-6">
        <label for="nome_aluno">Nome:</label>
        <input type="text" name="nome_aluno" id="nome_aluno" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="telefone_aluno">Telefone do aluno</label>
        <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label form="nome_mae">Nome da Mãe</label>
        <input type="text" name="nome_mae" id="nome_mae" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="telefone_mae">Telefone da mãe</label>
        <input type="text" name="telefone_mae" id="telefone_mae" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label form="nome_pai">Nome do Pai</label>
        <input type="text" name="nome_pai" id="nome_pai" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="telefone_pai">Telefone do Pai</label>
        <input type="text" name="telefone_pai" id="telefone_pai" class="form-control">
    </div>
    <div id="retorno-cep">
        <div class="form-group col-md-2">
            <label for="cep_endereco">CEP</label>
            <input type="text" name="cep_endereco" onblur="" id="cep_endereco" class="form-control">
        </div>
        <div class="form-group col-md-5">
            <label for="endereco_completo">Endereço</label>
            <input type="text" name="endereco_completo" id="endereco_completo" class="form-control">
        </div>
        <div class="form-group col-md-2">
            <label for="numero_endereco">Nº</label>
            <input type="number" name="numero_endereco" id="numero_endereco" class="form-control">
        </div>
        <div class="form-group col-md-3">
            <label for="bairro_endereco">Bairro</label>
            <input type="text" name="bairro_endereco" id="bairro_endereco" class="form-control">
        </div>
        <div class="form-group col-md-3">
            <label for="cidade_endereco">Cidade</label>
            <input type="text" name="cidade_endereco" id="cidade_endereco" class="form-control">
        </div>
        <div class="form-group col-md-3">
            <label for="estado">Estado</label>
            <input type="text" name="estado_endereco" id="estado_endereco" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="complemento_endereco">Complemento</label>
            <input type="text" name="complemento_endereco" id="complemento_endereco" class="form-control">
        </div>
    </div>
    <div class="col-md-12" style="padding-top: 20px"></div>
    <div class="form-group col-md-12">
        <input type="submit" name="cadastrar_aluno" value="Cadastrar Aluno" class="btn btn-success">
        <button type="button" data-toggle="modal" data-target="#modalAdicionarCredito" class="btn btn-info">Adicionar Crédito de Estudo</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalAdicionarCredito" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Adicionar Crédito de Estudo</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="numero_credito">Nº Cupom</label>
                        <input type="number" name="numero_credito" id="numero_credito" class="form-control" placeholder="Digite o número do cupo">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>