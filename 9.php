<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php

	/*  Create a link saying Click Here, and set
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	if(isset($_GET['setme'])) {
		echo $_GET['setme'];
	}

	$name = "CookieName";
	$value = "Surprise! I'm a cookie!";
	$expiration = time() + (60*60*24*7);

	setcookie($name, $value, $expiration);

	session_start();

	$_SESSION['howdy'] = "Well Hello There!";

	if (isset($_SESSION['howdy'])) {
		echo "<br />" . $_SESSION['howdy'] . "<br />";
	}

	if (isset($_COOKIE['CookieName'])){
		echo $_COOKIE['CookieName'] . "<br />";
	}

	?>

	<a href="9.php?setme=14">CLICK HERE</a>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
