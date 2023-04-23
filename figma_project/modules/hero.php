<?php

	$hero = $sections[1];
	$hero_content = $hero["content"] ?? [];
	$hero_heading = $hero_content["heading"] ?? "hero heading";
	$hero_subheading = $hero_content["subheading"];
	$hero_actions = $hero_content["actions"];

	$hero_button1_text = $hero_actions[0]['text'];
	$hero_button2_text = $hero_actions[1]['text'];

	$hero_url1 = $hero_actions[0]['url'];
	$hero_url2 = $hero_actions[1]['url'];


 ?>

		<div class="hero-type">
			<h1><?=$hero_heading?></h1>
			<p><?=$hero_subheading?></p>
		</div>

		<div class="hero-buttons">
			<button class="gs-button" ><a href="<?=$hero_url1?>"><?=$hero_button1_text?></a></button>
			<button class="white-button" ><a href="<?=$hero_url2?>"><?=$hero_button2_text?></a></button>
		</div>



