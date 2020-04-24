<?php

$username = $_POST['username'];
$password = $_POST['password'];


if (file_exists("users/".$username.".txt")) {

    $file = file("users/".$username.".txt");

    
    if ($username == trim($file[0]) && password_verify($password, trim($file[1]))) {
        
        session_start();
        $_SESSION['user'] = $username;
        setcookie("username",$username);
        setcookie("accessLevel", $file[2]);
        
        echo "<h1>Bem vindo!</h1>";
        header("Refresh:2; url=dashboard.php");
    } else {
        echo "<H1>Usuário ou senha incorreta</H1>";
        header("Refresh:2; url=auth.html");
    }
    
} else {
    echo "<h1>Usuário não cadastrado</h1>";
}

?>