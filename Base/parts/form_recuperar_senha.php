<!--Login de usuário-->
<div class="<?php echo $xs[10] . $push_xs[1] . $sm[10] . $push_sm[1] . $md[8] . $push_md[2] . $lg[6] . $push_lg[3] ?>rounded">
        <form action="" method="post">
                <div class="form-group">
                        <label for="userLogin" class="userLogin <?php echo $xs[3] . $sm[3] . $md[2] . $lg[2] ?>text-right"></label>
                        <div class="<?php echo $xs[9] . $sm[9] . $md[10] . $lg[10] ?>">
                                <input type="text" name="userLogin" id="userLogin" placeholder="Digite seu Login" class="form-control" value="<?php if (isset($login['userLogin'])):echo$login['userLogin'];
endif; ?>">
                        </div>
                </div>
                <div class="form-group">
                        <label for="senhaLogin" class="senhaLogin <?php echo $xs[3] . $sm[3] . $md[2] . $lg[2] ?>text-right"></label>
                        <div class="<?php echo $xs[9] . $sm[9] . $md[10] . $lg[10] ?>">
                                <input type="text" name="senhaLogin" id="senhaLogin"placeholder="Digite sua senha" class="form-control" value="<?php if (isset($login['senhaLogin'])):echo$login['senhaLogin'];
endif; ?>">
                        </div>
                </div>
                <div class="form-group text-cente box-space <?php echo$xs[10] . $push_xs[1] . $sm[10] . $push_sm[1] . $md[10] . $push_md[1] . $lg[10] . $push_lg[1] ?>">
                        <div class="<?php echo $xs[4] . $sm[4] . $md[4] . $lg[4] ?>">
                                <button type="submit" name="LoginSubmit" class="LoginSubmit btn btn-default"></button>
                        </div>
                        <div class="<?php echo $xs[4] . $sm[4] . $md[4] . $lg[4] ?>checkbox">
                                <label>
                                        <input type="checkbox" name="remember" value="1" <?php if (isset($login['remember'])):echo 'checked="checked"';
endif; ?> class="text-left"> Manter Conectado
                                </label>
                        </div>
                        <div class="<?php echo $xs[4] . $sm[4] . $md[4] . $lg[4] ?>">
                                <a href="index.php?remember=true" class="recuperar btn btn-default"></a>
                        </div>
                </div>
        </form>
</div>