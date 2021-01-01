<?php
	include_once 'header.php';
?>

	<section class="sign-form">
		<h2>Sign Up</h2>
		<form action="includes/signup.inc.php" method="post" >
			<input type="text" name="name" placeholder="Fullname">
			<br>
			<input type="text" name="email" placeholder="Email">
			<br>
			<input type="text" name="uid" placeholder="Username">
			<br>
			<input type="password" name="pwd" placeholder="Password">
			<br>
			<input type="password" name="pwqrepeat" placeholder="Re-type Password">
			<br>
			<button type="submit" name="submit">Sign Up</button>
		</form>

		<?php
			if (isset($_GET["error"])) {
				if ($_GET['error'] == "emptyinput") {
					echo "Fill in all feilds";
				}
				elseif ($_GET['error'] == "invalidUid") {
					echo "Choose a proper username";
				}
				elseif ($_GET['error'] == "passwordsdontmatch") {
					echo "Passwords doesn't match";
				}
				elseif ($_GET['error'] == "invalidEmail") {
					echo "Choose a proper email";
				}
				elseif ($_GET['error'] == "stmtfailed") {
					echo "Something went wrong please try again";
				}
				elseif ($_GET['error'] == "usernametaken") {
					echo "Username already taken";
				}
				elseif ($_GET['error'] == "none") {
					echo "You have sign in successfully!";
				}
			}	
		 ?>


	</section>





<?php
	include_once 'footer.php';
?>
