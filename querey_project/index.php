<!DOCTYPE html>
<?php 
	$page = nul;
	if (isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = "home";
	}
	function getTemplate($page) {
		include($page . '.php');
	}
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>item Company: <?=$page?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<?php include('site_nav.php'); ?>
	</header>
	<main_container>
	<main class='page_content'>
		<?php getTemplate($page) ?>
	</main>
	</main_container>


	
</body>
</html>