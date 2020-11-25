<?php

$sql = "SELECT * FROM polzovateli";

$result = mysqli_query($connect, $sql);


$col_polzovateley = mysqli_num_rows($result);



if(isset($_GET["poisk-text"])){
	$sql = "SELECT * FROM `polzovateli` WHERE `name` LIKE '%" . $_GET["poisk-text"] . "%'";
	$result = mysqli_query($connect, $sql);


	$col_polzovateley = mysqli_num_rows($result);
	?>
	<div id="spisok">
				
<ul>
			<?php
				$i = 0;
				if(isset($_COOKIE["user_id"])) {
					while($i < $col_polzovateley){
						$polzovatel = mysqli_fetch_assoc($result);
						if($_COOKIE["user_id"] != $polzovatel["id"]) {
						echo "<li>";
						echo "<a href='/index.php?user=" . $polzovatel["id"] . "'>";
							echo "<div class=\"avatar\">
									<img src='" . $polzovatel["photo"] ."'>
								</div>";
							echo "<h2>" . $polzovatel["name"] . "</h2>";
							echo "<p>HI</p>";
							echo "<div class=\"time\">09:10</div>";
					echo "</a>";
				echo "</li>";

				$i++;
				}else{
				$i++;
			}
		}
	}

				
		?>
			
	</ul>

</div>

<?php 
}else{
?>



<div id="spisok">
				
<ul>
			<?php
				$i = 0;
				if(isset($_COOKIE["user_id"])) {
					while($i < $col_polzovateley){
						$polzovatel = mysqli_fetch_assoc($result);
						if($_COOKIE["user_id"] != $polzovatel["id"]) {
						echo "<li>";
						echo "<a href='/index.php?user=" . $polzovatel["id"] . "'>";
							echo "<div class=\"avatar\">
									<img src='" . $polzovatel["photo"] ."'>
								</div>";
							echo "<h2>" . $polzovatel["name"] . "</h2>";
							echo "<p>HI</p>";
							echo "<div class=\"time\">09:10</div>";
					echo "</a>";
				echo "</li>";

				$i++;
				}else{
				$i++;
			}
		}
	}

				
		?>
			
	</ul>

</div>
<?php  
}?>