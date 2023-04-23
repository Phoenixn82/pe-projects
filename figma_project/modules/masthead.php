
<?php 

	$masthead = $sections[0];
	$masthead_content = $masthead["content"] ?? [];
	$masthead_logo = $masthead_content['logo']; 
	$masthead_language_icon = $masthead_content['language_icon']; 
	$masthead_actions = $masthead_content['actions'];
	$masthead_url1 = $masthead_actions[0]['url'];
	$masthead_url2 = $masthead_actions[1]['url'];
	$masthead_url3 = $masthead_actions[2]['url'];
	$masthead_url4 = $masthead_actions[3]['url'];
	$masthead_url5 = $masthead_actions[4]['url'];

	$masthead_nav_text1 = $masthead_actions[0]['text'];
	$masthead_nav_text2 = $masthead_actions[1]['text'];
	$masthead_nav_text3 = $masthead_actions[2]['text'];
	$masthead_nav_text4 = $masthead_actions[3]['text'];
	$masthead_nav_text5 = $masthead_actions[4]['text'];

	$masthead_button_text = $masthead_actions[5]['text'];
	$button_style = $masthead_actions[5]['class'];






 ?>

			<picture class="masthead-logo">
				<img src="<?=$masthead_logo?>">
			</picture> 

			<div class="masthead-nav">
				<a class='home-link l1'href="<?=$masthead_url1?>"><?=$masthead_nav_text1?></a>
				<a class='nav-link l2'href="<?=$masthead_url2?>"><?=$masthead_nav_text2?></a>
				<a class='nav-link l3'href="<?=$masthead_url3?>"><?=$masthead_nav_text3?></a>
				<a class='nav-link l4'href="<?=$masthead_url4?>"><?=$masthead_nav_text4?></a>
				<a class='nav-link l5'href="<?=$masthead_url5?>"><?=$masthead_nav_text5?></a>
			</div>

			<div class="signup-module">
				<div class="lang">
					<img src="<?=$masthead_language_icon?>">
					<p>EN</p>
				</div>
				<button class="<?=$button_style?>"><?=$masthead_button_text?></button>

			</div>
