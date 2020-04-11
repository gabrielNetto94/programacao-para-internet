<?php

$name = $_POST['name'];
$numberGuests = $_POST['number-guests'];
$dessert = $_POST['dessert'];

$valueBuffet = 22.90;

$budgetValue = $numberGuests * $valueBuffet; //calculo comida
$valueGuests = $budgetValue;

if ($dessert == 'yes') {
    $txDessert = $budgetValue * 0.1;
    $budgetValue = $budgetValue * 1.1;
}

$numberWaiter = $numberGuests / 15;
$numberWaiter = ceil($numberWaiter);

$totalValueWaiter = $numberWaiter * 250;

$budgetValue = $budgetValue +  $totalValueWaiter;

$fileName = "client_budgets/" . $name . ".txt";

$file = fopen($fileName, "w");

fwrite($file, $name . "\n");
fwrite($file, $numberGuests . "\n");
fwrite($file, $valueBuffet . "\n");
fwrite($file, $valueGuests . "\n");
if ($dessert == 'yes') {
    fwrite($file, $txDessert . "\n");
} else {
    fwrite($file, "null\n");
}
fwrite($file, $numberWaiter . "\n");
fwrite($file, $totalValueWaiter . "\n");
fwrite($file, $budgetValue);

fclose($file);

?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./register_guests.css">
    <title>Orçamento</title>
</head>

<body>
    <fieldset>
        <h1>Netto's Buffet</h1>
        <img src="./images/logo.png" alt="" id="logo" width="120" height="120">
        <h4>Nome do Cliente: <?php echo $name ?></h4>
        <h4>Número de convidados: <?php echo $numberGuests ?></h4>
        <h4>Valor por convidado: <?php echo "R$ " . $valueBuffet ?> </h4>
        <h4>Valor total dos convidados: <?php echo "R$ " . $valueGuests ?> </h4>
        <?php if ($dessert == 'yes') {
            echo "<h4>Taxa de sobremesa: R$ $txDessert</h4>";
        } ?>
        <h4>Quantidade de garçons: <?php echo $numberWaiter ?></h4>
        <h4>Taxa de garçons: <?php echo "R$ " . $totalValueWaiter ?> </h4>
        <h4>Valor do orçamento: <?php echo "R$ " . $budgetValue ?></h4>
    </fieldset>
    <a href="../index.html"><button>Menu Principal</button></a>

</body>

</html>