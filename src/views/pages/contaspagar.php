<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?= $base; ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/style.css">
    <title>Contas à pagar</title>

</head>


<body>
    <?php $render('header'); ?>

    <div id="container_contas">
        <button id="adicionarMaisInput">+</button><br>
        <div id="contas">
            <label for="nome">Nome:</label>
            <input type="text" id="nome">
            <label for="valor">Valor:</label>
            <input type="number" id="valor">
            <label for="vencendo">Vencendo:</label>
            <input type="date" id="vencendo"><br>
        </div>

    </div>
    <button id="salvarDados">Salvar</button>

    <div class="container_vendas">

    </div>
    <script>
        const listaItens = [];
        const adicionarMaisInput = document.querySelector('#adicionarMaisInput');
        const salvarDados = document.querySelector('#salvarDados');

            salvarDados.addEventListener('click', () => {
                const divs = document.querySelectorAll('#container_contas div');
                divs.forEach(div => {
                    const input = div.querySelectorAll('input');
                    const nome = input[0].value;
                    const valor = input[1].value;
                    const vencendo = input[2].value;
                    const itens = {
                        nome: nome,
                        valor: valor,
                        vencendo:vencendo
                        
                    }

                    listaItens.push(itens);
                    console.log(listaItens);
                })
            });

        adicionarMaisInput.addEventListener('click', () => {
                    const container = document.querySelector('#container_contas div');
                    const div = document.createElement('div');
                    container.insertAdjacentHTML('beforeend', `
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome">
                        <label for="valor">Valor:</label>
                        <input type="number" id="valor">
                        <label for="vencendo">Vencendo:</label>
                        <input type="date" id="vencendo"><br/>
                        `);
                    
            
        });
    </script>

</body>

</html>