<!-- ?page=project&id=figma -->

<?php 
// figure out the right project
	if ( isset($_GET['id']) ) {
		$projectId = $_GET['id'];
		// load the project data
		$json = file_get_contents("data/projects.json");
		// decode the project data from json to php
		$projectData = json_decode($json, true);

		// get the right project from the data
		foreach ($projectData as $project) {
			if ($project["id"] === $projectId ) {
				$current_project = $project;
			}
		}
		// show the title for the project on the page


	}

 ?>

<section class="detail-page">
  <div class='detail-section-left'>
    <div class="detail-pic">
      <picture>
        <img src="<?=$current_project["pic"]?>" alt="">
      </picture>
    </div>
    <a href="<?=$current_project["link"]?>">
      <div class='detail-button'>
        <p>run_<?=$current_project["id"]?>.exe</p>
      </div>
    </a>
  </div>

  <div class='detail-section-right'>

    <div class="detail-title">
    	<h1><?=$current_project["title"]?></h1>
    </div>

    <div class="detail-desc">
    	<p><?=$current_project["desc"]?></p>
    </div>

	<div class="substack-link">
		<a href="<?=$current_project["substack"]?>">
			<div class='detail-button'>
				<p>Full case study</p>
			</div>
		</a>
		<div class="substack-image">
			<img src="images/svg/substack.svg" alt="Substack">
		</div>
  	</div>

  </div>
</section>

<section class="detail-page-2">
  <div class="detail-title-2">
    <h1><?=$current_project["title"]?></h1>
  </div>
  <div class="detail-desc-2">
    <div class="detail-pic-2">
      <picture>
        <img src="<?=$current_project["pic"]?>" alt="">
      </picture>
      <p><?=$current_project["desc"]?></p>
    </div>
  </div>
  <div class="substack-link">
		<a href="<?=$current_project["link"]?>">
			<div class='detail-button'>
				<p>run_<?=$current_project["id"]?>.exe</p>
			</div>
		</a>

		<a class="substack-image" href="<?=$current_project["substack"]?>">
			<img src="images/svg/substack.svg" alt="Substack">
		</a>
  	</div>
</section>