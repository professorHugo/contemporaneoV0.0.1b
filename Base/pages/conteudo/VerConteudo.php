<div class="" id="menuVerConteudo">
    <?php include_once 'pages/conteudo/VerConteudoMenu.php'; ?>
    <div class="clearfix"></div>
</div>
<div class="" id="exibirConteudoPublicado" style="padding-top: 15px;">
    <?php
    if (isset($_GET['pagina'])) {
        $paginaConteudoPublicado = $_GET['pagina'];
        #VARIÁVEL para ver qual página está em $_GET
        $PaginaGetConteudo = (isset($_GET['pagina'])) ? $_GET['pagina'] : '';
        #SQL para consultar o conteúdo
        $SQLConteudoPaginas = "SELECT * FROM conteudo WHERE categoria_pagina = '$PaginaGetConteudo'";
        #EXECUÇÃO do SQL
        $exeSQLConteudoPaginas = mysql_query($SQLConteudoPaginas);
        #Linhas encontradas
        $LinhasSQLConteudoPaginas = mysql_num_rows($exeSQLConteudoPaginas);
        switch ($paginaConteudoPublicado) {
            case $paginaConteudoPublicado: include_once 'pages/conteudo/Pagina'.$paginaConteudoPublicado.'.php';
                break;
            default: echo '<div class="col-md-12 text-center lead" style="margin-top: 30px">Categoria Inválida, que em uma categoria acima</div>';
                break;
        }
        include 'pages/modais/verTudo.php';
    } else {
        ?>
        <div class="col-md-12 text-center lead" style="margin-top: 30px">Clique em uma das categorias acima para Visualizar o conteúdo possível de manipulação</div>
        <?php
    }
    ?>
        <div class="clearfix"></div>
</div>