

let listaDeCompras = [];
let total = 0;

function adicionarProduto(produto, preco) {
    listaDeCompras.push({ produto: produto, preco: preco });
    total += preco;
    atualizarLista();


}

function atualizarLista() {
    const lista = document.getElementById("lista-de-compras");
    const totalElement = document.getElementById("total");

    lista.innerHTML = "";
    listaDeCompras.forEach(item => {
        const listItem = document.createElement("li");
        listItem.textContent = `${item.produto} - R$ ${item.preco.toFixed(2)}`;
        lista.appendChild(listItem);
    });

    totalElement.textContent = `Total: R$ ${total.toFixed(2)}`;
}

function finalizarCompra() {
    if (listaDeCompras.length === 0) {
        alert("Seu carrinho está vazio. Adicione produtos antes de finalizar a compra.");
        return;
    }
    const trocoInput = prompt("Insira o Troco ou continue sem troco.");
    const trocoInserido = parseInt(trocoInput);
    const troco = trocoInserido - total;
    if (trocoInput == "") {
        
        dbSalvar();
        alert(`Compra finalizada!\nTotal: ${total.toFixed(2)}`);
        total = 0;
        listaDeCompras = [];
        atualizarLista();

    } else if (trocoInput > total) {
        dbSalvar();
        alert(`
        Compra finalizada!\n
        Total : R$ ${total.toFixed(2)}\n
        Troco: R$ ${troco.toFixed(2)}
        
        `);
        total = 0;
        listaDeCompras = [];
        atualizarLista();
        return;
    } else if (trocoInput === total || trocoInput < total) {

        return;
    }
    else {
        alert('Insira um valor de troco Valido!');
        return;
    }

    function dbSalvar() {
        
        const dataToSend = JSON.stringify(listaDeCompras);
        
        fetch('/salvar_dados', {
            method: 'POST',
            body: dataToSend,
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.text())
            .then(responseText => {
                
                alert(responseText); 
                listaDeCompras = []; 
                atualizarLista(); 
                console.log(responseText);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
}
