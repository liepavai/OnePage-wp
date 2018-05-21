<section id="portfolio" class="portfolio">
	<div class="content-width content-height">	
		<h2 class="section-title"><?php the_field('pg_title'); ?></h2>
		<div class="grid">
					<?php
				// check if the repeater field has rows of data
				if ( have_rows('pg_gallery_item_repeater') ):
				 	// loop through the rows of data
				    while ( have_rows('pg_gallery_item_repeater') ) : the_row();
						?>
							<div class="grid-item">
							  	<img src="<?php echo get_sub_field('pg_gi_image')["sizes"]["large"]; ?>">
							  	<div class="auksas">
							  		<div class="tekstas"><?php the_sub_field('pg_gi_text'); ?></div>
							  	</div>
							</div>	
						<?php
				    endwhile;
				endif;
			?>
		</div>
		<?php
			// check if the repeater field has rows of data
			if( have_rows('pg_portfolio_buttons_repeater') ):
			 	// loop through the rows of data
			    while ( have_rows('pg_portfolio_buttons_repeater') ) : the_row();
			        // // display a sub field value
			        // the_sub_field('sub_field_name');
			        // get_sub_field('sub_field_name');
			    	$link = get_sub_field('pg_button');
					?>
					<a class="btn" href="<?php echo $link["url"]?>"<?php if($link["target"]!=''){echo ' target="'.$link['target'].'"';} ?>><?php echo $link["title"]; ?></a>
					<?php
			    endwhile;
			endif;
		?>
	</div>
</section>