let frutos = [];

// para incluir no vetor frutos[]
document.getElementById('btnIncluir').addEventListener('click',
    () => {
        let inputFruta = document.getElementById('txtFruta').value;
        if (inputFruta.trim() !== "") {
            frutos.push(inputFruta);
            document.getElementById('txtFruta').value = '';
            alert('Fruta incluída com sucesso!');
        } else {
            alert('Você deve digitar um texto válido!');
        }
        console.log(frutos);
    }
);

// para mostrar o vetor frutos[]
document.getElementById('btnMostrar').addEventListener('click',
    () => {
        let lista = document.querySelector('ul');
        lista.innerHTML = ''; // qualquer li que estiver criado, essa funcao apaga

        frutos.forEach(
            (fruto, index) => {
                let item = document.createElement('li');
                let cont = index++;
                item.innerHTML = cont + " é a fruta: " + fruto;
                lista.appendChild(item);
        });
    }
);