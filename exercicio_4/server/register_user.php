<?php

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $recreation = '';

    $fileName = "users/".$name.".txt";

    $file = fopen($fileName,"w");

    fwrite($file,$name."\n");
    fwrite($file,$lastName."\n");
    fwrite($file,$password."\n");
    fwrite($file,$gender."\n");
    fwrite($file,$age."\n");
    if(isset($_POST['recreation'])){
        $recreation = $_POST['recreation'];
        foreach ($recreation as &$item) {
            fwrite($file,$item.",");
        }
    }
    fclose($file);

    ?>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../frontend/menu.css">
        <title>Menu</title>

    </head>

<body>

    <h1>Dados Gravados com sucesso!</h1>

        <a href="../frontend/menu.html">
            <h4>Retornar ao menu principal</h4>
        </a>
</body>

</html>