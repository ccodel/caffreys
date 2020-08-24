<?php
$name = $_POST["name"];  
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];

$msg = $name . " would like to reserve the bags court on " . $date . " at " . $time;

mail("crcodel@gmail.com", "Bags reservation for " . $name, $msg);

header("Location: index.html");
exit();

?>
