<!DOCTYPE html>
<?php
require './cnf/config.php';

ob_start();
session_start();

if (isset($_SESSION['Login'])) {
    #Se houver Sessão do usuário
    include_once 'parts/extra/modal-logado.php';
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta rel="icon" href="img/favicon.ico">
        <title>Contemporâneo: Administração do Sistema V0.0.1b</title>
        <!-- CORE JQUERY-->
        <script src="js/jquery.min.js"></script>
        <!-- CORE BS CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- CORE JS BOOTSTRAP-->
        <script src="js/bootstrap.min.js"></script>
        <!-- CORE JS ie10 viewport bug w8-->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/style-default.css">
        <link rel="stylesheet" href="css/menu.css">
        <script src="js/menu/menu.js"></script>
        <Script src="js/fotos/ajax.js"></script>
    </head>
    <body class="bg-info">
        <?php
        if (isset($_GET['Login'])) {
            /**
             * $usuarioLogado: Array com login e senha digitados
             */
            $usuarioLogado['login'] = $_POST['login'];
            $usuarioLogado['senha'] = $_POST['senha'];

            if (isset($_POST['lembrar'])) {
                //Verificar se existe a marcação para lembrar Login
                $remember = $_POST['lembrar'];
            }
            if (empty($_POST['login'])) {
                //Se não digitar o Login
                include 'parts/extra/modal-usuario-vazio.php';
            } else if (empty($_POST['senha'])) {
                //Caso Digite o Login, mas a senha ficou em branco
                include 'parts/extra/modal-senha-em-branco.php';
            } else {
                //Login e senha digitados, armazenar em MD5 para validação no banco de dados
                $usuarioMD5 = md5($usuarioLogado['login']);
                $senhaMD5 = md5($usuarioLogado['senha']);
                //Função para Ler o conteúdo da tabela usuários no banco de dados
                $buscarUsuarios = read("usuarios", "WHERE usuario_md5 = '$usuarioMD5'");

                if ($buscarUsuarios) {
                    #Achando o usuário, criar um array para percorrer os dados na tabela
                    foreach ($buscarUsuarios as $usuarioEncontrado)
                        ;

                    if ($usuarioEncontrado['usuario_md5'] === $usuarioMD5 && $usuarioEncontrado['senha_md5'] === $senhaMD5) {
                        #Caso senha correta
                        /* Cookie
                         * 

                          if(isset($remember)){

                          }else{

                          }
                         */
                        #Criar a Sessão do usuário
                        $_SESSION['Login'] = $usuarioEncontrado;
                        ?>
                        <meta http-equiv="refresh" content="0;index.php">
                        <?php
                    } else {
                        #Caso senha incorreta
                        include_once 'parts/extra/modal-senha-incorreta.php';
                    }
                } else {
                    #Caso não encontre o usuário
                    include_once './parts/extra/modal-usuario-nao-existe.php';
                }
            }
        } else {
            ?>
            <section class="container-fluid" style="padding-top: 120px;">
                <div class="col-md-8 col-md-push-2">
                    <article class="col-xs-12 col-md-5" id="fotoBuscada">
                        <?php
                        if (isset($_SESSION['Login'])) {
                            ?>
                            <img src="<?php echo $_SESSION['Login']['foto'] ?>" class="img-responsive img-circle">
                            <?php
                        } else {
                            ?>
                            <img src="img/img1.png" class="img-responsive img-circle">
                            <?php
                        }
                        ?>
                    </article>
                    <article class="col-xs-12 col-md-7">
                        <form action="index.php?Login" method="post" style="padding-top: 50px">
                            <div class="col-md-12" style="background: #fff;padding-top: 10px;padding-bottom: 10px;border-radius: 10px">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="usuario">Login:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control"value="<?php
                                        if ($remember):echo $usuarioLogado['login'];
                                        endif;
                                        ?>" name="login" id="usuario" aria-describedby="inputGroupSuccess1Status" onblur="buscarFoto();">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="inputGroupSuccess1">Senha:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" name="senha" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                    </div>
                                </div>
                                <label for="lembrar"><input type="checkbox" id="lembrar" name="lembrar" value="1">Lembrar</label>
                                <button type="submit" class="btn btn-lg"><i class="glyphicon glyphicon-log-in"></i></button>
                            </div>
                        </form>
                    </article>
                </div>
            </section>
        </body>
    </html>
    <?php
}
ob_end_flush();
?>