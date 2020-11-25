<?php
include "configs/db.php";
include 'configs/nastroyki.php';


if($polzovatel_id == null){
	header("Location: /login.php");
}






?>
<!DOCTYPE html>
<html>
<head>
	<title>ВебЧат</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>




<?php
	include 'chasty_site/shapka.php'
?>



	

	<div id="content">
		
		<div id="users">
			
				<form action="index.php" method="GET" id="poisk">
				
				<input type="text" name="poisk-text">


				<button>
					<img src="images/SearchIcon.png">
				</button>
				</form>
			
		<?php
		include "modules/spisok.php";

		?>
		</div>

		<div id="soobshenia">
			<div id="spisok-soobsheniy">
				<?php 
				include "modules/messages.php"; 
				?>
			</div>
			<?php
			if(isset($_GET["user"])){
			?>
			<form id="form" action="http://chat.local/add_soobshenie.php" method="POST">
				<input type="hidden" name="user_id_2" value="<?php echo($_GET["user"]); ?>">
				<input type="hidden" name="user_id" value="<?php echo($_COOKIE["user_id"]); ?>">

				<textarea name="text"></textarea>
				<button type="submit" name="otpravka_sms"><img src="images/send.png"></button>
			</form>
			<?php
			}	
			?>
			
		</div>
	</div>
	<?php 
		include 'modules/contacts.php';
	?>

	<div class="LogModal" id="login-modal">
		
		<div class="close">X</div>
		<h2>Емайл</h2>
		
		<textarea></textarea>

		<h2>Пароль</h2>

		<textarea></textarea>

		<button>Войти</button>
		

	</div>

	<script src="script.js"></script>
</body>
</html>