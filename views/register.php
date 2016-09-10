<?php
	
	echo'
	<form action="'.root.'controller/register_control.php" method="post">
	<input type="text" name=name>
	<input type="text" name=user>
	<input type="password" name="password">
	<select class="field-wrap" name="level">
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
	<input type="submit" name="submit">
	</form>
	';
?>