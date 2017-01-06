<?php
if (isset($_POST['salvarAlteracoes'])) {
    include 'pages/modais/ModifcarHome.php';
} else {
    ?>
    <div class="col-md-12">
        <?php
        if ($LinhasSQLConteudoPaginas > 0) {
            while ($resPaginas = mysql_fetch_assoc($exeSQLConteudoPaginas)) {
                ?>
                <div class="col-md-4" style="padding-top: 5px;padding-bottom: 5px;border:1px solid #999;box-shadow: 1px 1px 1px #999">
                    <p class="lead">Conteúdo da Página: <?php echo $resPaginas['categoria_pagina'] ?></p>
                    Título do Conteúdo: <?php echo $resPaginas['titulo_conteudo'] ?><br>
                    <img src="img/paginas/<?php echo $resPaginas['categoria_pagina'] . '/' . $resPaginas['descricao_conteudo'] ?>" class="img-responsive"><br>
                    Usuário Responsável: <?php echo lmWord($resPaginas['usuario_responsavel']) ?><br>
                    Informação completa: <?php echo lmWord($resPaginas['informacao_conteudo']) ?> [...] <span data-toggle="modal" data-target="#modalEditar<?php echo $resPaginas['id'] ?>" class="btn btn-default">Ver / Modificar</span>
                </div>
                <?php
                include 'pages/modais/verTudo.php';
            }
        } else {
            echo 'Não há conteúdo cadastrado';
        }
        ?>
    </div>
    <?php
}