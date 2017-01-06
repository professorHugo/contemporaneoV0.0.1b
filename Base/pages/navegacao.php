<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">Painel Administrativo v0.1</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                <em>01-07-2016</em>
                            </span>
                        </div>
                        <div>Conteúdo do Comentário resumido em ...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                <em>01-07-2016</em>
                            </span>
                        </div>
                        <div>Conteúdo do Comentário resumido em ...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                <em>01-07-2016</em>
                            </span>
                        </div>
                        <div>Conteúdo do Comentário resumido em ...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Ver todos os Comentários</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['login']['usuario'] ?></a>
                </li>
                <li><a href="#"><i class="fa fa-edit fa-fw"></i> Alterar Senha</a>
                </li>
                <li class="divider"></li>
                <li><a href="home.php?url=logout"><i class="glyphicon glyphicon-off"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="home.php?url=Tools"><i class="fa fa-dashboard fa-fw"></i> Estatísticas</a>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-book"></i> Banners <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="home.php?url=Banners"><i class="glyphicon glyphicon-file"> </i> &nbsp;Ver/Alterar Banners</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-book"></i> Conteúdo das Páginas <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="home.php?url=VerConteudo"><i class="glyphicon glyphicon-file"> </i> &nbsp;Ver Cadastrados</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-open"> </i> &nbsp;<del>Novo Conteúdo</del></a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-camera"></i> Galeria de Fotos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="home.php?url=VerFotos"><i class="glyphicon glyphicon-picture"> </i> &nbsp;Ver todas<span class="fa arrow"></span></a>
							<ul class="nav nav-third-level">
								<li>
								<?php 
									$SQLCATEGORIAS = "SELECT * FROM categorias";
									$EXECATEGORIAS = mysql_query($SQLCATEGORIAS);
									if(mysql_num_rows($EXECATEGORIAS)>0){
										while($categorias_buscadas = mysql_fetch_assoc($EXECATEGORIAS)){
											?>
											<a href="home.php?url=VerFotos&Categoria=<?php echo $categorias_buscadas['colecao'];?>"><?php echo $categorias_buscadas['colecao'];?></a>
											<?php
										}
									}
								?>
								</li>
							</ul>
                        </li>
                        <li>
                            <a href="home.php?url=PublicarFotos"><i class="glyphicon glyphicon-open"> </i> &nbsp;Publicar Fotos</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-comment"></i> Comentários<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="home.php?url=VerComentarios"><i class="glyphicon glyphicon-zoom-in"> </i> &nbsp; Ver todos</a>
                        </li>
                        <li>
                            <a href="home.php?url=VerComentarios&ModerarComentarios"><i class="glyphicon glyphicon-edit"> </i> &nbsp; Moderar</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>