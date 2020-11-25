<?php
	include 'configs/nastroyki.php';
	$sql = "SELECT * FROM polzovateli WHERE id!=" . $polzovatel_id;
	$result = mysqli_query($connect, $sql);

	$col_polzovateley = mysqli_num_rows($result);


	$i=0;
	while($i < $col_polzovateley){
		$polzovatel = mysqli_fetch_assoc($result)
		?>
	<li>
		<div class="avatar">
		<img src="images/user.png">
		</div>
		<h2><?php echo $polzovatel["name"] ?></h2>
		<?php
			$sql = "SELECT * FROM friends  WHERE user_1=" . $polzovatel["id"] . " AND user_2=" . $polzovatel_id . " OR user_2=" . $polzovatel["id"] . " AND user_1=" . $polzovatel_id . "";

			$friendsResult = mysqli_query($connect, $sql);
			
			$col_friends = mysqli_num_rows($friendsResult);
			if($col_friends > 0){?>
				<a data-sylka="http://chat.local/delete_friend.php?user_id=<?php echo $polzovatel["id"];?>" onclick="delet(this)">Удалить из друзей -</a>
				<?php
			}else{
		?>
		<div data-ssylka="http://chat.local/add_friend.php?user_id=<?php echo $polzovatel["id"];?>" onclick="add(this)">Добавить в друзья +</div>
		<?php
		}
		?>
	</li>	

		<?php
		$i++;
	}
?>