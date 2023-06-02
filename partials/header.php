<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image" content="images/png/metadata-image.png">
		<title>Phoenix Nachtegaele</title>
		<link rel="stylesheet" href="css/site.css">
		<?php 
		$favicon = "home.png";

		if($page == "projects") {
			$favicon = "projects.png";
		} 

		if($page == "socials") {
			$favicon = "socials.png";
		} 

		if($page == "resume") {
			$favicon = "resume.png";
		} 


		?>
		
	<link rel="icon" type="image/png" href="https://peprojects.dev/alpha-6/phoenix/new_website/images/png/favicon/<?= $favicon ?>">


	</head>


	<body>

		<header>
				<div class="header-icon">
						<?php include("images/svg/header-icon.php");?>

				</div>

				<div class="header-icon-phone">
					<a href="index.php">
						<?php include("images/svg/phone-header.php"); ?>
					</a>
				</div>
			</section>
		</header>
		<main>
				<!-- main content -->
