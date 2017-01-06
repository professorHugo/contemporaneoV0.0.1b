<?php
if (isset($_POST['salvarAlteracoes'])) {
    include 'pages/modais/modifcarAboutUs.php';
} else {
    ?>
    <div class="col-md-12">
        <?php
        if ($LinhasSQLConteudoPaginas > 0) {
            while ($resPaginas = mysql_fetch_assoc($exeSQLConteudoPaginas)) {
                if ($resPaginas['titulo_conteudo'] != "FotoLoja" && $resPaginas['titulo_conteudo'] != "Secundarias") {
                    ?>
                    <div class="col-md-12" style="padding-top: 5px;padding-bottom: 5px;border:1px solid #999;box-shadow: 1px 1px 1px #999;margin-bottom: 10px">
                        <p class="lead">Conteúdo da Página: Quem Somos</p>
                        Título do Conteúdo: <?php echo $resPaginas['titulo_conteudo'] ?><br>
                        Descrição: <?php echo lmWord($resPaginas['descricao_conteudo']) ?><br>
                        Texto completo: <?php echo lmWord($resPaginas['informacao_conteudo']) ?> [...] <br>
                        Usuário Responsável: <?php echo lmWord($resPaginas['usuario_responsavel']) ?><br>
                        <span data-toggle="modal" data-target="#modalEditar<?php echo $resPaginas['id'] ?>" class="btn btn-default">Ver / Modificar</span>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-md-4" style="padding-top: 5px;padding-bottom: 5px;border:1px solid #999;box-shadow: 1px 1px 1px #999; min-height: 450px;">
                        <h2 class="<?php echo $md[12] ?>">Fotos da Loja</h2>
                        Título do Conteúdo: <?php echo $resPaginas['titulo_conteudo'] ?><br>
                        <img src="img/paginas/<?php echo $resPaginas['categoria_pagina'] . '/' . $resPaginas['descricao_conteudo'] ?>" class="img-responsive"><br>
                        Usuário Responsável: <?php echo lmWord($resPaginas['usuario_responsavel']) ?><br>
                        Informação completa: <?php echo lmWord($resPaginas['informacao_conteudo']) ?> [...] <span data-toggle="modal" data-target="#modalEditar<?php echo $resPaginas['id'] ?>" class="btn btn-default">Ver / Modificar</span>
                    </div>
                    <?php
                }

                include 'pages/modais/verTudoAboutUs.php';
            }
        } else {
            echo 'Não há conteúdo cadastrado';
        }
        ?>
    </div>
    <?php
}