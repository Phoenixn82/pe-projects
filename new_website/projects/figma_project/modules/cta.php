<?php 
	$cta = $sections[5];
	$cta_content = $cta["content"] ?? [];
	$cta_subtitle = $cta_content['subtitle'];
	$cta_heading = $cta_content['heading'];
	$cta_actions = $cta_content['actions'];
?>

<section class="cta">
	<div class="cta-words">
		<p class="subtitle"><?= $cta_subtitle ?></p>
		<h3><?= $cta_heading ?></h3>
	</div>
	<div class="cta-buttons">
		<?php foreach ($cta_actions as $action) { ?>
			<button class="<?= $action['class'] ?>"><a href="<?= $action['url'] ?>"><?= $action['text'] ?></a></button>
		<?php } ?>
	</div>
</section>