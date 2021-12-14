var comunicacao; 

function buscarDados(url,codigoCep) 
{ 
    comunicacao = null; 
    // Procura por um objeto nativo (Mozilla/Safari) 
    if (window.XMLHttpRequest) 
    { 
        comunicacao = new XMLHttpRequest(); 
        comunicacao.onreadystatechange = tratarRetorno; 
        comunicacao.open("GET", url+'?codigoCep='+codigoCep, true); 
        comunicacao.send(null); 
    } 
    else if (window.ActiveXObject) // Procura por uma versao ActiveX (IE)
    {         
        comunicacao = new ActiveXObject("Microsoft.XMLHTTP"); 
        if (comunicacao) { 
            comunicacao.onreadystatechange = tratarRetorno; 
            comunicacao.open("GET", url+'?codigoCep='+codigoCep, true); 
            comunicacao.send(); 
        } 
    } 
} 

function tratarRetorno() 
{ 
    // apenas quando o estado for "completado" 
    if (comunicacao.readyState == 4) { 
        // apenas se o servidor retornar "OK" 
        if (comunicacao.status == 200) { 
            // procura pela div id="atualiza" e insere o conteudo recebido
            document.getElementById('atualiza').innerHTML = comunicacao.responseText; 
        } else { 
            alert("Houve um problema ao obter os dados:\n" + comunicacao.statusText); 
        } 
    } 
} 

function Atualiza(codigoCep) 
{ 
    buscarDados("consultarCep.php", codigoCep); 
} 
