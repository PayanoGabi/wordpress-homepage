<?php


// get header
get_header();


 // this code shows how you can bounce in and out of html and php
 //single.php handles all post
 //the loop
	while(have_posts()) {
		the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content();?>
		<?php }

		//ater while loop get footer
		get_footer();
?>