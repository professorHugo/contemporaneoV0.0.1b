<div class="panel-heading">
        <h3 class="panel-title">Faça Login para Administração</h3>
</div>
<div class="panel-body">
        <form role="form" action="" method="post">
                <fieldset>
                        <div class="form-group">
                                <input class="form-control" placeholder="Login" name="login" type="text" autofocus value="<?php if (isset($acesso['login'])):echo $acesso['login'];
endif; ?>">
                        </div>
                        <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="senha" type="password" value="<?php if (isset($acesso['login'])):echo $acesso['senha'];
endif; ?>">
                        </div>
                        <div class="checkbox">
                                <label>
                                        <input name="lembrar" type="checkbox" value="1" <?php if (isset($acesso['lembrar'])):echo 'checked="checked"';
endif; ?> >Lembrar de mim
                                </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" class="btn btn-lg btn-success btn-block submitLogin" name="submitLogin"></button>
                </fieldset>
        </form>
</div>