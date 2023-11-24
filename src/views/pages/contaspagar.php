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

    <div class="conteiner_contas_pagar">

        <form class="conteinerData" action="<?= $base; ?>/contaspagar" method="post">
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao">
            <label for="valor">Valor:</label>
            <input type="number" id="valor" name="valor">
            <label for="vencimento">Vencimento:</label>
            <input type="date" id="vencimento" name="vencimento"><br>
            <input type="submit" value="Salvar">
        </form>

        <form class="conteinerData" action="<?= $base ?>/contaspagarShow" method="get">
            <label for="dataInicio">Início</label>
            <input type="date" req name="dataInicio" id="dataInicio">
            <label for="dataFinal">Final</label>
            <input type="date" name="dataFinal" id="dataFinal">
            <select name="tipo">
                <option value=""> </option>
                <option name="1" value="1">Pagas</option>
                <option name="0" value="0">Não pagas</option>
            </select>
            <input type="submit" value="Buscar">
        </form>

    </div>
    <div class="container_vendas">

        <table border="2" style="color: white; width: 100%;">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>valor</th>
                    <th>Vencimento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $dado) :
                    if ($dado['tipo'] == '1') :
                ?>
                        <tr>
                            <td style="background-color: #04E000;">
                                <?= $dado['descricao'] ?> </td>
                            <td style="background-color: #04E000;">
                                <?= $dado['valor'] ?></td>
                            <td style="background-color: #04E000;">
                                <?= $dado['vencimento'] ?></td>
                            <td style="background-color: #04E000;"><a href="">Pago</a></td>
                        </tr>
                    <?php elseif ($dado['tipo'] == '0') : ?>
                        <tr>
                            <td style="background-color: #DB180B;">
                                <?= $dado['descricao'] ?> </td>
                            <td style="background-color: #DB180B;">
                                <?= $dado['valor'] ?></td>
                            <td style="background-color: #DB180B;">
                                <?= $dado['vencimento'] ?></td>
                            <td style="background-color: #DB180B;"><a href="<?= $base; ?>/contaspagar/<?= $dado['id'] ?>/edit">Pago</a></td>
                        </tr>
                <?php
                    endif;
                endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="box">
        <?php 
        
        foreach($pesquisas as $pesquisa){
            var_dump($pesquisa);
        }
        
        
        ?>




    <script>
        /*
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
                    
            
        });*/
    </script>

</body>

</html>