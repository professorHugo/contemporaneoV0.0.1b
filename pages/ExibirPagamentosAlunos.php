<section class="col-md-10 col-md-push-1">
    <form action="?acesso=ExibirPagamentosAlunos" method="post">
        <div class="form-group col-md-2" style="position:absolute;top:-50px;">
            <input type="number" name="matricula_aluno" placeholder="Matrícula Aluno" class="form-control" value="<?php
            if (isset($_POST['matricula_aluno'])):echo $_POST['matricula_aluno'];
            endif;
            ?>">
        </div>
        <div class="form-group col-md-6 col-md-push-2" style="position: absolute;top: -50px">
            <input type="text" name="nome_responsavel_pagamento" placeholder="Nome do Responsável pelo pagamento" class="form-control" value="<?php
            if (isset($_POST['nome_responsavel_pagamento'])):echo $_POST['nome_responsavel_pagamento'];
            endif;
            ?>">
        </div>
        <div class="form-group col-md-1 col-md-push-8" style="position: absolute;top: -50px">
            <button type="submit" name="buscar" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </div>
    </form>
</section>
<section class="col-md-12" style="padding-left: 0;padding-right: 0;margin-left: 0;margin-right: 0;">
    <table class="table table-bordered table-responsive table-striped text-center">
        <form action="?acesso=ExibirPagamentosAlunos" method="post">
            <tr>
                <td>Matrícula</td>
                <td>Resp Pagamento</td>
                <td>Aluno</td>
                <td>Data/Aula</td>
                <td>Prof</td>
                <td>Inicio</td>
                <td>Tempo</td>
                <td>Valor</td>
                <td>Pagamento</td>
                <td>Desconto</td>
            </tr>
            <?php
            if (isset($_POST['buscar'])) {
                if (isset($_POST['matricula_aluno'])) {
                    $BuscarPagamentos = $_POST['matricula_aluno'];
                    $ExeQrBuscarPagamentos = mysql_query("SELECT * FROM agenda_aulas WHERE matricula_aluno = $BuscarPagamentos");
                    if (mysql_num_rows($ExeQrBuscarPagamentos) > 0) {
                        while ($ResBuscarPagamentos = mysql_fetch_assoc($ExeQrBuscarPagamentos)) {
                            $ReturnPagamentos[matricula] = $ResBuscarPagamentos['matricula_aluno'];
                            $ReturnPagamentos[responsavel_pagamento] = $ResBuscarPagamentos['responsavel_pagamento'];
                            $ReturnPagamentos[nome_aluno] = $ResBuscarPagamentos['nome_aluno'];
                            $ReturnPagamentos[data] = $ResBuscarPagamentos['data'];
                            $ReturnPagamentos[prof] = $ResBuscarPagamentos['prof'];
                            $ReturnPagamentos[entrada] = $ResBuscarPagamentos['entrada'];
                            $ReturnPagamentos[qtd_hora] = $ResBuscarPagamentos['qtd_hora'];
                            $ReturnPagamentos[valor] = $ResBuscarPagamentos['valor'];
                            $ReturnPagamentos[pagamento] = $ResBuscarPagamentos['pagamento'];
                            $ReturnPagamentos[desconto] = $ResBuscarPagamentos['desconto'];
                            ?>
                            <tr>
                                <td><?php echo $ReturnPagamentos[matricula] ?></td>
                                <td><?php echo $ReturnPagamentos[responsavel_pagamento] ?></td>
                                <td><?php echo $ReturnPagamentos[nome_aluno] ?></td>
                                <td><?php echo $ReturnPagamentos[data] ?></td>
                                <td><?php echo $ReturnPagamentos[prof] ?></td>
                                <td><?php echo $ReturnPagamentos[entrada] ?></td>
                                <td><?php echo $ReturnPagamentos[qtd_hora] ?></td>
                                <td><?php echo $ReturnPagamentos[valor] ?></td>
                                <td><?php echo $ReturnPagamentos[pagamento] ?></td>
                                <td><?php echo $ReturnPagamentos[desconto] ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <script language="javascript">
                            alert("Número de matrícula inválido")
                            location.href = "?acesso=ExibirPagamentosAlunos";
                        </script>
                        <?php
                    }
                } else if (isset($_POST['nome_responsavel_pagamento'])) {
                    $BuscarPagamentos = $_POST['nome_responsavel_pagamento'];
                    $ExeQrBuscarPagamentos = mysql_query("SELECT * FROM agenda_aulas WHERE matricula_aluno = $BuscarPagamentos");
                    if (mysql_num_rows($ExeQrBuscarPagamentos) > 0) {
                        while ($ResBuscarPagamentos = mysql_fetch_assoc($ExeQrBuscarPagamentos)) {
                            $ReturnPagamentos[matricula] = $ResBuscarPagamentos['matricula_aluno'];
                            $ReturnPagamentos[responsavel_pagamento] = $ResBuscarPagamentos['responsavel_pagamento'];
                            $ReturnPagamentos[nome_aluno] = $ResBuscarPagamentos['nome_aluno'];
                            $ReturnPagamentos[data] = $ResBuscarPagamentos['data'];
                            $ReturnPagamentos[prof] = $ResBuscarPagamentos['prof'];
                            $ReturnPagamentos[entrada] = $ResBuscarPagamentos['entrada'];
                            $ReturnPagamentos[qtd_hora] = $ResBuscarPagamentos['qtd_hora'];
                            $ReturnPagamentos[valor] = $ResBuscarPagamentos['valor'];
                            $ReturnPagamentos[pagamento] = $ResBuscarPagamentos['pagamento'];
                            $ReturnPagamentos[desconto] = $ResBuscarPagamentos['desconto'];
                            ?>
                            <tr>
                                <td><?php echo $ReturnPagamentos[matricula] ?></td>
                                <td><?php echo $ReturnPagamentos[responsavel_pagamento] ?></td>
                                <td><?php echo $ReturnPagamentos[nome_aluno] ?></td>
                                <td><?php echo $ReturnPagamentos[data] ?></td>
                                <td><?php echo $ReturnPagamentos[prof] ?></td>
                                <td><?php echo $ReturnPagamentos[entrada] ?></td>
                                <td><?php echo $ReturnPagamentos[qtd_hora] ?></td>
                                <td><?php echo $ReturnPagamentos[valor] ?></td>
                                <td><?php echo $ReturnPagamentos[pagamento] ?></td>
                                <td><?php echo $ReturnPagamentos[desconto] ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<script>alert("Nome do Responsável pelo pagamento não encontrado!")</script>';
                    }
                }
            } else {
                $ExeQrBuscarPagamentos = mysql_query("SELECT * FROM agenda_aulas");
                while ($ResBuscarPagamentos = mysql_fetch_assoc($ExeQrBuscarPagamentos)) {
                    $ReturnPagamentos[id] = $ResBuscarPagamentos['id'];
                    $ReturnPagamentos[matricula] = $ResBuscarPagamentos['matricula_aluno'];
                    $ReturnPagamentos[responsavel_pagamento] = $ResBuscarPagamentos['responsavel_pagamento'];
                    $ReturnPagamentos[nome_aluno] = $ResBuscarPagamentos['nome_aluno'];
                    $ReturnPagamentos[data] = $ResBuscarPagamentos['data'];
                    $ReturnPagamentos[prof] = $ResBuscarPagamentos['prof'];
                    $ReturnPagamentos[entrada] = $ResBuscarPagamentos['entrada'];
                    $ReturnPagamentos[qtd_hora] = $ResBuscarPagamentos['qtd_hora'];
                    $ReturnPagamentos[valor] = $ResBuscarPagamentos['valor'];
                    $ReturnPagamentos[pagamento] = $ResBuscarPagamentos['pagamento'];
                    $ReturnPagamentos[desconto] = $ResBuscarPagamentos['desconto'];
                    ?>
                    <tr>
                        <td><?php echo $ReturnPagamentos[matricula] ?></td>
                        <td><?php echo $ReturnPagamentos[responsavel_pagamento] ?></td>
                        <td><?php echo $ReturnPagamentos[nome_aluno] ?></td>
                        <td><?php echo $ReturnPagamentos[data] ?></td>
                        <td><?php echo $ReturnPagamentos[prof] ?></td>
                        <td><?php echo $ReturnPagamentos[entrada] ?></td>
                        <td><?php echo $ReturnPagamentos[qtd_hora] ?></td>
                        <td><?php echo $ReturnPagamentos[valor] ?></td>
                        <td>
                            <?php echo $ReturnPagamentos[pagamento] ?>&nbsp;
                            <button type="button" name="alterar_pagamento" id="alterar_pagamento" data-toggle="modal" data-target="#AlterarPagamento" class="btn-adn" title="Alterar">
                                <span class="glyphicon glyphicon-transfer"></span>
                            </button>
                        </td>
                        <td><?php echo $ReturnPagamentos[desconto] ?> %</td>
                    </tr>
                    <?php
                    include 'parts/extra/ModalAlterarPagamento.php';
                }
            }
            ?>
        </form>
    </table>
</section>
<div id="modal_alterar_pagamento"></div>
<?php
