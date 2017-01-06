<?php
#Versão com ajax
if (isset($_GET['SalaSelecionada'])) {
    include '../../cnf/config.php';

    $salaInformada = $_GET['SalaSelecionada'];

    session_start();
    $dataInformadaParaAula = $_SESSION['DATA_EXISTE'];
    //Visualizar DB do Mês
    $DbDiaAula = $dataInformadaParaAula;
    $verificarDBDiaAula = mysql_query("SHOW DATABASES LIKE '$DbDiaAula'");
    ?>

    <?php
    if (mysql_num_rows($verificarDBDiaAula) > 0) {
        $conexaoDbMesDia = mysql_connect(HOST, USER, PASS);
        mysql_select_db($DbDiaAula, $conexaoDbMesDia);
        $QueryBuscarHorarioEntrada = "SELECT * FROM $dataInformadaParaAula.$salaInformada WHERE status = 0";
        $ResBuscarHorarioEntrada = mysql_query($QueryBuscarHorarioEntrada);
        $ContBuscaHorarioEntrada = mysql_affected_rows($conexaoDbMesDia);
        if ($ContBuscaHorarioEntrada > 0) {
            while ($ResultadoHorarioEntrada = mysql_fetch_assoc($ResBuscarHorarioEntrada)) {
                $EntradaReturn = $ResultadoHorarioEntrada['entrada'];
                $EntradaReturnExibir = $ResultadoHorarioEntrada['exibir_entrada'];
                ?>
                <option value="<?php echo $EntradaReturn ?>"><?php echo $EntradaReturnExibir ?></option>
                <?php
            }
        }
    } else {
        $salaInformada = $_GET['SalaSelecionada'];
        $QueryBuscarHorarios = "SELECT * FROM horarios";

        $QueryBuscarHorarioEntrada = "SELECT * FROM $salaInformada WHERE status != 1";
//    sleep(1);
        $resultBuscarSalaPorData = mysql_query($QueryBuscarHorarioEntrada);
        $ContBuscarHorarioEntrada = mysql_affected_rows($conexao);
        if ($ContBuscarHorarioEntrada > 0) {
            while ($ResultadoHorarioEntrada = mysql_fetch_assoc($resultBuscarSalaPorData)) {
                $EntradaReturn = $ResultadoHorarioEntrada['entrada'];
                $EntradaReturnExibir = $ResultadoHorarioEntrada['exibir_entrada'];
                ?>
                <option value="<?php echo $EntradaReturn ?>"><?php echo $EntradaReturnExibir ?></option>
                <?php
            }
        }
    }
}

    