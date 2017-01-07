<style>
    .section-home-left{
        min-height: 300px;
        /*background: #017ebc;*/
        margin-top: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .section-home-right{
        min-height: 400px;
        /*background: #286090;*/
        margin-top: 10px;
    }
    .box-home{
        margin-top: 10px;
        width: 100%;
        min-height: 100px;
        padding-top: 10px;
        padding-bottom: 10px;
        background: #080808;
        color: #fff;
    }
    .block-itens{
        border-bottom: 1px solid #ddd;
        padding-top: 10px;
        padding-bottom: 20px;
    }
    .box-home .item-principal{
        font-size: 50px;
        text-align: center;
        float: left;
    }
    .text-center{
        font-size: 18px;
    }
    .block-itens a{
        transition: 0.2s;
    }
    .block-itens a:hover{
        color:#017ebc!important;
        transition:0.2s;
    }

</style>
<section class="section-home-left col-md-6">
    <div style="padding:2.5px 2.5px;">
        <img src="img/icons/room.png">Sala 1
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="10"
                 aria-valuemin="0" aria-valuemax="28" style="width:36%">
                <span>36% Ocupado</span>
            </div>
        </div>
    </div>
</section>
<section class="section-home-right col-md-6">
    <article class="box-home col-md-12">
        <div class="block-itens">
            <div class="col-md-3 item-principal">
                <span class="glyphicon glyphicon-book col-md-12"></span>
                <span class="col-md-12 text-center">Agenda</span>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=AgendarHorario" class="sub-menu" style="color: #fff;">
                    <span class="glyphicon glyphicon-edit"> Agendar</span>
                </a>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=AgendarCompartilhado" class="sub-menu" style="color:#fff">
                    <span class="glyphicon glyphicon-share"> Comp. Horário</span>
                </a>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=ConsultarAgenda" class="sub-menu" style="color: #fff;">
                    <span class="glyphicon glyphicon-search"> Consultar</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </article>

    <article class="box-home col-md-12">
        <div class="block-itens">
            <div class="col-md-3 item-principal">
                <span class="glyphicon glyphicon-user col-md-12"></span>
                <span class="col-md-12 text-center">Alunos</span>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=CadastrarAlunos" class="sub-menu" style="color:#fff">
                    <span class="glyphicon glyphicon-edit"> Cadastrar</span>
                </a>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=FinalizarCadastro" class="sub-menu" style="color:#fff">
                    <span class="glyphicon glyphicon-file"> Fin. Cadastro</span>
                </a>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=ConsultarAlunos" class="sub-menu" style="color:#fff">
                    <span class="glyphicon glyphicon-search"> Consultar</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </article>
    <article class="box-home col-md-12">
        <div class="block-itens">
            <div class="col-md-3 item-principal">
                <span class="glyphicon glyphicon-education col-md-12"></span>
                <span class="col-md-12 text-center">Professores</span>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=CadastrarProfessores" class="sub-menu" style="color:#fff">
                    <span class="glyphicon glyphicon-edit"> Cadastrar</span>
                </a>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=CadastrarMaterias" class="sub-menu" style="color:#fff">
                    <span class="glyphicon glyphicon-edit"> Cadastrar Disciplinas</span>
                </a>
            </div>
            <div class="col-md-3" style="padding-top:20px">
                <a href="?acesso=ConsultarProfessores" style="color:#fff">
                    <span class="glyphicon glyphicon-search"> Consultar</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </article>
</section>