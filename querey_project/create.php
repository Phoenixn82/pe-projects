

<?php 
	if ( isset($_POST['add']) ) {
		echo "added";
	}

	$attributes = [

		[
			"title" => "bolt type", 
			"prefix" => "bt",
			"options" => [
				[
					"label" => "Anchor",
					"value" => "anchor",
				],
				[
					"label" => "Carriage",
					"value" => "carriage",
				],
				[
					"label" => "Elevator",
					"value" => "elevator",
				],
				[
					"label" => "Flange",
					"value" => "flange",
				],
			]

		],

	];


 ?>

<h1>Bolt Definer</h1>


<form method="POST"> 
	<?php foreach ($attributes as $attribute) { ?>
		<section>
			<h2><?=$attribute['title']?></h2>
			<?php foreach ($attribute['options'] as $index => $option ) { ?>

				<div class="field">
					<label for='<?=$attribute['prefix'] . $index?>'><?=$option['label']?></label>
					<input 
					id='<?=$attribute['prefix'] . $index?>'
					type="radio" 
					name="<?=$attribute['title']?>"
					value='<?=$option['value']?>'>
				</div>


			<?php } ?>
		</section>		
	<?php } ?>	
	<div class='field'>
		<div class='bolt_type_checkbox_container'>
			<h2>Bolt Type</h2>
				<label for="bt1">Anchor Bolt</label>
				<input id='bt1' type="radio" name="bolt_type_radio_button" value="anchor_bolt">
				<label>Carriage Bolt</label>
				<input type="radio" name="bolt_type_radio_button" value="carriage_bolt">
				<label>Elevator Bolt</label>
				<input type="radio" name="bolt_type_radio_button" value="elevator_bolt">
				<label>Flange Bolt</label>
				<input type="radio" name="bolt_type_radio_button" value="flange_bolt">
				<label>Hanger Bolt</label>
				<input type="radio" name="bolt_type_radio_button" value="hanger_bolt">
		</div>
	</div>

	<div class='field'>
		<div class='metric_checkbox_container'>
			<h2>Metric</h2>
				<label>M 1.6</label>
				<input type="radio" name="metric_radio_button" value="M_1.6">
				<label>M 2.0</label>
				<input type="radio" name="metric_radio_button" value="M_2.0">
				<label>M 2.5</label>
				<input type="radio" name="metric_radio_button" value="M_2.5">
				<label>M 3.0</label>
				<input type="radio" name="metric_radio_button" value="M_3.0">
				<label>M 3.5</label>
				<input type="radio" name="metric_radio_button" value="M_3.5">
		</div>
	</div>

	<div class='field'>
		<div class='material_checkbox_container'>
			<h2>Material Type</h2>
				<label>Aluminum</label>
				<input type="radio" name="material_radio_button" value="aluminum">
				<label>Brass</label>
				<input type="radio" name="material_radio_button" value="brass">
				<label>Copper</label>
				<input type="radio" name="material_radio_button" value="copper">
				<label>Steel</label>
				<input type="radio" name="material_radio_button" value="steel">
				<label>Bronze</label>
				<input type="radio" name="material_radio_button" value="bronze">
		</div>
	</div>

	<div class='field'>
		<div class='fs_type_checkbox_container'>
			<h2>Fastener Standards</h2>
				<label>AIA / NAS </label>
				<input type="radio" name="fastener_radio_button" value="aia/nas">
				<label>AN / MS</label>
				<input type="radio" name="fastener_radio_button" value="an/ms">
				<label>ASME / ANSI</label>
				<input type="radio" name="fastener_radio_button" value="asme/ansi">
				<label>BS</label>
				<input type="radio" name="fastener_radio_button" value="bs">
				<label>DIN</label>
				<input type="radio" name="fastener_radio_button" value="din">
		</div>
	</div>
	<button type="submit" name='add'>Add Bolt</button>
</form>
 