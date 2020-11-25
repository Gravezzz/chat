<?php


include "configs/db.php";

if(isset($_POST["email"]) && isset($_POST["password"])
&& $_POST["email"] != "" && $_POST["password"] != "") {
	
	$sql = "SELECT * FROM `polzovateli` WHERE `email` LIKE '" . $_POST["email"] . "' AND `password` LIKE '" . $_POST["password"] ."'";


	$result = mysqli_query($connect, $sql);


	$col_polzovateley = mysqli_num_rows($result);

	if($col_polzovateley == 1){
		$polzovatel = mysqli_fetch_assoc($result);
		setcookie("user_id", $polzovatel["id"], time() + 100);

		header("Location: /");
	}else{
		echo "<h2>Логин или пароль введены неверно!</h2>";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include 'chasty_site/shapka.php'
?>


	<div id="content">
		<h2>Авторизация</h2>

	<form action="login.php" method="POST">
		
		<p>

			Введите свой емайл:<br/>
			<input type="text" name="email">
		</p>

		<p>
			
			Введите свой пароль:<br/>
			<input type="password" name="password">
		</p>

		<p>
			<button type="submit">Войти</button>
		</p>
	</form>
	<a href="register.php">Регистрация</a>
</div>
</body>
</html>