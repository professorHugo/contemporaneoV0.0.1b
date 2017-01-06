<?php
if ($_GET['url'] == "VerComentarios&ModerarComentarios") {
    include 'pages/comentarios/ModerarComentarios.php';
}else{
?>
Comentários Criados pelo portal para moderar
<?php
echo $_GET['url'];
}