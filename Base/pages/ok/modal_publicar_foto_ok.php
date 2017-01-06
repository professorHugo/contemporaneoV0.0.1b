<?php

if (isset($_POST['publicarFoto'])) {
    $fotoUpload['id'] = 0;
    $fotoUpload['categoriaFotoUp'] = $_POST['categoriaFoto'];
    $fotoUpload['colecaoFotoUp'] = $_POST['colecaoFoto'];
    $fotoUpload['caminhoFotoUp'] = 'img/categorias/' . $fotoUpload['colecaoFotoUp'];
    $fotoUpload['nomeFotoUp'] = base64_encode($_POST['nome_foto'] .' '. date('d-m-Y'));
    $fotoUpload['modeloFotoUp'] = $_POST['modelo_foto'];
    $fotoUpload['dataFotoUp'] = $_POST['data_foto'];
    $fotoUpload['usuario_responsavel'] = $_SESSION['login']['usuario'];
    $fotoUpload['dataUploadArquivo'] = date('d-m-Y');
    $fotoUpload['tagsFotoUp'] = $_POST['tags_foto'];

    $fotoUploadArq = $_FILES['arquivo_foto'];


    include 'pages/ok/uploadArquivoGaleria.php';
    #Buscar as Colunas da tabela no banco
    $ColunasDaTabela = readTabela('fotos');
    #Valores Das Colunas
    echo $ValoresDasColunas = "'" . implode("','", array_values($fotoUpload)) . "'";
    #Colunas da tabela
    #SQL para cadastrar as fotos no Banco de dados
    $SQLCadastrarFotos = cadastrarDados('fotos', $ColunasDaTabela, $ValoresDasColunas);
    $CadastradoItemBancoDados = mysql_query($SQLCadastrarFotos);
    if($CadastradoItemBancoDados){
        echo 'Foi';
    }else{
        echo 'Não Foi!';
    }
}