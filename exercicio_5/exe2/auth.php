<?php

$username = $_POST['username'];
$password = $_POST['password'];


//if (isset(file("users/".$username.".txt") != null)) {

    $file = file("users/".$username.".txt");

    echo $file[0];
    echo $file[1];

    if ($username == trim($file[0]) && $password == trim($file[1])) {
        echo "<h1>Bem vindo!</h1>";
        header("Refresh:2; url=dashboard.html");
    } else {
        echo "<H1>Usuário ou senha incorreta</H1>";
        header("Refresh:10; url=auth.html");
    }
    fclose($file);
//} else {
    echo "<h1>Usuário não cadastrado</h1>";
//}

?>