<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">


	<?php

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll
	*/

	class Dog {
		var $eye_color = "blue";
		var $nose = "boopable";
		var $fur_color = "brown";

		function ShowAll() {
			echo $this->eye_color . "<br />";
			echo $this->nose . "<br />";
			echo $this->fur_color;
		}
	}

	$pitbull = new Dog();

	$pitbull->ShowAll();
	

	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
