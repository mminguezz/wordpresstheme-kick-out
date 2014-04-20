<?php
/**
*
* The main template file.
*
* This is the most generic template file in a WordPress theme
*
* @package kick-out
*/
get_header();

if ( have_posts() ) {

	while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<?php edit_post_link( __( 'Edit', TEXT_DOMINE ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article>
	<?php endwhile;
} else {
	# No content
}

get_sidebar();
get_footer();
?>