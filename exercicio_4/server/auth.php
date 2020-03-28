<?php

if(isset($_POST['login']) && isset($_POST['password'])){

    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $file = file("auth.txt");
    fclose($file);

    if($password == trim($file[1]) && $login == trim($file[0])){
        header('Location: ../frontend/menu.html');
    }else{
        header('Location: ../frontend/auth.html');
    }

} 
?>