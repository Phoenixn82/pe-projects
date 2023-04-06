<?php 
//name_generator

		$name = null;
	
	if ( isset($_POST['submitted']) ) {
		$name = $_POST['first_name'];
	}

		$name_message = "Hello " . $name . "! Nice to meet you.";
 ?>

<section class='form-parent'>
<form method="POST">
	<div class="form name_generator">
		<h1>First Name Generator</h1>
		<label>First Name</label>
		<input type="text" name="first_name">
		<p class='output name_output'><?=$name_message?></p>
		<button type="submit" name="submitted">Submit</button>
	</div>
</form>
</section>

<?php
// quote generator

		$quote = null;
		$author = null;

	if ( isset($_POST['author_submitted']) ) {
		$quote = $_POST['quote'];
		$author = $_POST['author'];

	}

		$quote_and_author = $author . " says,\"" . $quote . "\"";

?>

<section class='form-parent'>
<form method="POST">
	<div class="form quote_generator">
		<h1>Quote Generator</h1>
		<label>What is the quote?</label>
		<input type="text" name="quote">

		<label>Who said it?</label>
		<input type="text" name="author">
		<p class='output quote_output'><?=$quote_and_author?></p>
		<button type="submit" name="author_submitted">Wow... so original</button>
	</div>
</form>
</section>

<?php
// mad lib generator

		$noun = null;
		$verb = null;
		$adjective = null;
		$adverb = null;

	if ( isset($_POST['mad_lib_submitted']) ) {
		$noun = $_POST['noun'];
		$verb = $_POST['verb'];
		$adjective = $_POST['adjective'];
		$adverb = $_POST['adverb'];

	}

	$mad_lib = "Do you " . $verb . " your " . $adjective . " " . $noun . " " . $adverb . "? Thats hilarious!";

?>
<section class='form-parent'>
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

		<p class="output mad_lib_output"><?=$mad_lib?></p>
		<button type="submit" name="mad_lib_submitted">Make A Funny</button>
		

	</div>
</form>
</section>

<?php 
// character count

		$character_count_input = null;

	if ( isset($_POST['character_count_submitted']) ) {
		$character_count_input = $_POST['character_count_input'];

		}

		$character_count_output = $character_count_input . " has " . strlen($character_count_input) . " characters.";


 ?>

<section class='form-parent'>
<form method="POST">
	<div class='form character_count'>
		<h1>Character Count</h1>
		<label>What is the input string?</label>
		<input type="text" name="character_count_input">
		<p class="output character_count_output"><?=$character_count_output?></p>
		<button type="submit" name="character_count_submitted">Cmon.. dont be shy</button>
			
	</div>
</form>
</section>

<?php 
// simple math

		$x = null;
		$y = null;
		$result = null;
		$multiply = null;
		$divide = null;
		$add = null;
		$subtract = null;

	if (isset($_POST['simple_math_submitted'])) {

		$x = $_POST['number_input_one'];
		$y = $_POST['number_input_two'];
		$result = $_POST['simple_math_output'];
		$multiply = $_POST['multiply'];
		$divide = $_POST['divide'];
		$add = $_POST['add'];
		$subtract = $_POST['subtract'];

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

<section class='form-parent'>
<form method="POST">
	<div class='form simple_math'>

		<h1>Simple Math</h1>

		<label>What is the first number?</label>
		<input type="number" name="number_input_one">

		<label>What is the second number?</label>
		<input type="number" name="number_input_two">

		<label>What would you like to do to these numbers?</label>

			<div class="math_process_container">
				<div class="radio math_process_child">

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

		<p class='output simple_math_output'><?=floatval($result)?></p>
		<button type="submit" name="simple_math_submitted">Calculating... Beep Boop</button>
		
	</div>
</form>
</section>

<?php 
$today = null;
$current_age = null;
$retirement_age = null;
$retirement_age_result = null;
$retirement_year_result = null;
$retirement_output = null;

if ( isset($_POST['retirement_submitted']) ) {
	$today = date("Y");
	$current_age = $_POST['current_age'];
	$retirement_age = $_POST['retirement_age'];
	$retirement_age_result = $retirement_age - $current_age;
	$retirement_year_result = $today + $retirement_age_result;
	
	$retirement_output = "You have " . $retirement_age_result . " years left until you can retire." . "<br>" . 
	"It's " . $today . ", so you can retire in " . $retirement_year_result;
}

?>

<section class='form-parent'>
<form method="POST">
	<div class='form retirement'>
		<h1>Retirement Calculator</h1>
		<label>What is your current age?</label>
		<input type="number" name="current_age">

		<label>At what age would you like to retire?</label>
		<input type="number" name="retirement_age">
		<?php if ($retirement_output): ?>
			<p class="output retirement_output"><?=$retirement_output?></p>
		<?php endif; ?>
		<button type="submit" name="retirement_submitted">When will you be free?</button>
	</div>
</form>
</section>
