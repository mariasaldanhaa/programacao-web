let host = 'http://localhost/programacao-web/javascript/';
// -----
function buscarTexto(arquivo, callback) {
    let request = new XMLHttpRequest(); // permite criar situacoes assincronas
    request.open('get', host + arquivo);
    request.onload = function() {
        callback(request.response);
    }
    request.send();
}

function apresentarTexto(dados) {
    document.querySelector('h3').textContent = dados;
}

document.querySelector('button').addEventListener('click',
    () => {
        buscarTexto('data/dados1.txt', apresentarTexto);
    }
)