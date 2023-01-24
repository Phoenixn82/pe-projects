
<?php include('project_data.php'); ?>
<?php foreach ($project_data as $project_info) { ?>

<h1 class='detail_page_title'><?=$project_info['title']?></h1>
<h2 class='detail_page_button'><?=$project_info['button']?></h2>
<p class='detail_page_description'><?=$project_info['description']?></p>
<img class='detail_page_img' src='https://peprojects.dev/images/landscape.jpg'>
<?php } ?>
