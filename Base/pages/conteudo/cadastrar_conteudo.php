<?php
$queryBuscarDadosCategorias = "SELECT * FROM categorias";
$exeQrBuscarDadosCategorias = mysql_query($queryBuscarDadosCategorias)or die('Erro ao buscar os dados da tabela: ' . mysql_error());
$queryBuscarDadosPaginas = "SELECT * FROM paginas";
$exeQrBuscarDadosPaginas = mysql_query($queryBuscarDadosPaginas)or die('Erro ao buscar os dados da tabela: ' . mysql_error());
if (isset($_POST['enviar-conteudo'])) {
    include_once 'pages/ok/modal_cadastro_conteudo_ok.php';
} else {
    ?>
    <div class="<?php echo $xs[8] . $push_xs[2] . $sm[8] . $push_sm[2] . $md[10] . $push_md[1] . $lg[10] . $push_lg[1] ?> bg-success">
        <h1>Cadastrando conteúdo no portal</h1>
        <form action="" method="post">
            <div class="form-group">
                <div class="<?php echo $xs[3] . $sm[3] . $md[2] . $lg[2] ?>"
                     <label for="pagina">Página:</label>
                </div>
                <div class="<?php echo $xs[9] . $sm[9] . $md[10] . $lg[10] ?>">
                    <select name="pagina" class="form-control">
                        <?php
                        while ($resultadoPaginas = mysql_fetch_assoc($exeQrBuscarDadosPaginas)) {
                            $paginas['nome_pagina'] = $resultadoPaginas['nome_pagina'];
                            $paginas['referencia'] = $resultadoPaginas['referencia'];
                            ?>
                            <option value="<?php echo $paginas['nome_pagina'] ?>"><?php echo $paginas['nome_pagina'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="<?php echo $xs[3] . $sm[3] . $md[2] . $lg[2] ?>">
                     <label for="categoria">Categoria:</label>
                </div>
                <div class="<?php echo $xs[9] . $sm[9] . $md[10] . $lg[10] ?>">
                    <select name="categoria" class="form-control">
                        <?php
                        while ($resultadoCateg = mysql_fetch_assoc($exeQrBuscarDadosCategorias)) {
                            $categorias['nome_cat'] = $resultadoCateg['nome_cat'];
                            $categorias['caminho_foto'] = $resultadoCateg['caminho_foto'];
                            ?>
                            <option value="<?php echo $categorias['nome_cat'] ?>"><?php echo $categorias['nome_cat'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="<?php echo $xs[3] . $sm[3] . $md[2] . $lg[2] ?>"
                     <label for="titulo_conteudo">Título:</label>
                </div>
                <div class="<?php echo $xs[9] . $sm[9] . $md[10] . $lg[10] ?>">
                    <input type="text" name="titulo_conteudo" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="<?php echo $xs[3] . $sm[3] . $md[2] . $lg[2] ?>"
                     <label for="descricao_conteudo">Descrição:</label>
                </div>
                <div class="<?php echo $xs[9] . $sm[9] . $md[10] . $lg[10] ?>">
                    <input type="text" name="descricao_conteudo" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="<?php echo $xs[3] . $sm[3] . $md[2] . $lg[2] ?>"
                     <label for="informacao_conteudo">Texto:</label>
                </div>
                <div class="<?php echo $xs[9] . $sm[9] . $md[10] . $lg[10] ?>">
                    <textarea name="informacao_conteudo" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group pull-left <?php echo $xs[12] . $sm[12] . $md[12] . $lg[12] ?>" style="padding-top:15px;margin-top: 5px;border-top: 1px solid #444;">
                <button type="submit" class="btn btn-default enviar-conteudo pull-left" name="enviar-conteudo"></button>
                <a href="index.php?url=home" class="cancelar-envio btn btn-default pull-right"></a>
            </div>
            <input type="hidden" name="usuario_responsavel" value="<?php echo $_SESSION['login']['usuario'] ?>">
        </form>
    </div>
    <?php
}
?>