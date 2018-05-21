<!---CONTACT-->

<section id="contact" class="contact">
	<div class="content-width content-height">
		<h2 class="section-title"><?php the_field('cs_title'); ?></h2>
		<div class="flex space-between flex-wrap ">
			<div class="form">
				<?php the_field('cs_contact_form'); ?>
			</div> 

			<div class="msg-info">
				<?php the_field('cs_contact_info'); ?>

				<div class="social-menu flex space-between">
					<?php
		            // check if the repeater field has rows of data
			            if( have_rows('cs_social_menu_repeater') ):
			              // loop through the rows of data
			                while ( have_rows('cs_social_menu_repeater') ) : the_row();

			                	$link= get_sub_field('cs_sm_link');
			                	$target = $link['targt'] ? ' target="'.$link['targt'].'"' : '';
		                	
		                		echo '<a href="'.$link["url"].'" '.$target.'><i class="fab '.get_sub_field('cs_sm_social_icon').'"></i></a>';
			                endwhile;
			            endif;
		        	?>                    
				</div>
			</div>

		</div>		
	</div>
</section>