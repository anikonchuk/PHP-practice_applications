<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if(3 > 10) {
	echo "Hello, my name is Andrew!";
} elseif(3 < 10) {
	echo "I love PHP!";
} else {
	echo "I love Udemy";
}

echo "<br />";

for ($counter = 1; $counter <= 10; $counter++) {
	echo $counter;
}

echo "<br />";

$number = 50;

switch($number) {
	case 45:
	echo "Hello";
	break;
	case 50:
	echo 50;
	break;
	case 59:
	echo "This isn't 50";
	break;
	case 92:
	echo "I'm 92";
	break;
	case 25:
	echo "My name is Andrew";
	break;
}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
