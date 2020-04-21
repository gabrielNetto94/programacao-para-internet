<?php

$username = $_POST['username'];
$password = $_POST['password'];


if (file_exists("users/".$username.".txt")) {

    $file = file("users/".$username.".txt");

    if ($username == trim($file[0]) && $password == trim($file[1])) {
        
        session_start( );
        $_SESSION['user'] = $username;
        
        echo "<h1>Bem vindo!</h1>";
        header("Refresh:2; url=dashboard.html");
    } else {
        echo "<H1>Usuário ou senha incorreta</H1>";
        header("Refresh:2; url=auth.html");
    }
    //fclose($file);
} else {
    echo "<h1>Usuário não cadastrado</h1>";
}

?>