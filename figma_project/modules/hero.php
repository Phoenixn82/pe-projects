<?php

	$hero = $sections[1];
	$hero_content = $hero["content"] ?? [];
	$hero_heading = $hero_content["heading"] ?? "hero heading";
	$hero_subheading = $hero_content["subheading"];
	$hero_actions = $hero_content["actions"];

?>

<div class="hero-type">
	<h1><?=$hero_heading?></h1>
	<p><?=$hero_subheading?></p>
</div>

<div class="hero-buttons">
	<?php foreach ($hero_actions as $action) { ?>
		<button class="<?=$action['class']?>" ><a href="<?=$action['url']?>"><?=$action['text']?></a></button>
	<?php } ?>
</div>
