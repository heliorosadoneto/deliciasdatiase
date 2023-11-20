let listaDeCompras = [];
let total = 0;

function adicionarProduto(produto, preco) {
  const itemExistente = listaDeCompras.find((item) => item.produto === produto);
  if (itemExistente) {
    itemExistente.quantidade++;
  } else {
    listaDeCompras.push({ produto, preco, quantidade: 1 });
  }

  total += preco;
  atualizarLista();
}

function atualizarLista() {
  const lista = document.getElementById("lista-de-compras");
  const totalElement = document.getElementById("total");

  lista.innerHTML = "";
  listaDeCompras.forEach((item) => {
    const listItem = document.createElement("li");
    listItem.innerHTML = `
        <p> ${item.quantidade} X ${item.produto} - R$ ${item.preco.toFixed(
      2
    )}</p>
        <div class="botaoContainer">
        <button class="botaoUpDow" onclick="diminuirQuantidade('${
          item.produto
        }', ${item.preco})">-</button>
        <button class="botaoUpDow" onclick="aumentarQuantidade('${
          item.produto
        }', ${item.preco})">+</button>
        </div>
        `;
    lista.appendChild(listItem);
  });

  totalElement.textContent = `Total: R$ ${total.toFixed(2)}`;
}

function diminuirQuantidade(produto, preco) {
  const itemExistenteIndex = listaDeCompras.findIndex(
    (item) => item.produto === produto
  );
  if (itemExistenteIndex !== -1) {
    if (listaDeCompras[itemExistenteIndex].quantidade > 1) {
      listaDeCompras[itemExistenteIndex].quantidade--;
      total -= preco;
    } else {
      listaDeCompras.splice(itemExistenteIndex, 1);
      total -= preco;
    }
    atualizarLista();
  }
}
function aumentarQuantidade(produto, preco) {
  const itemExistente = listaDeCompras.find((item) => item.produto === produto);
  if (itemExistente) {
    itemExistente.quantidade++;
    total += preco;
    atualizarLista();
  }
}

function finalizarCompra() {
  if (listaDeCompras.length === 0) {
    alert(
      "Seu carrinho está vazio. Adicione produtos antes de finalizar a compra."
    );
    return;
  }

  const escolhaAiboo = prompt(
    "Digite '1' para aiboo ou pressione Enter para continuar sem troco:"
  );

  if (escolhaAiboo === "1") {
    alert("Aiboo selecionado!");
  }
  const trocoInput = prompt("Insira o Troco ou continue sem troco.");

  const trocoInserido = parseInt(trocoInput);
  const troco = trocoInserido - total;
  if (trocoInput == "" || trocoInput > 0) {
    if(escolhaAiboo === "1"){
      listaDeCompras.forEach(function(objeto){
        objeto.tipo_venda = 'Venda Aiboo';
      });
    }else if(escolhaAiboo == ""){
      listaDeCompras.forEach(function(objeto){
        objeto.tipo_venda = 'Venda';
      });
    }

    
    dbSalvar();
    alert(`Compra finalizada!\nTotal: ${total.toFixed(2)}
    
    `);
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
  } else {
    alert("Insira um valor de troco Valido!");
    return;
  }
}

async function dbSalvar() {
  const dataToSend = JSON.stringify(listaDeCompras);
  const url = "http://localhost/mvc/public/salvar";

  try {
    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: dataToSend,
    });

    if (!response.ok) {
      throw new Error(`Erro na resposta do servidor: ${response.status}`);
    }

    await response.text();
  } catch (error) {
    console.log("Erro ao enviar a requisição:", error);
  }
}
