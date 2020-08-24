<?php
$name = $_POST["name"];  
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];

$msg = $name . " would like to reserve the bags court on " . $date . " at " . $time . " for 30 minutes. If you would like to reply to " . $name . ", please use the following email: " . $email;

mail($email, "Bags reservation for " . $name, $msg);

header("Location: index.html");
exit();

?>
