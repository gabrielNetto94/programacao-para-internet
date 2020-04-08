<?php

    $name = $_POST['name'];
    $numberGuests = $_POST['number-guests'];
    $dessert = $_POST['dessert'];

    $valueBuffet = 22.90;

    $budgetValue = $numberGuests * $valueBuffet; //calculo comida
    $valueGuests = $budgetValue;

    if($dessert == 'yes'){
        $txDessert = $budgetValue * 0.1;
        $budgetValue = $budgetValue * 1.1;
        
    }

    $numberWaiter = $numberGuests / 15;
    
    $numberWaiter = ceil($numberWaiter);
    
    $totalValueWaiter = $numberWaiter * 250;
    
    $budgetValue = $budgetValue +  $totalValueWaiter;
    
    $fileName = "budgets/".$name.".txt";

    $file = fopen($fileName,"w");

    fwrite($file,$name."\n");
    fwrite($file,$numberGuests."\n");
    fwrite($file,$valueBuffet."\n");
    fwrite($file,$valueGuests."\n");
    if($dessert == 'yes'){
        fwrite($file,$txDessert."\n");
     }
    fwrite($file,$numberWaiter."\n");
    fwrite($file,$totalValueWaiter."\n");
    fwrite($file,$budgetValue."\n");

    fclose($file);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Orçamento</title>
    </head>
    
    <body>
        <h4>Nome do Cliente: <?php echo $name ?></h4>
        <h4>Número de convidados: <?php echo $numberGuests ?></h4>
        <h4>Valor por convidado: <?php echo "R$ ".$valueBuffet ?> </h4>
        <h4>Valor total por convidados: <?php echo "R$ ".$valueGuests ?> </h4>
        <?php if($dessert == 'yes'){
            echo "<h4>Taxa de sobremesa: R$ $txDessert</h4>";
         }?>
        <h4>Quantidade de garçons: <?php echo $numberWaiter ?></h4>
        <h4>Taxa de garçons: <?php echo "R$ ".$totalValueWaiter ?> </h4>
        <h4>Valor do orçamento: <?php echo "R$ ".$budgetValue ?></h4>

    </body>
</html>


No momento de exibir o resultado, o sistema deverá apresentar as informações em um layout de uma proposta comercial, 
contendo os dados da empresa (inventar informações fictícias, juntamente de uma imagem para a empresa), os dados do cliente,
bem como os valores da proposta (valor total por convidado, taxa de sobremesa, quantidade de garçons e taxa de garçons)