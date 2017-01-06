/** * Fun��o para criar um objeto XMLHTTPRequest */ 
function CriaRequest() {
	try{
		request = new XMLHttpRequest();
	}catch (IEAtual){
		try{ request = new ActiveXObject("Msxml2.XMLHTTP");
	}catch(IEAntigo){
		try{
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(falha){
			request = false;
		}
	} 
}
if (!request) alert("Verifique sua vers�o do navegador!"); else return request; }
function verificarTipoPessoa(){
	// Declara��o de Vari�veis
	var tipo_pessoa		=	document.getElementById("tipo_pessoa").value;
	var inserir_pagina	=	document.getElementById("inserir_pagina");
	var xmlreq = CriaRequest();
	// Exibi a imagem de progresso
	inserir_pagina.innerHTML = '<img src="img/ajax-loader.gif"/>';
	// Iniciar uma requisi��o
	xmlreq.open("GET", "parts/pagina_verificar_tipo.php?tipo_pessoa=" + tipo_pessoa, true);
	// Atribui uma fun��o para ser executada sempre que houver uma mudan�a de Dado
	xmlreq.onreadystatechange = function(){
		// Verifica se foi conclu�do com sucesso e a conex�o fechada (readyState=4) 
		if (xmlreq.readyState == 4) {
			// Verifica se o arquivo foi encontrado com sucesso
			if (xmlreq.status == 200) {
				inserir_pagina.innerHTML = xmlreq.responseText;
			}else{
				inserir_pagina.innerHTML = "Erro: " + xmlreq.statusText;
			}
		}
	};
	xmlreq.send(null);
}