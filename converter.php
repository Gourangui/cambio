<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <?php 
        $cotacao = 5.17;
        $real = $_GET['din'];
        $dolar = $real / $cotacao ;

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrao, $dolar, "USD");
    ?>
</body>
</html>