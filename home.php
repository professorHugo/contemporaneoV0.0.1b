<?php
//ob_start();
session_start();
include_once 'cnf/config.php';
if (isset($_GET['LogOff'])) {
    include_once './parts/extra/modal-log-off.php';
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="0;index.php">
    <?php
} else if (isset($_SESSION['Login'])) {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="author" content="">
            <meta name="description" content="">
            <meta rel="icon" href="img/favicon.ico">
            <title>Contemporâneo: Administração do Sistema</title>
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
        </head>
        <body>
            <header class="content-fluid bg-primary" style="min-height:72px">
                <?php include_once 'parts/menu.php'; ?>
                <div class="pull-right col-md-3" style="min-height:72px">
                    <?php echo $_SESSION['Login']['nome'] ?>
                </div>
            </header>
            <div id="background">
                <section class="col-md-12" id="base">
                    <?php
                    if (isset($_GET['acesso'])) {
                        $acesso = $_GET['acesso'];

                        switch ($acesso) {
                            case $acesso: include_once 'pages/' . $acesso . '.php';
                                break;
                            default : include_once 'pages/Home.php';
                        }
                    } else {
                        include_once 'pages/Home.php';
                    }
                    ?>
                </section>
            </div>
        </body>
    </html>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="0;index.php">
    <?php
}