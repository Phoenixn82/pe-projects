 <section class='home-menu'>	
		<div class="icon projects">
			<a class="icon-link" href="?page=projects">
				<?php include("images/svg/pre-hover-projects-icon.php"); ?>
				<h2>Projects</h2>
			</a>
		</div>
		
		<div class="icon socials">
			<a class="icon-link" href="?page=socials">
				<?php include("images/svg/socials-icon.php"); ?>
				<h2>Socials</h2>
			</a>
		</div>
		

		<section class="word-container">
			<button id="openModalBtn">
				<div class="text-scramble-js">
					<!-- text animation here -->

				</div>
			</button>
		</section>

		<div id="modal" class="modal">
	        <div class="modal-open">
	           
	            <div class="modal-content">

	            <div class="summary">
					<?php include("components/modal-text.php"); ?>
	            </div>

	            <div class="modal-pictures">
					<picture class="modal-pic-1"><img src="https://placehold.co/500x400"></picture>
					<picture class="modal-pic-2"><img src="https://placehold.co/200x300"></picture>
					<picture class="modal-pic-3"><img src="https://placehold.co/300x400"></picture>
					<picture class="modal-pic-4"><img src="https://placehold.co/300x200"></picture>
					<picture class="modal-pic-5"><img src="https://placehold.co/500x400"></picture>
					<picture class="modal-pic-6"><img src="https://placehold.co/200x300"></picture>



				</div>

				 <span class="close">&times;</span>

				</div>
	            
	        </div>
    	</div>

		<div class="icon contact">
			<a class="icon-link" href="mailto: phoenixn82@gmail.com">
				<?php include("images/svg/contact-icon.php"); ?>
				<h2>Contact</h2>
			</a>
		</div>

		<div class="icon resume">
			<a class="icon-link" href="?page=resume">
				<?php include("images/svg/resume-icon.php"); ?>
				<h2>Resume</h2>
			</a>
		</div>
</section>	

    <script src="js/text-scramble.js"></script>
    <script src="js/home-modal.js"></script>
