<?php
#Coleção
$colecao_buscada = $_GET['Categoria'];
#Quantidade de itens a serem exibidos
$quantidade = 4;
#Página Atual
$pagina = (isset($_GET['pagina'])) ? (int) $_GET['pagina'] : 1;
#Calcula apágina de qual valor será exibido
$inicio = ($quantidade * $pagina) - $quantidade;
#Query para exibir
$queryBuscarFotos = "SELECT * FROM fotos WHERE colecao LIKE '%$colecao_buscada%' LIMIT $inicio, $quantidade";
$exeQrBuscarFotos = mysql_query($queryBuscarFotos);

if (mysql_num_rows($exeQrBuscarFotos) > 0) {
    ?>
    <div class="row">
	<div class="filtro_fotos col-md-12" style="margin-bottom:30px;">
		<form action="" method="post" class="inline-form col-md-6 col-md-push-3">
			<input type="text" name="filtro_fotos" id="filtro_fotos" placeholder="Digite a categoria para filtrar" class="form-control" style="background:url(img/filter.png) right no-repeat">
		</form>
	</div>
        <?php
        while ($resultadoFotos = mysql_fetch_assoc($exeQrBuscarFotos)) {
            $idFoto = $resultadoFotos['id'];
            $categoriaFoto = $resultadoFotos['categoria'];
            $colecaoFoto = $resultadoFotos['colecao'];
            $caminhoFoto = $resultadoFotos['caminho_foto'];
            $nomeFoto = $resultadoFotos['nome_foto'];
            $nomeModelo = $resultadoFotos['nome_modelo'];
            $dataFoto = $resultadoFotos['data_foto'];
            $usuarioResponsavelFoto = $resultadoFotos['usuario_resp'];
            $dataUploadFoto = $resultadoFotos['data_upload'];
            $tagsFoto = $resultadoFotos['tags_foto'];
            ?>
            <!-- Projects Row -->
            <div class="<?php echo $xs[12] . $sm[12] . $md[4] . $lg[3] ?>portfolio-item">
                <a href="" data-toggle="modal" data-target="#verFoto<?php echo $idFoto ?>" style="cursor:pointer;">
                    <img class="img-responsive" src="<?php echo$caminhoFoto . '/' . $nomeFoto ?>.jpg" alt="<?php echo$nomeFoto ?>" title="<?php echo$nomeModelo ?>">
                </a>
                <p>
                    ID da foto: <?php echo $idFoto ?><br>
                    Categoria: <?php echo $categoriaFoto ?><br>
                    Coleção: <?php echo $colecaoFoto ?><br>
                    Data da Foto: <?php echo $dataFoto ?><br>
                    Data Upload: <?php echo $dataUploadFoto ?><br>
                    Informação: <?php echo lmWord($tagsFoto) ?>...<br>
					Arquivo: <?php echo $nomeFoto ?><br>
                <h4><a data-toggle="modal" data-target="#verFoto<?php echo $idFoto ?>" style="cursor:pointer;">Ver a foto: <?php echo$nomeModelo ?></a></h4>
                <h5><a href="" data-toggle="modal" data-target="#editarFoto<?php echo $idFoto ?>">Editar</a><br></h5>
                <h5><a href="" data-toggle="modal" data-target="#apagarFoto<?php echo $idFoto ?>">Apagar Foto</a></h5>
                </p>
            </div>
            <?php
            include 'pages/modais/modais_fotos_cadastradas.php';
            if (isset($_GET['apagarFoto' . $idFoto])) {
                $apagarFoto = $_GET['apagarFoto' . $idFoto];
                if ($apagarFoto == 'true') {
                    mysql_query("DELETE FROM fotos WHERE id = '$idFoto'");
                    include 'pages/ok/apagar_foto.php';
                }
            }else if(isset($_GET['editarFoto' . $idFoto])){
                echo '<alert>Foto'.$idFoto.'</alert>';
            }
        }
        ?>
    </div>
    <!-- /.row -->
    <?php
} else {
    echo 'Nenhuma foto cadastrada';
}
?>
<hr>
<?php
#Paginação
#SQL
$sqlTotalFotos = "SELECT id FROM fotos WHERE colecao LIKE '%$colecao_buscada%'";
#Query
$QrTotalFotos = mysql_query($sqlTotalFotos);
#Total de Registros
$numTotalFotos = mysql_num_rows($QrTotalFotos);
#Total de páginas para exibir
$totalPaginaFotos = ceil($numTotalFotos / $quantidade);
#Valor Máximo para exibição tanto a esquerda quanto a direita
$exibir = 4;
#Criação do link para voltar as páginas, o padrão, no caso de 0 torna-se 1
$anterior = (($pagina - 1) == 0) ? 1 : $pagina - 1;
#Criação do link para avançar as páginas, caso pagina+1, maior ou igual ao total, valor total, senão pagina+1
$posterior = (($pagina + 1) >= $totalPaginaFotos) ? $totalPaginaFotos : $pagina + 1;
?>
<!-- Pagination -->
<div class="row text-center" style="position:absolute;top:80px;right:50px">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="?url=VerFotos&Categoria=<?php echo $colecao_buscada?>&pagina=1">&laquo;</a>
            </li>
            <li class="">
                <a href="?url=VerFotos&Categoria=<?php echo $colecao_buscada?>&pagina=<?php echo $anterior ?>">&lt;</a>
            </li>
            <?php
            for ($i = $pagina - $exibir; $i <= $pagina - 1; $i++) {
                if ($i > 0)
                    echo '<li><a href="?url=VerFotos&Categoria='.$colecao_buscada.'&pagina=' . $i . '"> ' . $i . ' </a></li>';
            }
            echo '<li class="active"><a href="?url=VerFotos&Categoria='.$colecao_buscada.'&pagina=' . $pagina . '">' . $pagina . '</a></li>';

            for ($i = $pagina + 1; $i < $pagina + $exibir; $i++) {
                if ($i <= $totalPaginaFotos)
                    echo '<li><a href="?url=VerFotos&Categoria='.$colecao_buscada.'&pagina=' . $i . '"> ' . $i . ' </a></li>';
            }
			?>
            <li><a href="?url=VerFotos&Categoria=<?php echo $colecao_buscada?>&pagina=<?php echo $posterior?>">&gt;</a></li>
            <li><a href="?url=VerFotos&Categoria=<?php echo $colecao_buscada?>&pagina=<?php echo $totalPaginaFotos ?>">&raquo;</a></li>
        </ul>
    </div>
</div>
<!-- /.row -->