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
    <title>Delícias da Tia Sê</title>

</head>

<body>
    <?php $render('header'); ?>
    <form class="conteinerData" action="<?= $base ?>/read" method="get">
        <label for="dataInicio">Início</label>
        <input type="date" req name="dataInicio" id="dataInicio">
        <label for="dataFinal">Final</label>
        <input type="date" name="dataFinal" id="dataFinal">
        <input type="submit" value="Buscar">
    </form>
    <div class="container_vendas">

        <table id="minhaTabela" width="100%">
            <tr>
                <th>UN</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Horas</th>
                <th>Tipo de Venda</th>
            </tr>
            <?php
            if (isset($stores) && !empty($stores)) :
                foreach ($stores as $store) : ?>
                    <tr>
                        <td>
                            <?= $store['un'] ?>
                        </td>
                        <td class="produto">
                            <?= $store['produto'] ?>
                        </td>
                        <td id="preco">
                            <?= $store['preco'] ?>
                        </td>
                        <td>
                            <?= $store['data'] ?>
                        </td>
                        <td>
                            <?= $store['hora'] ?>
                        </td>
                        <td>
                            <?= $store['tipo_venda'] ?>
                        </td>
                    </tr>
            <?php
                    $valores[] = $store['preco'];
                    $soma = 0;
                    foreach ($valores as $valor) :
                        $soma += $valor;

                    endforeach;
                endforeach;

            endif; ?>

        </table>
        <div>
            <h5> Valor Total:

                <?php
                if (isset($soma) > 0) {
                    echo $soma;
                } else {
                    echo $soma = 0;
                }

                ?>
            </h5>
        </div>
    </div>

</body>

</html>