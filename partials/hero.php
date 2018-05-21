<section id="hero" class="hero" style="background-image: url(<?php echo get_field('h_background_image')["url"]; ?>);">

	<div class="content-width content-height">

		<?php
        if(get_field('l_logo_type','option')=='image'){
          $logo = '<img src="'.get_field('l_logo_image', 'option')["sizes"]["logo"].'" alt="'.get_bloginfo('name').'">';
            }else{
              $logo = get_field('l_logo_text', 'option');
            }
        ?>

		<a class="logo" href="<?php echo home_url()?>"><?php echo $logo?></a>

		<div class="intro">
			<h1 class="section-title"><?php the_field('h_hero_title'); ?></h1>
		
			<p><?php the_field('h_hero_subtitle'); ?></p>

			<?php
			// check if the repeater field has rows of data
			if( have_rows('h_hero_buttons_repeater') ):
			 	// loop through the rows of data
			    while ( have_rows('h_hero_buttons_repeater') ) : the_row();
			        // // display a sub field value
			        // the_sub_field('sub_field_name');
			        // get_sub_field('sub_field_name');
			    	$link = get_sub_field('h_button');

			?>

				<a class="btn" href="<?php echo $link["url"]?>"<?php if($link["target"]!=''){echo ' target="'.$link['target'].'"';} ?>><?php echo $link["title"]; ?></a>

			<?php

				    endwhile;
				endif;

			?>


			<p><i class="fas fa-angle-down"></i></p>

		</div>
		
	</div>

</section>