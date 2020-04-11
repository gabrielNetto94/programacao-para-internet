<?php
$name = $_GET['name'];

if (file_exists("client_budgets/" . $name . ".txt")) {
    $file = file("client_budgets/" . $name . ".txt");

?>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../frontend/style/show_budget.css"/>
        <title>Dados do Orçamento</title>

    </head>

    <body>
    <fieldset>
            <h4>Nome do cliente: <?php echo $file[0]; ?> </h4>
            <h4>Número de convidados: <?php echo $file[1]; ?> </h4>
            <h4>Valor cobrado por convidade: <?php echo $file[2]; ?> </h4>
            <h4>Valor total dos convidados: <?php echo $file[3]; ?> </h4>
            <?php if (trim($file[4]) != 'null') { ?>
                <h4>Taxa de sobremesa:<?php echo "R$" . $file[4]; ?></h4>
            <?php } ?>
            <h4>Quantidade de garçons: <?php echo $file[5]; ?></h4>
            <h4>Taxa de garçons: <?php echo "R$ " . $file[6]; ?> </h4>
            <h4>Valor total do orçamento: <?php echo "R$ " . $file[7]; ?></h4>
        </fieldset>
        <a href="../index.html"><button>Menu Principal</button></a>
    </body>

    </html>

<?php
} else {
    echo "<H4>Usuário não encontrado </H4>";
}
?>