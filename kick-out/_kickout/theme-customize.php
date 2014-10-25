<?php

function kickout_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) { return; }
	?>
	<nav class="navigation paging-navigation" role="navigation">

	<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', "TEXT_DOMINE" ) ); ?></div>
	<?php endif; ?>

	<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', "TEXT_DOMINE" ) ); ?></div>
	<?php endif; ?>

	</nav>
	<?php
}
?>