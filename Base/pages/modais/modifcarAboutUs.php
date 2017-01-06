<?php
#Dados para fazer update
if (isset($_POST['salvarAlteracoes'])) {
    $UpdateAboutUs['CategoriaEditar'] = $_POST['CategoriaEditar'];
    $UpdateAboutUs['idAboutUs'] = $_POST['idAboutUs'];
    $UpdateAboutUs['TituloConteudo'] = $_POST['TituloConteudo'];
    $UpdateAboutUs['DescricaoConteudo'] = $UpdateAboutUs['TituloConteudo'].'.png';
    $UpdateAboutUs['ConteudoNovo'] = $_POST['ConteudoNovo'];
    $UpdateAboutUs['usuarioUpdate'] = $_SESSION['login']['usuario'];
	
	$UploadNewFileAboutUs = $_FILES['DescricaoConteudo'];
	
	if ($resPaginas['titulo_conteudo'] == "FotoLoja" && $resPaginas['titulo_conteudo'] == "Secundarias"){
		include 'pages/ok/UploadModificarAboutUs.php';
	}else{
		#SQLupdate da tabela
		$SQLUpdateAboutUs = "UPDATE conteudo SET titulo_conteudo = '$UpdateAboutUs[TituloConteudo]', descricao_conteudo = '$UpdateAboutUs[DescricaoConteudo]',informacao_conteudo ='$UpdateAboutUs[ConteudoNovo]',ultimo_update = '$UpdateAboutUs[usuarioUpdate]' WHERE id = '$UpdateAboutUs[idAboutUs]'";
		mysql_query($SQLUpdateAboutUs);
	}
}