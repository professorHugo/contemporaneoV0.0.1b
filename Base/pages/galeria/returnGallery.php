<?php
#Versão com ajax
if (isset($_GET['SelectType'])) {
    include '../../cnf/config.php';
    if ($_GET['SelectType'] == "Feminino") {
        $QueryGetGallery = "SELECT * FROM categorias WHERE nome_cat = 'Feminino'";
    } else if($_GET['SelectType'] == "Masculino") {
        $QueryGetGallery = "SELECT * FROM categorias WHERE nome_cat = 'Masculino'";
    }else{
		$QueryGetGallery = "SELECT * FROM categorias WHERE nome_cat = 'Infantil'";
	}
    sleep(1);
    $ResultQueryGetGallery = mysql_query($QueryGetGallery);
    $ContQueryGetGallery = mysql_affected_rows($conexao);

    if ($ContQueryGetGallery > 0) {
        while ($ResQrGallery = mysql_fetch_assoc($ResultQueryGetGallery)) {
            $CollectionReturned = $ResQrGallery['colecao'];
            ?>

            <option value="<?php echo $CollectionReturned?>"><?php echo $CollectionReturned?></option>

            <?php
        }
    } else {
        echo 'Não Disponível, entre em contato para verificar';
    }
}else{
	$QueryGetGallery = "SELECT * FROM categorias WHERE nome_cat = 'Feminino'";
	sleep(1);
    $ResultQueryGetGallery = mysql_query($QueryGetGallery);
    $ContQueryGetGallery = mysql_affected_rows($conexao);

    if ($ContQueryGetGallery > 0) {
        while ($ResQrGallery = mysql_fetch_assoc($ResultQueryGetGallery)) {
            $CollectionReturned = $ResQrGallery['colecao'];
            ?>

            <option value="<?php echo $CollectionReturned?>"><?php echo $CollectionReturned?></option>

            <?php
        }
    } else {
        echo 'Não Disponível, entre em contato para verificar';
    }
}