<?php
require_once'cnf/config.php';
session_start();
if (isset($_SESSION['login'])) {
    include_once 'parts/modal_usuario_logado.php';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Painel Administrativo de conteúdo para personalização de PORTAL gerenciável">
        <meta name="author" content="Agência Next 2 You - Desenvolvido por Hugo Christian Pereira Gomes">
        <title>CONTEMPORÂNEO - Painel Administrativo</title>
        <!-- Bootstrap Core CSS -->
        <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src="components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="components/metisMenu/dist/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>
        <!--CSS PERSONALIZAÇÃO E MOBILE-->
        <link rel="stylesheet" href="css/style.css" media="all">
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <img src="" alt="" title="">
                        <?php
                        if (isset($_POST['submitLogin'])) {
                            $acesso['login'] = mysql_real_escape_string($_POST['login']);
                            $acesso['senha'] = mysql_real_escape_string($_POST['senha']);

                            if (isset($_POST['lembrar'])) {
                                $acesso['lembrar'] = $_POST['lembrar'];
                            }
                            if (empty($acesso['login'])) {
                                #Modal de usuário em branco
                                include_once 'parts/modal_usuario_vazio.php';
                            } else if (empty($acesso['senha'])) {
                                #Modal de senha em branco
                                include_once 'parts/modal_senha_em_branco.php';
                            } else {
                                #Todos os dados corretamente preenchidos, armazenar o login em md5
                                $md5Usuario = md5($acesso['login']);
                                $md5Senha = md5($acesso['senha']);

                                $readLogin = read('usuarios', "WHERE usuario_md5 = '$md5Usuario'");

                                if ($readLogin) {
                                    #Armazenar em outra variavel com foreach o usuário acessado
                                    foreach ($readLogin as $usuarioLogado) {
                                        if ($usuarioLogado['usuario_md5'] === $md5Usuario && $usuarioLogado['senha_md5'] === $md5Senha) {
                                            if (isset($acesso['lembrar'])) {
                                                ##CRIAR OS COOKIES##
                                                $cookieSalvar = $acesso['login'] . '&' . $acesso['senha'];
                                                setcookie('login', $cookieSalvar, time() + 60 * 20, '/');
                                            } else {
                                                ##CRIAR OS COOKIES##
                                                //$cookieSalvar = $acesso['login'] . '&' . $acesso['senha'];
                                                setcookie('login', $cookieSalvar, time() - 3600, '/');
                                            }
                                            ##Criar Sessão do usuário##
                                            $_SESSION['login'] = $usuarioLogado;
                                            ?>
                                            <meta http-equiv="refresh" content="0;index.php">
                                            <?php
                                        } else {
                                            #Senha Errada
                                            include_once 'parts/modal_senha_errada.php';
                                        }
                                    }
                                } else {
                                    #Usuário não existente
                                    include_once 'parts/modal_usuario_nao_existe.php';
                                }
                            }
                        } else if (!empty($_COOKIE['login'])) {
//                            #Fazer a inicialização do Cookie
//                            $cookie = $_COOKIE['login'];
//                            $cookie = explode('&', $cookie);
//                            $acesso['login'] = $cookie[0];
//                            $acesso['senha'] = $cookie[1];
//                            $acesso['lembrar'] = 1;
                            include_once 'parts/form_login.php';
                        } else if (isset($_GET['remember']) === 'true') {
                            include_once 'parts/form_recuperar_senha.php';
                        } else {
                            include_once 'parts/form_login.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>