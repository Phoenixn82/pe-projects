<?php include('item_data.php') ?>

<?php 

$detail = null;

if ( isset($_GET['item']) ) {
	$this_item_id = $_GET['item'];

} 
	

	foreach ($item_data as $item) {

		if ($this_item_id == $item['id'] ) {
			$detail = $item;
	}
}

 if ( isset($detail) ) { ?>

<h1><?=$detail['item_name']?></h1>

	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg">
		
	</picture>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php } else { ?>

<h1>No item Found</h1>

<p>Check the list for more items <a href="?page=list">here</a></p>

<?php } ?>