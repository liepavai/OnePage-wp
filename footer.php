	<footer>
			
			<div class="content-width content-height">

				<?php
		        if(get_field('fl_logo_type','option')=='image'){
		          $logo = '<img src="'.get_field('fl_logo_image', 'option')["sizes"]["logo"].'" alt="'.get_bloginfo('name').'">';
		            }else{
		              $logo = get_field('fl_logo_text', 'option');
		            }
		        ?>

				<a class="logo" href="<?php echo home_url()?>"><?php echo $logo?></a>

				<div class="flex center">
				
					<nav>

						<?php
				         $args = ['theme_location'=>'footer-navigation', 'container'=>'false', 'menu_class'=>'flex flex-wrap'];
				         wp_nav_menu($args);
				         ?>

					</nav>

				</div>

				<div class="copyright"><?php the_field('f_copyright'); ?></div>

			</div>

		</footer>

		<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

		<?php wp_footer(); ?>

	</body>
</html>