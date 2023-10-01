

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base;?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?= $base;?>/assets/css/style.css">
    <title>Delícias da Tia Sê</title>

</head>


<body>
<?php $render('header');
?>
    <div class="container">
        <div class="titulo_lista">
            <h2>Lista de Compras</h2>
        </div>
        <div class="lista">

            <ul id="lista-de-compras"></ul>

        </div>
        <div>
            <p id="total">Total: R$ 0.00</p>
            <button onclick="finalizarCompra()">Finalizar
                Compra</button>
        </div>
        <div class="produtos">
            <?php
            $produtos = [
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

            foreach ($produtos as $produto => $preco) {
                $valor = number_format($preco, 2);
                echo "<div class='produto'>
                            <button onclick='adicionarProduto(\"$produto\", $preco)'>$produto - R$ $valor </button>
                          </div>";
            }
            ?>
        </div>
    </div>
    <script src="<?= $base;?>/assets/js/script.js"></script>
    
</body>

</html>