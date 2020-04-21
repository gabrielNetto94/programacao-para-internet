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


//header('Refresh:2; Location: ./index.html');
header("Refresh:2; url=index.html");
echo "<h2>Dados cadastrados!</h2>";
?>