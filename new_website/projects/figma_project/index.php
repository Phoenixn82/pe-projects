<?php 

	$page = "template_one";
	if ($_GET['page']) {
		$page = $_GET['page'];
	}

include('partials/header.php') ?> 

<?php 

	if (file_exists("data/$page.json")) {
		$file = file_get_contents("data/$page.json");
		$pageData = json_decode($file, true);
		$sections = $pageData['sections']; 

		foreach ($pageData["sections"] as $section) { ?>
			
			<section class="<?=$section['name']?>">
				<inner-column>
					
					<?php include("modules/$section[module].php"); ?>

				</inner-column>
			</section>

		<?php } ?>
	<?php } ?>


<?php include('partials/footer.php') ?>