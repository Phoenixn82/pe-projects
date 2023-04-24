<?php

	$hero = $sections[1];
	$hero_content = $hero["content"] ?? [];
	$hero_heading = $hero_content["heading"] ?? "hero heading";
	$hero_subheading = $hero_content["subheading"];
	$hero_actions = $hero_content["actions"];
    $hero_input = $hero_actions[0];
    $hero_button = $hero_actions[1];


?>

<div class="hero-type">
	<h1><?=$hero_heading?></h1>
	<p><?=$hero_subheading?></p>
</div>

    <div class="email-signup">
        <input type="text" name="email-signup" class="<?= $hero_input['class'] ?>" placeholder="<?= $hero_input['text'] ?>">

        <button class="<?=$hero_button['class']?>"><?=$hero_button['text']?></button>
    </div>