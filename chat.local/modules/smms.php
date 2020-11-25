<?php
include "configs/db.php";
				if(isset($_GET["smss"])) {
					$sql = "INSERT INTO `messages` (`text`) VALUES ('" . $_POST["text"] . "')";
					var_dump($sql);
					if(mysqli_query($connect, $sql)) {
						echo "<h2>Пользователь добавлен</h2>";
						}else {
						echo "<h2>Произошла ошибка</h2>";
						}
				}

		
	 ?>