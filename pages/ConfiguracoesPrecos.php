<?php
if (isset($_POST['alterar'])) {
    if (isset($_POST['escolaridadeNova'])) {
        $EscolaridadeUpdate = $_POST['escolaridade'];
        $EscolaridadeAntiga = $_POST['escolaridadeAntiga'];
        $EscolaridadeNova = $_POST['escolaridadeNova'];
        $EscolaridadeId = $_POST['escolaridadeID'];

        $ExeQrUpdateValorEscolaridade = mysql_query("UPDATE escolaridade_aluno SET valor = $EscolaridadeNova WHERE id = $EscolaridadeId");
        if ($ExeQrUpdateValorEscolaridade) {
            echo "A Escolaridade <b>" . $EscolaridadeUpdate . "</b>, foi atualizada. Valor anterior: R$ " . $EscolaridadeAntiga . ", novo valor: R$" . $EscolaridadeNova;
        }
    }
}
?>
<section class="col-md-10 col-md-push-1" style="padding-top: 10px">
    <div class="col-md-8 col-md-push-2">
        <h3>Ajuste de cobrança das aulas</h3>
    </div>
    <div class="clearfix"></div>
    <hr>
    <?php
    $ExeQrBuscarTabelaPrecoAlunos = mysql_query("SELECT * FROM escolaridade_aluno");
    while ($ResBuscarEscolaridadeAlunos = mysql_fetch_assoc($ExeQrBuscarTabelaPrecoAlunos)) {
        $IDEscolaridade = $ResBuscarEscolaridadeAlunos['id'];
        $NivelEscolaridade = $ResBuscarEscolaridadeAlunos['nivel'];
        $ValorEscolaridade = $ResBuscarEscolaridadeAlunos['valor'];
        ?>
        <form class="form-inline" method="post">
            <div class="form-group col-md-8 col-md-push-2">
                <label for="escolaridade" class="col-md-4 sr-only-focusable text-right" style="padding-top: 7px">Escolaridade <?php echo $NivelEscolaridade ?></label>
                <div class="col-md-4 text-center">
                    <input type="text" name="escolaridadeNova" id="escolaridade" class="form-control" value="<?php echo $ValorEscolaridade ?>">
                    <input type="hidden" name="escolaridadeID" value="<?php echo $IDEscolaridade ?>">
                    <input type="hidden" name="escolaridadeAntiga" value="<?php echo $ValorEscolaridade ?>">
                    <input type="hidden" name="escolaridade" value="<?php echo $NivelEscolaridade ?>">
                </div>
                <div class="col-md-4">
                    <button type="submit" name="alterar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span></button>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
        </form>
        <?php
    }
    ?>
</section>