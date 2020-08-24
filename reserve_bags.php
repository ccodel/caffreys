<?php
$name = $_POST["name"];  
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];

$msg = $name . " would like to reserve the bags court on " . $date . " at " . $time . " for 30 minutes.\n\nIf you would like to reply to " . $name . ", please use the following email: " . $email . ".";

mail("caffreysportspub@gmail.com", "Bags reservation for " . $name, $msg);

// Give a success message
$_SESSION["success"] = true;

header("Location: index.html#bags");
exit();

?>
