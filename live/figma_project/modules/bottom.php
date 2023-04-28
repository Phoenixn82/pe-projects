<?php 
	$footer = $sections[7];
	$footer_content = $footer["content"] ?? [];
	$footer_product_links = $footer_content['product_links'] ?? [];
	$footer_info_links = $footer_content['info_links'] ?? [];
	$footer_company_links = $footer_content['company_links'] ?? [];
	$footer_email_body = $footer_content['email_body'] ?? '';
	$footer_logo = $footer_content['logo'] ?? '';
	$footer_legal_links = $footer_content['legal_links'] ?? [];
	$linkedin = $footer_content['linkedin'] ?? '';
	$facebook = $footer_content['facebook'] ?? '';
	$vine = $footer_content['vine'] ?? '';
?>

<div class="footer-top">


		<div class="footer-category">
			<p class="bold-footer">Product</p>
			<ul>
				<?php foreach($footer_product_links as $product_link): ?>
					<a href="<?=$footer_url?>"><li class="footer-link"><?=$product_link?></li></a>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="footer-category">
			<p class="bold-footer">Information</p>
			<ul>
				<?php foreach($footer_info_links as $info_link): ?>
					<a href="<?=$footer_url?>"><li class="footer-link"><?=$info_link?></li></a>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="footer-category">
			<p class="bold-footer">Company</p>
			<ul>
				<?php foreach($footer_company_links as $company_link): ?>
					<a href="<?=$footer_url?>"><li class="footer-link"><?=$company_link?></li></a>
				<?php endforeach; ?>
			</ul>
		</div>

	

	<div class="footer-email">
		<p class="bold-footer">Subscribe</p>
		<div class="email-signup">
			<input class="email-input" placeholder="Email address">
			<button class="email-button">></button>
		</div>
		<p class="footer-email-body"><?=$footer_email_body?></p>
	</div>

</div>

<div class="footer-bottom">
	<picture class='footer-logo'>
		<img src="<?=$footer_logo?>">
	</picture>
	<div class="footer-legal">
		<ul>
			<?php foreach($footer_legal_links as $link): ?>
				<a href="<?=$footer_url?>"><li><?=$link?></li></a>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="socials">
		<ul>
			<li><picture><img src="<?=$linkedin?>"></picture></li>
			<li><picture><img src="<?=$facebook?>"></picture></li>
			<li><picture><img src="<?=$vine?>"></picture></li>
		</ul>
	</div>
</div>