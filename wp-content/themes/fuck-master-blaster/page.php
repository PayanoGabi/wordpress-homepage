<?php

//get header 
get_header();

	while (have_posts()){
		the_post(); ?>
		
		<div class="page-links">
			<h2 class="page-links_title"><a href="#">About</a></h2>
			<ul class="min-list">
				<li class="current_page_item"><a href="#">Storyline</a></li>
				<li><a href="#">Projects</a></li>
			</ul>
		</div>

		<div class="generic-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<?php }

		//get footer ater while loop
		get_footer();
?>