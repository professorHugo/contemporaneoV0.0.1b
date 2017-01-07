<?php
if (isset($_POST['cadastrar_materia'])) {
    $CadastroDeDisciplina = $_POST['disciplina'];

    $QueryCadastrarDisciplina = "INSERT INTO materias_disponiveis(materia) VALUES('$CadastroDeDisciplina')";
    $ExeQRCadastrarDisciplina = mysql_query($QueryCadastrarDisciplina);
    if ($ExeQRCadastrarDisciplina) {
        echo "Disciplina Cadastrada: " . $CadastroDeDisciplina;
    } else {
        echo "Disciplina " . $CadastroDeDisciplina . " Não cadastrado: " . mysql_error();
    }
} else {
    ?>
    <div class="col-md-10 col-md-push-1">
        <section class="col-md-8 col-md-push-2" style="padding-top: 15px; padding-bottom: 15px;">
            <h3>Cadastro de Disciplinas</h3>
            <hr>
            <form action="?acesso=CadastrarMaterias" method="post">
                <div class="form-group col-md-6">
                    <label for="disciplina">Disciplina:</label>
                    <input type="text" name="disciplina" id="disciplina" class="form-control" placeholder="Nome da Disciplina">
                </div>
                <div class="col-md-6" style="padding-top: 25px">
                    <div class="col-md-6 text-cente">
                        <button type="submit" name="cadastrar_materia" class="btn btn-block btn-success">Cadastrar</button>
                    </div>
                    <div class="col-md-6 text-cente">
                        <a href="?acesso=Home" class="btn btn-block btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </section>
        <div class="clearfix"></div>
        <hr>
        <section class="col-md-8 col-md-push-2">
            <h4>Matérias Já cadastradas</h4>
            <?php
            $ExeQrBuscarMateriasCadastradas = mysql_query("SELECT * FROM materias_disponiveis");
            if ($ExeQrBuscarMateriasCadastradas) {
                echo "<ul>";
                while ($Disciplinas = mysql_fetch_assoc($ExeQrBuscarMateriasCadastradas)) {
                    echo "<li>" . $Disciplinas['materia'] . "</li>";
                }
                echo "</ul>";
            }
            ?>
        </section>
    </div>
    <?php
}