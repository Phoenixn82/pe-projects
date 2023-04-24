<?php 
	$masthead = $sections[0];
	$masthead_content = $masthead["content"] ?? [];
	$masthead_logo = $masthead_content['logo']; 
	$masthead_actions = $masthead_content['actions'];

	// Loop through buttons only
	$buttons = array_filter($masthead_actions, function ($action) {
		return $action['type'] === 'button';
	});

?>

<picture class="masthead-logo">
	<img src="<?=$masthead_logo?>">
</picture> 

<div class="masthead-nav">
	<a class='home-link l1'href="<?=$masthead_actions[0]['url']?>"><?=$masthead_actions[0]['text']?></a>
	<a class='nav-link l2'href="<?=$masthead_actions[1]['url']?>"><?=$masthead_actions[1]['text']?></a>
	<a class='nav-link l3'href="<?=$masthead_actions[2]['url']?>"><?=$masthead_actions[2]['text']?></a>
	<a class='nav-link l4'href="<?=$masthead_actions[3]['url']?>"><?=$masthead_actions[3]['text']?></a>
	<a class='nav-link l5'href="<?=$masthead_actions[4]['url']?>"><?=$masthead_actions[4]['text']?></a>
</div>

<div class="signup-module">
	<?php foreach ($buttons as $button) { ?>
		<button class="<?= $button['class'] ?>"><a href="<?= $button['url'] ?>"><?= $button['text'] ?></a></button>
	<?php } ?>
</div>
