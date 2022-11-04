<?php

if (empty($_get["username"]) == true || (empty($_get["notes"]))) {
    echo "<h1 style='text-align: center;color: red;margin-top: 50px;'>Enter Name and notes</h1>";
}else{

$na = $_GET["username"];
$no = $_GET["notes"];
$ge = $_GET["optradio"];
$ad = $_GET["sel1"];

// echo $h . " " . $notes . " " . $gender . " " . $address;

$conn = new mysqli("localhost", "root", "", "types");

$st = $conn->query("insert into req(namee,notes,gender,address) Values('$na','$no','$ge','$ad')");

if ($st > 0) {
    
    echo"DONE";

}else {
    echo "ERROR";
}
$conn->close();
}