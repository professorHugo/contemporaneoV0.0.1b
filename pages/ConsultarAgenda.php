<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
<link href="css/css-calendar/responsive-calendar.css" rel="stylesheet">
<script src="js/js-calendar/responsive-calendar.js"></script>
<div class="container col-md-10 col-md-push-1">
    <!-- Responsive calendar - START -->
    <div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div>
        <h4 style="text-align:center"><span><a href="?acesso=AgendarHorario" style="color:#008CBA;">Cadastrar</a></span></h4>
        <hr>
        <div class="day-headers">
            <div class="day header">Dom</div>
            <div class="day header">Seg</div>
            <div class="day header">Ter</div>
            <div class="day header">Qua</div>
            <div class="day header">Qui</div>
            <div class="day header">Sex</div>
            <div class="day header">Sáb</div>
        </div>
        <div class="days" data-group="days">

        </div>
    </div>
    <!-- Responsive calendar - END -->
</div>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $(document).ready(function () {
    $(".responsive-calendar").responsiveCalendar({
    time: '<?php echo date("Y-m") ?>',
            events: {
            //Sintaxe para retornar dados: "2016-12-24": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},

            //"2016-12-24": {"number": 1, "url": "responsive-slider"},
<?php
$conexao = mysql_connect("localhost", "root", "");
mysql_select_db("contemporaneo");

$QueryBuscarAgenda = "SELECT * FROM agenda_aulas";
$exeQrBuscarAgenda = mysql_query($QueryBuscarAgenda);

if (mysql_num_rows($exeQrBuscarAgenda) > 0) {
    while ($resBuscarAgenda = mysql_fetch_assoc($exeQrBuscarAgenda)) {
        $QueryAgendaDia = "SELECT * FROM agenda_aulas WHERE data = '$resBuscarAgenda[data]'";
        $ExeQrAgendaDia = mysql_query($QueryAgendaDia);
        $totalRegistros = mysql_num_rows($ExeQrAgendaDia);
        for ($iRegistros = 1; $iRegistros <= $totalRegistros; $iRegistros++) {
            ?>
                        "<?php echo $resBuscarAgenda['data'] ?>": {"number": "<i data-toggle='modal' data-target='#modal<?php echo $resBuscarAgenda['data'] ?>' class='btn btn-sm' data-toggle='tooltip' data-placement='top' alt='Ver tudo' title='Ver tudo'><?php echo $iRegistros ?></i>", "event": "?evento=1"},
            <?php
        }
    }
}
?>
            }
    });
    }
    );
</script>
<?php
$conexao = mysql_connect("localhost", "root", "");
mysql_select_db("contemporaneo");

$QueryBuscarAgenda = "SELECT * FROM agenda_aulas";
$exeQrBuscarAgenda = mysql_query($QueryBuscarAgenda);

if (mysql_num_rows($exeQrBuscarAgenda) > 0) {
    while ($resBuscarAgenda = mysql_fetch_assoc($exeQrBuscarAgenda)) {
        ?>
        <div class="modal fade" id="modal<?php echo $resBuscarAgenda['data'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document" style="width:95%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Aulas do dia: <?php echo date("d/m/Y", strtotime($resBuscarAgenda['data'])) ?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-1" style="padding:0">
                            <h4>Horários</h4>
                            <?php
                            $ExeSQLBuscarHorarios = mysql_query("SELECT * FROM sala1");
                            while ($ReturnHorarios = mysql_fetch_assoc($ExeSQLBuscarHorarios)) {
                                ?>
                                <div class="col-md-12" style="border:0.5px solid #ddd">
                                    <?php echo $ReturnHorarios['exibir_entrada'] ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-11">
                            <?php
                            for ($contSala = 1; $contSala <= 6; $contSala++) {
                                $nomeDaSala = "sala" . $contSala;
                                ?>
                                <div class="col-md-2" style="padding-left:0;padding-right: 0;">
                                    <h4 class="text-center">Sala <?php echo $contSala ?></h4>
                                    <?php
                                    $ExeQrBuscarAulasAgendadas = mysql_query("SELECT * FROM agenda_aulas WHERE data = '$resBuscarAgenda[data]' AND sala = '$nomeDaSala' ORDER BY entrada");

                                    if (mysql_num_rows($ExeQrBuscarAulasAgendadas) > 0) {
                                        $ExeSQLOrdenarEntrada = mysql_query("SELECT * FROM agenda_aulas WHERE sala = '$nomeDaSala' ORDER BY sala");
                                        ?>
                                        <?php
                                        while ($resAgendaDia = mysql_fetch_assoc($ExeSQLOrdenarEntrada)) {
                                            $horarioEntrada = $resAgendaDia['entrada'];
                                            $horarioSaida = $resAgendaDia['saida'];
                                            $qtdHorario = $resAgendaDia['qtd_hora'];
                                            $alturaCelula = $qtdHorario * 21;
                                            $CorSala = $resAgendaDia['sala'];
                                            $salaDeAulaAgendada = $resAgendaDia['sala'];
                                            switch ($CorSala) {
                                                case "sala1": $Style = "background-color:rgb(242,128,0);color:rgb(255,255,255)";
                                                    break;
                                                case "sala2": $Style = "background-color:rgb(68,157,9);color:rgb(255,255,255)";
                                                    break;
                                                case "sala3": $Style = "background-color:rgb(22,143,77);color:rgb(255,255,255)";
                                                    break;
                                                case "sala4": $Style = "background-color:rgb(105,14,28);color:rgb(255,255,255)";
                                                    break;
                                                case "sala5": $Style = "background-color:rgb(21,104,145);color:rgb(255,255,255)";
                                                    break;
                                                case "sala6": $Style = "background-color:rgb(22,16,106);color:rgb(255,255,255)";
                                                    break;
                                            }
                                            include 'pages/includes/switchHoraEntradaSaida.php';
                                            switch ($qtdHorario) {
                                                case 0.5: $Height = "height:22px;";
                                                    break;
                                                case 1: $Height = "height:44px;padding-top:10px!important;";
                                                    break;
                                                case 1.5: $Height = "height:66px;padding-top:20px!important;";
                                                    break;
                                                case 2: $Height = "height:88px;padding-top:30px!important;";
                                                    break;
                                                case 2.5: $Height = "height:110px;padding-top:40px!important;";
                                                    break;
                                                case 3: $Height = "height:110px;padding-top:50px!important;";
                                                    break;
                                            }
                                            ?>
                                            <div class="col-md-12" style="<?php echo $Style . ";" . $Height ?>border-bottom:0.5px solid #ddd">
                                                <?php echo lmWord($resAgendaDia['nome_aluno'], 19)?>
                                                <a href="?acesso=ExibirEvento&Id=<?php echo $resAgendaDia['id']?>" title="<?php echo $resAgendaDia['materia']?>">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}