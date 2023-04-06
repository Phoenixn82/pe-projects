 
<?php include("header.php"); ?>

<?php 

	// ROUTER
	$page = "home";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	if ($page == "home") {
		include("home/home.php");
	}

	if ($page == "resume") {
		include("resume/resume.php");
	}

	if ($page == "socials") {
		include("socials/socials.php");
	}

	if ($page == "projects") {
		include("projects/projects.php");
	}

	if ($page == "e4p") {
		include("e4p/e4p_home.php");
	}

 ?>

<?php include("footer.php"); ?>