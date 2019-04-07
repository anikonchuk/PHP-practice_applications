<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	echo pow(3,4);
	echo "<br />";
	$my_string = "What's up?";
	echo strlen($my_string);
	echo "<br />";
	$my_array = [3, 5, 9, 4];
	echo min($my_array);

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
