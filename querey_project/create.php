
<?php 
	if ( isset($_POST['add']) ) {
		echo "added";
	}

 ?>

<h1>Bolt Definer</h1>


<form method="POST">
	<div class='field'>
		<div class='bolt_type_checkbox_container'>
			<h2>Bolt Type</h2>
				<label>Anchor Bolt</label>
				<input type="radio" name="bolt_type_radio_button">
				<label>Carriage Bolt</label>
				<input type="radio" name="bolt_type_radio_button">
				<label>Elevator Bolt</label>
				<input type="radio" name="bolt_type_radio_button">
				<label>Flange Bolt</label>
				<input type="radio" name="bolt_type_radio_button">
				<label>Hanger Bolt</label>
				<input type="radio" name="bolt_type_radio_button">
		</div>
	</div>

	<div class='field'>
		<div class='metric_checkbox_container'>
			<h2>Metric</h2>
				<label>M 1.6</label>
				<input type="radio" name="metric_radio_button">
				<label>M 2.0</label>
				<input type="radio" name="metric_radio_button">
				<label>M 2.5</label>
				<input type="radio" name="metric_radio_button">
				<label>M 3.0</label>
				<input type="radio" name="metric_radio_button">
				<label>M 3.5</label>
				<input type="radio" name="metric_radio_button">
		</div>
	</div>

	<div class='field'>
		<div class='material_checkbox_container'>
			<h2>Material Type</h2>
				<label>Aluminum</label>
				<input type="radio" name="material_radio_button">
				<label>Brass</label>
				<input type="radio" name="material_radio_button">
				<label>Copper</label>
				<input type="radio" name="material_radio_button">
				<label>Steel</label>
				<input type="radio" name="material_radio_button">
				<label>Bronze</label>
				<input type="radio" name="material_radio_button">
		</div>
	</div>

	<div class='field'>
		<div class='fs_type_checkbox_container'>
			<h2>Fastener Standards</h2>
				<label>AIA / NAS </label>
				<input type="radio" name="fastener_radio_button">
				<label>AN / MS</label>
				<input type="radio" name="fastener_radio_button">
				<label>ASME / ANSI</label>
				<input type="radio" name="fastener_radio_button">
				<label>BS</label>
				<input type="radio" name="fastener_radio_button">
				<label>DIN</label>
				<input type="radio" name="fastener_radio_button">
		</div>
	</div>
	<button type="submit" name='add'>Add Bolt</button>
</form>
 