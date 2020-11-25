<?php
include 'configs/db.php';

if(isset($_POST["otpravka_sms"])){
	$sql = "INSERT INTO `messages`(`text`, `user_id`, `user_id_2`) VALUES ('" . $_POST["text"] . "', '" . $_POST["user_id"] . "', '" . $_POST["user_id_2"] . "')";
	mysqli_query($connect, $sql);
}

$otpravleno_polzovatel_id = $_POST["user_id"];
$polzovatel_id = $_POST["user_id_2"];

include 'modules/messages.php';
?>