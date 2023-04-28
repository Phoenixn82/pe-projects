 
<?php include("partials/header.php"); ?>

<?php 

	// ROUTER
	$page = "home";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	if (file_exists("pages/$page.php")) {
		include("pages/$page.php");

	}

	if ($page == "e4p") {
		include("projects/e4p/e4p_home.php");
	}

	if ($page == "figma") {
		include("projects/figma_project/index.php");

	}


 ?>

<?php include("partials/footer.php"); ?>