<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $accessLevel = $_POST['accessLevel'];

    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

    $fileName = "users/".$username.".txt";

    $file = fopen($fileName,"w");

    fwrite($file,$username."\n");
    fwrite($file,$hashed_password."\n");
    fwrite($file,$accessLevel);
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

        <a href="auth.html">
            <h4>Realizar Login</h4>
        </a>
</body>

</html>