<?php
/**
*
* The sidebar template file.
*
* @package kick-out
*/
?>
	<section id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

		<?php endif; ?>
	</section>