<?php

#Dados para fazer update
if (isset($_POST['salvarAlteracoes'])) {
    $UpdateConteudo['CategoriaEditar'] = $_POST['CategoriaEditar'];
    $UpdateConteudo['idUpdateConteudo'] = $_POST['id'];
    $UpdateConteudo['TituloNovo'] = $_POST['TituloConteudo'];
    $UpdateConteudo['DescricaoNovo'] = $_POST['DescricaoConteudo'];
    $UpdateConteudo['ConteudoNovo'] = $_POST['Conteudo'];
    $UpdateConteudo['usuarioUpdate'] = $_SESSION['login']['usuario'];

    $UploadNewFile = $_FILES['UploadNovo'];
    #Incluir UPLOAD
    include 'pages/ok/UploadModificarFotoConteudoHome.php';
}