<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Delícias da Tia Sê</title>

</head>

<body>
    <?php $render('header');?>

    <div class="container">
        <table>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
            <?php foreach($vendash as $vendas):?>
                <tr>
                    <td><?php echo $vendas['nome'] ?></td>
                    <td></td>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
    
</body>

</html>