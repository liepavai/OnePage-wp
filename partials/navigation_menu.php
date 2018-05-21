<header class="sticky">
	<div class="content-width header-width">
		<div class="flex space-between">
			<div class="one-page">
				<a href="<?php echo home_url()?>"><?php the_field('nm_left_side_text','option'); ?></a>
			</div>
			<nav>
				<a class="burger-nav"><img src="<?php echo get_template_directory_uri();?>/assets/images/burger.png"></a>

				<?php
		          $args = ['theme_location'=>'primary-navigation', 'container'=>'false', 'menu_class'=>'menu flex'];
		          wp_nav_menu($args);
		          ?>
			</nav>
		</div>
	</div>
</header>