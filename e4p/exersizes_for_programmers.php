<?php 

	//name_generator

	$name = $_POST['first_name'];
	

	if ( isset($_POST['submitted']) ) {
		$name_message = "Hello " . $name . "! Nice to meet you.";
	}

 ?>


<style>
	.output {
		text-align: center;
	}

	form {
		display: flex;
		flex-direction: row;
		justify-content: center;
		
	}

	.form {
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.form h1 {
		text-align: center;
		
	}
	.form label {
		text-align: center;
		margin-bottom: 2vh;
	}
	 button[type='submit'] {
		margin: 1vh ;
	}
	input {
		margin-bottom: 2vh;
	}
	div {
		width: 400px;
		height: 400px;
	}
	.name_generator {
		border: 2px solid blue;
		
	}
	.name_generator h1 {
		color: blue;

	}
	
</style>

<form method="POST">
	<div class="form name_generator">
		<h1>First Name Generator</h1>
		<label>First Name</label>
		<input type="text" name="first_name">
		<button type="submit" name="submitted">Submit</button>
		<p class='output name_output'><?=$name_message?></p>

	</div>
</form>


<style>

	.quote_generator {
		border: 2px solid brown;
		
	}

	.quote_generator h1 {
		color: brown;
	}
</style>

<?php

	$quote = $_POST['quote'];
	$author = $_POST['author'];

	if ( isset($_POST['author_submitted']) ) {
		$quote_and_author = $author . " says,\"" . $quote . "\"";
	}



?>


<form method="POST">
	<div class="form quote_generator">
		<h1>Quote Generator</h1>
		<label>What is the quote?</label>
		<input type="text" name="quote">

		<label>Who said it?</label>
		<input type="text" name="author">
		<button type="submit" name="author_submitted">Wow... so original</button>
		<p class='output quote_output'><?=$quote_and_author?></p>

	</div>
</form>

<style>

	.mad_lib {
		border: 2px solid green;
		height: 600px;
		
		
	}

	.mad_lib h1 {
		color: green;
	}

</style>

<?php
	
	$noun = $_POST['noun'];
	$verb = $_POST['verb'];
	$adjective = $_POST['adjective'];
	$adverb = $_POST['adverb'];

	if ( isset($_POST['mad_lib_submitted']) ) {
		$mad_lib = "Do you " . $verb . " your " . $adjective . " " . $noun . " " . $adverb . "? Thats hilarious!";
	}

?>





<form method="POST">
	<div class='form mad_lib'>

		<h1>Mad Lib Generator</h1>

		<label>Enter a noun</label>
		<input type="text" name="noun">

		<label>Enter a verb</label>
		<input type="text" name="verb">

		<label>Enter an adjective</label>
		<input type="text" name="adjective">

		<label>Enter an adverb</label>
		<input type="text" name="adverb">

		<button type="submit" name="mad_lib_submitted">Make A Funny</button>
		<p class="output mad_lib_output"><?=$mad_lib?></p>

	</div>
</form>




<?php 

	$character_count_input = $_POST['character_count_input'];

	if ( isset($_POST['character_count_submitted']) ) {
		$character_count_output = $character_count_input . " has " . strlen($character_count_input) . " characters.";
	}



 ?>

<style type="text/css">
	
	.character_count {
		border: 2px solid orange;

		
		
	}

	.character_count h1 {
		color: orange;
	}
</style>




<form method="POST">
	<div class='form character_count'>
		<h1>Character Count</h1>

			<label>What is the input string?</label>
			<input type="text" name="character_count_input">

			<button type="submit" name="character_count_submitted">Cmon.. dont be shy</button>
			<p class="output character_count_output"><?=$character_count_output?></p>
	</div>
</form>


<style>
	.simple_math {
		border: 2px solid purple;
		
		
		
	}

	.simple_math h1 {
		color: purple;
	}
	.math_process_container {
		display: flex;
		flex-direction: column;
		height: 30px;
		
	}
	.math_process_child {
		width: 400px;
		height:  20px;
		flex-direction: row;
		
	}
</style>

<?php 
	
	$x = $_POST['number_input_one'];
	$y = $_POST['number_input_two'];
	$result = $_POST['simple_math_output'];
	$multiply = $_POST['multiply'];
	$divide = $_POST['divide'];
	$add = $_POST['add'];
	$subtract = $_POST['subtract'];

	if (isset($_POST['simple_math_submitted'])) {

		if (isset($multiply) ){
			$result = $x * $y;
		}
		if (isset($divide) ){
			$result = $x / $y;
		}
		if (isset($add) ){
			$result = $x + $y;
		}
		if (isset($subtract) ){
			$result = $x - $y;
		}
		
	}	

 ?>

<form method="POST">
	<div class='form simple_math'>

		<h1>Simple Math</h1>

		<label>What is the first number?</label>
		<input type="number" name="number_input_one">



		<label>What is the second number?</label>
		<input type="number" name="number_input_two">


		<label>What would you like to do to these numbers?</label>

			<div class="math_process_container">
				<div class="math_process_child">

				<input id="math_add" type="radio" value="radio_button" name="add" />
				<label for="math_add">Add</label>

				<input id="math_multiply" type="radio" value="radio_button" name="multiply" />
				<label for="math_multiply">Multiply</label>

				<input id="math_divide" type="radio" value="radio_button" name="divide" />
				<label for="math_divide">Divide</label>

				<input id="math_subtract" type="radio" value="radio_button" name="subtract" />
				<label for="math_subtract">Subtract</label>

				</div>
			</div>

		<button type="submit" name="simple_math_submitted">Calculating... Beep Boop</button>
		<p class='output simple_math_output'><?=floatval($result)?></p>
	</div>
</form>

<style>
	.retirement {
		border: 2px solid gold;
		
		
		
	}

	.retirement h1 {
		color: gold;
	}
</style>

<?php 
	$today = date("Y");
	$current_age = $_POST['current_age'];
	$retirement_age = $_POST['retirement_age'];
	$retirement_age_result = $retirement_age - $current_age;
	$retirement_year_result = $today + $retirement_age_result;
	
	if ( isset($_POST['retirement_submitted']) ) {


		$retirement_output = "You have " . $retirement_age_result . " years left until you can retire." . "<br>" . 
		"Its " . $today . ", so you can retire in " . $retirement_year_result;



	}


 ?>

<form method="POST">
	<div class='form retirement'>
		<h1>Retirement Calculator</h1>

			<label>What is your current age?</label>
			<input type="number" name="current_age">

			<label>At what age would you like to retire?</label>
			<input type="number" name="retirement_age">

			<button type="submit" name="retirement_submitted">When will you be free?</button>
			<p class="output retirement_output"><?=$retirement_output?></p>
	</div>
</form>

















<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>




