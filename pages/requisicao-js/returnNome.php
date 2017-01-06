<?php
#Versão com ajax
if (isset($_GET['SelectNome'])) {
    include '../../cnf/config.php';

    $matriculaAluno = $_GET['SelectNome'];
    $QueryNomeAluno = "SELECT * FROM alunos WHERE matricula_aluno = '$matriculaAluno'";
//    sleep(1);
    $resultBuscarNome = mysql_query($QueryNomeAluno);
    $ContBuscarNome = mysql_affected_rows($conexao);

    if ($ContBuscarNome > 0) {
        while ($ResultadoNome = mysql_fetch_assoc($resultBuscarNome)) {
            $NomeReturn = $ResultadoNome['nome_aluno'];
            ?>
            <input type="text" name="nome_aluno" required id="nome_aluno" class="form-control" value="<?php echo $NomeReturn ?>">
            <?php
        }
    } else {
        ?>
        <input type="text" name="nome_aluno" disabled id="nome_aluno" class="form-control" value="Digite um número de matrícula válido">
        <?php
    }
}

    