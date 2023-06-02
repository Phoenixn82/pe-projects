<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Primary Meta Tags -->
		<title>Phoenix Nachtegaele</title>
		<meta name="title" content="Phoenix Nachtegaele">
		<meta name="description" content="">

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://peprojects.dev/alpha-6/phoenix/">
		<meta property="og:title" content="Phoenix Nachtegaele">
		<meta property="og:description" content="">
		<meta property="og:image" content="https://peprojects.dev/alpha-6/phoenix/images/png/metadata-image.png">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://peprojects.dev/alpha-6/phoenix/">
		<meta property="twitter:title" content="Phoenix Nachtegaele">
		<meta property="twitter:description" content="">
		<meta property="twitter:image" content="https://peprojects.dev/alpha-6/phoenix/images/png/metadata-image.png">
		
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
		if($page == "project") {
			$favicon = "project.png";
		} 


		?>

	<link rel="icon" type="image/png" href="images/png/favicon/<?= $favicon ?>">


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
