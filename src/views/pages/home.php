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
    <?php $render('header');


    ?>

    <div class="container">
        <div class="lista">

            <div class="titulo_lista">
                <h2>VENDAS</h2>
            </div>

            <ul id="lista-de-compras"></ul>

        </div>
        <div>
            <p id="total">Total: R$ 0.00</p>
        </div>

        <div class="container_pagamento">
            <button onclick="finalizarCompra()">Finalizar
                A vista</button>
        </div>
        <div class="produtos">
            <?php
               
             
            /*$produtos = [
                "Cachorro quente" => 10.00,
                "Salgados" => 5.00,
                "Salgado assado" => 6.00,
                "Espetinho" => 8.00,
                "Trufa" => 3.00,
                "Bolo de pote" => 5.00,
                "Pão de mel" => 4.00,
                "Refrigerante" => 5.00,
                "Água" => 3.00,
                "Café" => 2.00,
                "Cappuccino" => 4.00,
                "Achocolatado" => 5.00,
                "Tridant" => 2.50
            ];
*/
            
            
              foreach ($produtos as $produto) {
                $valor = number_format($produto['valor'], 2);
                echo "<div class='produto'>
                            <button onclick='adicionarProduto(\"$produto[nome]\", $produto[valor])'>$produto[nome] - R$ $valor </button>
                          </div>";
            }
      
            ?>

        </div>

    </div>

    <script src="<?= $base; ?>/assets/js/script.js"></script>

</body>

</html>