<?php
#Versão com ajax
if (isset($_GET['DataSelecionada'])) {
    include '../../cnf/config.php';

    $dataInformada = $_GET['DataSelecionada'];
    $QueryBuscarSalaPorData = "SELECT * FROM salas";
    
    session_start();
    $_SESSION['DATA'] = $dataInformada;
//    sleep(1);
    $resultBuscarSalaPorData = mysql_query($QueryBuscarSalaPorData);
    $ContBuscarSalaPorData = mysql_affected_rows($conexao);
    ?>
    <option disabled selected>Escolha a sala</option>
    <?php
    if ($ContBuscarSalaPorData > 0) {
        while ($ResultadoSalaPorData = mysql_fetch_assoc($resultBuscarSalaPorData)) {
            $_SESSION['DATA_EXISTE'] = "n2yco435".$dataInformada;
            $SalaReturn = $ResultadoSalaPorData['nome_sala'];
            ?>
            <option value="<?php echo $SalaReturn ?>"><?php echo $SalaReturn ?></option>
            <?php
        }
    }
}

    