<?php include('item_data.php') ?>
<h1>List of Bolts</h1>

	<ul>
		<?php foreach ($item_data as $item) { ?>
			<?php 
				$price = "$" . number_format($item['price'], 2, ".", ",")
			 ?>
		<li class='item'>
			<item_card>
				<h2 class='item_name'><?=$item['item_name']?></h2>
				<img src="https://peprojects.dev/images/landscape.jpg">
				<div class="quick_description">
				<h2 class='material'>Material: <?=$item['material']?></h2>
				<h2 class='fastener_standards'>Fastener Standard: <?=$item['fastener_standards']?></h2>
				<h2 class='price'>Price: <?=$price?></h2>
				</div>
				<a href="?page=detail&item=<?=$item['id']?>">Click here for more info</a>

			</item_card>
		</li>
		<?php } ?>
	</ul>