<?php
$string = $_GET['string'];

include("../database/database.php");

$database =  new Database();

$result = $database->filter($string);

while($row = mysqli_fetch_array($result)){
        echo $row['TITLE']."/".$row['AUTHOR']."/".$row['RELEASE_YEAR']."\n";
} 

?>