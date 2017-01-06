/** * Função para criar um objeto XMLHTTPRequest */
function CriaRequest() {
    try {
        request = new XMLHttpRequest();
    } catch (IEAtual) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (IEAntigo) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (falha) {
                request = false;
            }
        }
    }
    if (!request)
        alert("Verifique sua versão do navegador!");
    else
        return request;
}
function returnGallery() {
    // Declaração de Variáveis
    var select_gallery = document.getElementById("categoriaFoto").value;
    var insert_gallery = document.getElementById("colecaoFoto");
    var xmlreq = CriaRequest();
    // Exibi a imagem de progresso
    insert_gallery.innerHTML = '<option style="background-image:url(../img/ajax-loader.gif)" id="loadingAjax" value="Loading" selected>Carregando...</option>';
    // Iniciar uma requisição
    xmlreq.open("GET", "pages/galeria/returnGallery.php?SelectType=" + select_gallery, true);
    // Atribui uma função para ser executada sempre que houver uma mudança de Dado
    xmlreq.onreadystatechange = function () {
        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4) 
        if (xmlreq.readyState == 4) {
            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                insert_gallery.innerHTML = xmlreq.responseText;
            } else {
                insert_gallery.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}