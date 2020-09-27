<?php

//get header 
get_header();

	while (have_posts()){
		the_post(); ?>
		<h2><?php the_title();?></h2>
		<?php the_content(); ?>

		<?php }

		//get footer ater while loop
		get_footer();
?>