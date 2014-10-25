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
					<a href="<?php the_permalink(); ?>"title="<?php echo __('Read Full Article:', "TEXT_DOMAIN").' '. get_the_title();  ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h1>
			</header>

			<div class="entry-content">
				<?php
					if ( get_the_excerpt() ){
						the_excerpt();
					} else {
						the_content( __( 'Read the rest.' , "TEXT_DOMAIN" ) );
					}


				?>
			</div>
			<?php edit_post_link( __( 'Edit', "TEXT_DOMAIN" ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		</article>
	<?php endwhile;
	kickout_paging_nav();
} else {
	?>
	<section class="no-entry">
		<h1 class="entry-title"><?php _e( 'Upss!', "TEXT_DOMAIN"); ?></h1>
		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', "TEXT_DOMAIN"); ?></p>
	</section>
	<?php
}

get_sidebar();
get_footer();
?>