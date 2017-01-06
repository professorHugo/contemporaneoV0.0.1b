<!-- Modal Cadastrar Conteúdo-->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:7%">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <a href="home.php" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                                <h4 class="modal-title" id="myModalLabel">Conteúdo Cadastrado</h4>
                        </div>
                        <div class="modal-body">
                                <?php
                                if (isset($_POST['enviar-conteudo'])) {
                                        $pagina = $_POST['pagina'];
                                        $categoria = ($_POST['categoria'] == 'Daminhos' || $_POST['categoria'] == 'Damas de honra')? 'Acompanhantes' : $_POST['categoria'];
                                        $titulo_conteudo = $_POST['titulo_conteudo'];
                                        $descricao_conteudo = $_POST['descricao_conteudo'];
                                        $informacao_conteudo = $_POST['informacao_conteudo'];
                                        $usuario_responsavel = $_SESSION['login']['usuario'];
                                        ?>
                                        <p>Página: <?php echo $pagina ?></p>
                                        <p>Categoria: <?php echo $categoria ?></p>
                                        <p>Titulo: <?php echo $titulo_conteudo ?></p>
                                        <p>Descrição: <?php echo $descricao_conteudo ?></p>
                                        <p>Informação: <?php echo $informacao_conteudo ?></p>
                                        <?php
                                        echo $queryCadastrarConteudoPagina = "INSERT INTO conteudo(conteudo_pagina,categoria_pagina,titulo_conteudo,descricao_conteudo,informacao_conteudo,usuario_responsavel) VALUES('$pagina','$categoria','$titulo_conteudo','$descricao_conteudo','$informacao_conteudo','$usuario_responsavel')";
                                        mysql_query($queryCadastrarConteudoPagina);
                                }
                                ?>
                                
                        </div>
                        <div class="modal-footer">
                                <a href="home.php?url=cadConteudo&pagCadastro=home" class="btn btn-success">Cadastrar Novo</a>
                                <a href="home.php" class="btn btn-warning">Voltar</a>
                        </div>
                </div>
        </div>
</div>