<?php


if(isset($_POST['login']) && isset($_POST['password'])){

    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $fp = file("auth.txt");

    //echo gettype($fp[0])."\t".gettype($login); 

    if($password == $fp[1]){
        header('Location: ../frontend/register_user.html');
    }else{
        header('Location: ../frontend/auth.html');
    }

} 
?>