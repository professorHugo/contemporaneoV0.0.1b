<section class="col-md-10 col-md-push-1">
    <?php
    $ExeQrBuscarTabelaPrecoAlunos = mysql_query("SELECT * FROM escolaridade_aluno");
    while ($ResBuscarEscolaridadeAlunos = mysql_fetch_assoc($ExeQrBuscarTabelaPrecoAlunos)) {
        $NivelEscolaridade = $ResBuscarEscolaridadeAlunos['nivel'];
        $ValorEscolaridade = $ResBuscarEscolaridadeAlunos['valor'];
        ?>
    <form class="" method="post">
        <div class="form-group col-md-3">
            <label for="escolaridade">Escolaridade: <?php echo $NivelEscolaridade?></label>
            <input type="text" name="escolaridade" id="escolaridade" class="form-control" value="<?php echo $ValorEscolaridade?>">
        </div>
    </form>
        <?php
    }
    ?>
</section>