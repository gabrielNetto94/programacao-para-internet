<?php

    $name = $_POST['name'];
    $numberGuests = $_POST['number-guests'];
    $dessert = $_POST['dessert'];

    $budgetValue = $numberGuests * 22.9; //calculo comida

    if($dessert == 'yes'){
        $budgetValue = $budgetValue * 1.1;
    }

    $numberWaiter = $numberGuests / 15;
    
    $numberWaiter = ceil($numberWaiter);
    //$numberWaiter = intval($numberWaiter);
    
    $totalValueWaiter = $numberWaiter * 250;
    
    $budgetValue = $budgetValue +  $totalValueWaiter;
    
    echo $numberGuests."\n";
    echo "PRATO X CONVIDADOS ".$budgetValue."\n";
    echo "Número de garçons: ".$numberWaiter."\n";
    echo "Valor Garçons: ".$totalValueWaiter."\n";
    echo "Valor do orçamento: ".$budgetValue."\n";

?>
