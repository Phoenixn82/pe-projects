<!-- ?page=project&id=figma -->

<?php 
// figure out the right project
	if ( isset($_GET['id']) ) {
		$projectId = $_GET['id'];
		// load the project data
		$json = file_get_contents("data/projects.json");
		// decode the project data from json to php
		$projectData = json_decode($json, true);
		print_r($projectData);
		// get the right project from the data
		foreach ($projectData as $project) {
			if ($project["id"] === $projectId ) {
				$current_project = $project;
			}
		}
		// show the title for the project on the page


	}





 ?>

<h1><?=$current_project["title"]?></h1>

<a href="<?=$current_project["link"]?>">Link</a>
