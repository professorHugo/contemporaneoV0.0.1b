<!-- Modal Logged in-->
<div class="modal fade in text-muted" id="modalLoggedIn" tabindex="1" role="dialog" aria-labelledby="myModalLabel" style="display: block;margin-top:15%">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">


                                <h4 class="modal-title" id="myModalLabel">Usuário Logado</h4>

                        </div>
                        <div class="modal-body">
                                <div>
                                        <img src="img/ajax-loader.gif"><br>
                                        Processando os dados encontrados...
                                        <p>Usuário conectado: <?php echo  $_SESSION['login']['usuario'] ?></p>
                                </div>
                                <meta http-equiv="refresh" content="1;home.php">
                        </div>
                </div>
        </div>
</div>