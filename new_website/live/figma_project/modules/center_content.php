
<?php 
	$center_content = $sections[2];
	$center_content_content = $center_content["content"] ?? [];
	$top_subtitle = $center_content_content["top_subtitle"];
	$bottom_subtitle = $center_content_content["bottom_subtitle"];
	$center_content_heading= $center_content_content["heading"];
	$center_content_picture= $center_content_content["picture"];



 ?>



<section class="center-content">
		<div class="cc-title">
			<p class="subtitle"><?=$top_subtitle?></p>
			<h2><?=$center_content_heading?></h2>
			<p class="subtitle"><?=$bottom_subtitle?></p>
		</div>

		<picture class="cc-pic">
			<img src="<?=$center_content_picture?>">
		</picture>
</section>
