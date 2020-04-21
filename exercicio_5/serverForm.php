<?php

$name = $_POST['name'];
$email = $_POST['email'];
$maritalStatus = $_POST['maritalStatus'];
$color = $_POST['color'];

echo $name."\n";
echo $email."\n";
echo $maritalStatus."\n";
echo $color."\n";

setcookie("name$name",$name);
setcookie("email$name",$email);
setcookie("maritalStatus$name",$maritalStatus);
setcookie("color$name",$color);


header('Location: ./index.html');
?>