<div id = "shapka">
	
	<div id = "logo">
		<img src = "/images/Mylogo.png"> <span><b>Веб</b><i>ЧАТ</i></span>
	</div>

	<div id = "menu">
		<a href="/">Главная</a>
		<a href="#" id="open-contact">Контакты</a>
		<a href="#" >Настройки</a>
		<?php 

		if(isset($_COOKIE["user_id"])){
			$sql = "SELECT * FROM polzovateli WHERE id=" . $_COOKIE["user_id"];
			$result = mysqli_query($connect, $sql);
			$polzovatel = mysqli_fetch_assoc($result);

			?>
				<a href="vihod.php"><?php echo $polzovatel["name"]; ?>  &#187; </a>
			<?php
		}else{
		?>
		<a href="login.php">Войти</a>
		
		<?php
		}
		
		?>

	</div>
</div>
