<?php

$name = $_POST['name'];
$email = $_POST['email'];
$maritalStatus = $_POST['maritalStatus'];
$color = $_POST['color'];

setcookie("name",$name);
setcookie("email",$email);
setcookie("maritalStatus",$maritalStatus);
setcookie("color",$color);


header('Location: ./index.html');
?>