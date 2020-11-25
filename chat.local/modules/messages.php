<ul>
	<?php 	
		if(isset($_GET["user"]) || isset($otpravleno_polzovatel_id)) {
			$user_id = null;

			if(isset($_GET["user"])) {
				$user_id = $_GET["user"];
			}else{
				$user_id = $otpravleno_polzovatel_id;
			}

		$sql = "SELECT * FROM messages " . 
		" WHERE (user_id=" . $user_id .
			" AND user_id_2=" . $polzovatel_id . ") " .
			" OR (user_id=" . $polzovatel_id . " AND user_id_2=" . $user_id . ")";
		$result = mysqli_query($connect, $sql);	

		$col_soobsheniy = mysqli_num_rows($result);

		$i = 0;
		while($i < $col_soobsheniy) {
			
					$sms = mysqli_fetch_assoc($result);
					?>
					<li>	
						<div class="avatar">
									<img src="images/user.png">
								</div>
						<?php
							$sql = "SELECT name FROM polzovateli WHERE id=" . $sms["user_id_2"];
							$polzovatel = mysqli_query($connect, $sql);

							$polzovatel = mysqli_fetch_assoc($polzovatel);
							?>
						
					
						<h2><?php echo $polzovatel["name"];?></h2>
						<p><?php echo $sms["text"]; ?></p>
						<div class="time"><?php echo $sms["time"]; ?></div>
						



				</li>				
				<?php
				$i++;
			
				}
			
				}
?>
</ul>