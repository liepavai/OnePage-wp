<section id="about-us" class="about-us">
	<div class="content-width content-height">
		<div class="intro">
			<h2 class="section-title"><?php the_field('aus_section_title'); ?></h2>
			<div class="about">
				<div>
					<?php the_field('aus_section_content'); ?>
				</div>
			</div>
		</div>
		<div class="flex space-between content-width flex-wrap">
			<?php
	            // check if the repeater field has rows of data
	            if( have_rows('aus_section_columns_repeater') ):
	              // loop through the rows of data
	                while ( have_rows('aus_section_columns_repeater') ) : the_row();
	                ?>
                	<div class="column">
                		<a href="#"><img class="bubble" src="<?php echo get_sub_field('aus_column_icon')["sizes"]["column-icon"]; ?>"></a>
                        <h3><?php the_sub_field('aus_column_title'); ?></h3>
                        <div><?php the_sub_field('aus_column_content'); ?></div>
                     </div>
				 	<?php
                endwhile;
            endif;
        	?>
		</div>
	</div>
</section>