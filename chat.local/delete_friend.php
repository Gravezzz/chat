<?php
include 'configs/db.php';
include 'configs/nastroyki.php';

if(isset($_GET['user_id'])) {
$sql = "DELETE FROM `friends` WHERE user_1=" . $_GET["user_id"] . " AND user_2=" . $polzovatel_id . " OR user_2=" . $_GET["user_id"] . " AND user_1=" . $polzovatel_id . "";
	if(mysqli_query($connect, $sql)) {
		include "modules/friend_list.php";
	} else {
		echo "<h2>Ошибка</h2>";
	}
}


?>


