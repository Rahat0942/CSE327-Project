<?php
	include_once 'header.php';
?>

	<section class="signup-form">
		<h2>Log In</h2>
		<div class="signup-form-form">
		<form action="includes/login.inc.php" method="post" >

			<input type="text" name="uid" placeholder="Username/Email">
			<br>
			<input type="password" name="pwd" placeholder="Password">
			<br>
			<button type="submit" name="submit">Log In</button>
		</form>
	</div>
	</section>




<?php
	include_once 'footer.php';
?>
