
<?php 
// area of a room

		$length = 10;
		$width = 10;

	if ( isset($_POST['area_submitted']) ) {
		$length = $_POST['length'];
		$width = $_POST['width'];
	}

		$area_feet = (int)$length * (int)$width;
		$meters = $area_feet * 0.3048;
		$area_output = "You have entered in the dimensions of " . $length . 
		" feet by " . $width . " feet." . "<br>" . "The area is " . $area_feet . 
		" feet " . "<br>" . $meters . " square meters";
 ?>

<section class='form-parent'>
<form method="POST">
	<div class="form rectangle-room">
		<h1>Area of a Rectangular Room</h1>
		<label>What is the length of the room in feet?</label>
		<input type="number" name="length" value='<?=$length?>'>

		<label>What is the width of the room in feet?</label>
		<input type="number" name="width" value='<?=$width?>'>
		<p class='output area_output'><?=$area_output?></p>
		<button type="submit" name="area_submitted">Submit</button>
		
	</div>
</form>
</section>

<?php  
// pizza party

		$people = true;
		$pizza = true;
		$pieces = null;
		$ppratio = null;
		$ppratio = null;
		$x = null;
		$leftovers = null;

	if ( isset($_POST['pizza_submitted']) ) {
		$people = $_POST['people'];
		$pizza = $_POST['pizza'];
		$pieces = intval($pizza)  * 8;
		$ppratio = intval($pieces) / intval($people);
		$ppratio = floor($ppratio);
		$x = $ppratio * $people;
		$leftovers = $pieces - $x;
		
	}
		
		$pizza_result = $people . " people with " . $pizza . " pizzas" . "<br>" . 
		"Each person gets " . $ppratio . " pieces of pizza." . "<br>" . 
		"There are " . round($leftovers) . " leftover pieces.";
?>

<section class='form-parent'>
<form method="POST">
	<div class="form pizza-party">
		<h1>Pizza Party</h1>
		<label>How many people are at the party?</label>
		<input type="number" name="people" value="<?=$people?>">

		<label>How many pizzas do you have?</label>
		<input type="number" name="pizza" value="<?=$pizza?>">
		<p class='output pizza_output'><?=$pizza_result?></p>
		<button type='submit' name="pizza_submitted">How full shall you be?</button>

	</div>
</form>
</section>









<?php 
		$paintlength = null;
		$paintwidth = null;
		$paint_area = null;
		$x = null;
		$gallons = null;

	if ( isset($_POST['paint_submitted']) ) {

		$paintlength = $_POST['paint-length'];
		$paintwidth = $_POST['paint-width']; 
		$paint_area = $paintlength * $paintwidth;
		$x = $paint_area / 350;
		$gallons = ceil($x);
	}

		

// Talk to Derek about this logic for making non plural results 
	// if ($gallons = 1) {
	// 	$paint_result = "You will need to purchase " . $gallons . " gallon of 
	// paint to cover " . $paint_area . " square feet.";

	// }
	
	$paint_result = "You will need to purchase " . $gallons . " gallons of 
	paint to cover " . $paint_area . " square feet.";

 ?>
<section class='form-parent'>
<form method="POST">
	<div class="form paint-calculator">
		<h1>Paint Calculator</h1>
		<label>What is the length of the room?</label>
		<input type="number" name="paint-length" value="<?=$paintlength?>">

		<label>What is the width the room?</label>
		<input type="number" name="paint-width" value="<?=$paintwidth?>">
		<p class='output paint_output'><?=$paint_result?></p>
		<button type='submit' name="paint_submitted">Paint</button>

	</div>
</form>
</section>

<?php 
// self checkout

		$item1p = null;
		$item1q = null;
		$item2p = null;
		$item2q = null;
		$item3p = null;
		$item3q = null;
		$subtotal = null;
		$tax = null;
		$total =  null;

	if ( isset($_POST['checkout_submitted']) ) {

		$item1p = $_POST['item-1-price'];
		$item1q = $_POST['item-1-quantity'];
		$item2p = $_POST['item-2-price'];
		$item2q = $_POST['item-2-quantity'];
		$item3p = $_POST['item-3-price'];
		$item3q = $_POST['item-3-quantity'];
		$item1g = $item1p * $item1q;
		$item2g = $item2p * $item2q;
		$item3g = $item3p * $item3q;
		$subtotal = $item1g + $item2g + $item3g;
		$tax = floatval($subtotal) * 0.055;
		$total = floatval($subtotal) + floatval($tax);

		// Ask Derek about decimal placing
		// number_format((float)$tax, 2, '.', '');
	}

		$checkout_result = "Subtotal: \$" . $subtotal . "<br>" . 
		"Tax: \$" . $tax . "<br>" .  
		"Total: \$" . $total ;
 ?>

<section class='form-parent'>
<form method="POST">
	<div class="form self-checkout">
		<h1>Self Checkout</h1>
		<label>Enter the price of item 1:</label>
		<input type="number" name="item-1-price" value="<?=$item1p?>">
		<label>Enter the quantity of item 1:</label>
		<input type="number" name="item-1-quantity" value="<?=$item1q?>">

		<label>Enter the price of item 2:</label>
		<input type="number" name="item-2-price" value="<?=$item2p?>">
		<label>Enter the quantity of item 2:</label>
		<input type="number" name="item-2-quantity" value="<?=$item2q?>">

		<label>Enter the price of item 3:</label>
		<input type="number" name="item-3-price" value="<?=$item3p?>">
		<label>Enter the quantity of item 3:</label>
		<input type="number" name="item-3-quantity" value="<?=$item3q?>">
		<p class='output checkout_output'><?=$checkout_result?></p>
		<button type='submit' name="checkout_submitted">Total</button>

	</div>
</form>
</section>

<?php 
	
		$euroamount = 1;
		$erate = 1;
		$dollaramount = null;

	if ( isset($_POST['currency_submitted']) ) {

		$euroamount = $_POST['euro-amount'];
		$erate = $_POST['exchange-rate'];
		$dollaramount = $euroamount * $erate;
	}
		$currency_result =  $euroamount . " euros at an exchange rate of "
		 . $erate . " is " . $dollaramount . " U.S. dollars.";

?>

<section class='form-parent'>
<form method="POST">
	<div class="form currency-convertor">
		<h1>Currency Convertor</h1>

		<label>How many euros are you exchanging?</label>
		<input type="number" name="euro-amount" step="0.01" value="<?=$euroamount?>">

		<label>What is the exchange rate?</label>
		<input type="number" name="exchange-rate" step="0.01" value="<?=$erate?>">
		<p class='output currency_output'><?=$currency_result?></p>
		<button type='submit' name="currency_submitted">Exchange</button>

		

	</div>
</form>
</section>

<?php 
// simple interest

		$sprincipal = null;
		$srate = null;
		$syears = null;
		$sa = null;
		$sx = null;
		$sy = null;

	if ( isset($_POST['simple_interest_submitted']) ) {

		$sprincipal = $_POST['simple_principal'];
		$srate = $_POST['simple_rate'];

		//ASK DEREK ABOUT HOW TO MAKE THE MATH WORK ON THE BACKEND AND NOT SHOW EXTRA DECIMAL PLACES IN THE FRONT

		$srate = floatval($srate) * .01;
		$syears = $_POST['simple_interest_years'];
		$sx = $srate * $syears;
		$sy = $sx + 1;
		$sa = $sprincipal * $sy;

	}
		$simple_interest_result = "After " . $syears . " years at " . $srate . 
		"%, the investment will be worth " . $sa . "\$" ;

 ?>
<section class='form-parent'>
<form method="POST">
	<div class="form simple-interest">
		<h1>SIMPLE INTEREST</h1>

		<label>Enter the principal: </label>
		<input type="number" name="simple_principal"  value="<?=$sprincipal?>">

		<label>Enter the rate of interest:</label>
		<input type="number" name="simple_rate" step=".01"  value="<?=$srate?>">

		<label>Enter the number of years:</label>
		<input type="number" name="simple_interest_years" 
		value="<?=$syears?>">
		<p class='output simple_interest_output'><?=$simple_interest_result?></p>
		<button type='submit' name="simple_interest_submitted">Exchange</button>

	</div>
</form>
</section>

<?php 
		$cprincipal = 1;
		$crate = 1;
		$cyears = 1;
		$ccompound = 1;
		$cx = null;
		$cy = null;
		$cz = null;
		$ca = null;
		$cb = null;

	if ( isset($_POST['compound_interest_submitted']) ) {

		$cprincipal = $_POST['compound_principal'];
		$crate = $_POST['compound_rate'];

		//ASK DEREK ABOUT HOW TO MAKE THE MATH WORK ON THE BACKEND AND NOT SHOW EXTRA DECIMAL PLACES IN THE FRONT

		$crate = floatval($crate) * 0.01;
		$cyears = $_POST['compound_interest_years'];
		$ccompound = $_POST['compound_interest_per_year'];
		$cx = $crate / $ccompound;
		$cy = $cx + 1;
		$cz = $ccompound * $cyears;
		$ca = pow(floatval($cy), floatval($cz)) ;
		$cb = $cprincipal * $ca;
	}

		$compound_interest_result = $cprincipal . "\$ invested at " . $crate . "% for " . $cyears . 
		" years compounded " . $ccompound . " times a year is " . $cb;
 ?>

<section class='form-parent'>
<form method="POST">
	<div class="form compound-interest">
		<h1>Compound Interest</h1>

		<label>Enter the principal: </label>
		<input type="number" name="compound_principal"  value="<?=$cprincipal?>">

		<label>Enter the rate of interest:</label>
		<input type="number" name="compound_rate" step=".01"  value="<?=$crate?>">

		<label>Enter the number of years:</label>
		<input type="number" name="compound_interest_years" step=".01" value="<?=$cyears?>">

		<label>What is the number of times the interest is compounded per year?</label>
		<input type="number" name="compound_interest_per_year" value="<?=$ccompound?>">
		<p class='output compound_interest_output'><?=$compound_interest_result?></p>
		<button type='submit' name="compound_interest_submitted">Exchange</button>

		

	</div>
</form>
</section>
