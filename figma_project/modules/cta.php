<?php 
	$cta = $sections[5];
	$cta_content = $cta["content"] ?? [];
	$cta_subtitle = $cta_content['subtitle'];
	$cta_heading = $cta_content['heading'];
	$cta_button_text = $cta_content['button_text'];
?>

<section class="cta">
		<div class="cta-words">
			<p class="subtitle"><?= $cta_subtitle ?></p>
			<h3><?= $cta_heading ?></h3>
		</div>
		<button class="blue-button"><?= $cta_button_text ?></button>

</section>