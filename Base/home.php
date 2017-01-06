<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php require_once 'cnf/config.php'; ?>
        <?php include_once 'parts/head/conteudo.php'; ?>
        <?php include_once 'css/classesBS.php'; ?>
    </head>

    <body>
        <?php
        session_start();
        if (!isset($_SESSION['login'])) {
            if (isset($_GET['url'])) {
                $url = $_GET['url'];
                if ($url = 'logout' || $url = 'logout') {
                    include_once 'parts/modal_desconectar.php';
                }
            }
        } else {
            ?>

            <div id="wrapper" style="margin-top: -70px">
                <?php include_once 'pages/navegacao.php'; ?>

                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Administração</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <?php
                        if (isset($_GET['url'])) {
                            $url = $_GET['url'];
                        } else {
                            $url = 'blank';
                        }

                        switch ($url) {
                            case 'blank':include_once 'pages/blank.php';
                                break;
                            case 'home':include 'pages/default.php';
                                break;
                            case 'Banners':include 'pages/Banners/VerAlterar.php';
                                break;
                            case 'cadConteudo':include 'pages/conteudo/cadastrar_conteudo.php';
                                break;
                            case 'VerConteudo':include 'pages/conteudo/VerConteudo.php';
                                break;
                            case 'PublicarFotos':include 'pages/galeria/PublicarFotos.php';
                                break;
                            case 'VerFotos':include 'pages/galeria/FotosPublicadas.php';
                                break;
                            case 'VerComentarios':include 'pages/comentarios/VerComentarios.php';
                                break;
                            case 'logout':include_once 'pages/logout.php';
                                break;

                            default:include 'pages/blank.php';
                        }
                        ?>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->
            <?php
        }
        ?>
    </body>

</html>