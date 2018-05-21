<section id="partners" class="partners" style="background-image: url(<?php echo get_field('ps_background_image')["url"]; ?>);">
	<div class="content-width content-height">
		<h4><?php the_field('ps_title'); ?></h4>
		<div class="flex center">
			<nav>
				<ul class="flex flex-wrap center partners-logo">
					<?php
		            // check if the repeater field has rows of data
		            if( have_rows('ps_logo_repeater') ):
		              // loop through the rows of data
		                while ( have_rows('ps_logo_repeater') ) : the_row();
		                ?>

						<li><img src="<?php echo get_sub_field('ps_partner_logo')["sizes"]["logo"]; ?>"></li>

						<?php
		                endwhile;
		            endif;
		        	?>
	        	</ul>
			</nav>
		</div>
	</div>
</section>