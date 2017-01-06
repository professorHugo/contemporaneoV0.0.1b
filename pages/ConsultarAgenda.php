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
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Aulas do dia: <?php echo date("d/m/Y", strtotime($resBuscarAgenda['data'])) ?></h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        $QueryBuscarAulasDoDia = "SELECT * FROM agenda_aulas WHERE data = '$resBuscarAgenda[data]'";
                        $ExeQrBuscarAulasDoDia = mysql_query($QueryBuscarAulasDoDia);

                        if (mysql_num_rows($ExeQrBuscarAulasDoDia) > 0) {
                            while ($resAgendaDia = mysql_fetch_assoc($ExeQrBuscarAulasDoDia)) {
                                $horaEntrada = $resAgendaDia['entrada'];
                                $horaSaida = $resAgendaDia['saida'];
                                include 'pages/includes/switchHoraEntradaSaida.php';
                                ?>
                                <div class="col-md-4 table-bordered" style="margin-bottom:10px">
                                    Aluno: <?php echo ucfirst($resAgendaDia['sala']) ?><br>
                                    Aluno: <?php echo $resAgendaDia['nome_aluno'] ?><br>
                                    Matéria: <?php echo $resAgendaDia['materia'] ?><br>
                                    Professor: <?php echo $resAgendaDia['prof'] ?><br>
                                    Entrada: <?php echo $horaEntrada ?><br>
                                    Saída: <?php echo $horaSaida ?><br>
                                    Qtd Hora: <?php echo $resAgendaDia['qtd_hora'] ?><br>
                                    Valor: <?php echo $resAgendaDia['valor'] ?><br>
                                    Pagamento: <?php echo $resAgendaDia['pagamento'] ?><br>
                                    <a href="?acesso=ExibirEvento&Id=<?php echo $resAgendaDia['id']?>" style="color: #0088cc">Visualizar</a>
                                </div>
                                <?php
                            }
                        }
                        ?>
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
?>