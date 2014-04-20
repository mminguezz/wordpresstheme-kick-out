<?php
/**
*
* The footer template file.
*
* @package kick-out
*/

?>

	</main>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<section class="site-info">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</section>
		<section class="contact-info">
			<?php
			echo 'Copyright &copy; ' . the_date('Y') . ' ';
			echo get_bloginfo( 'name' );
			# Aqui pondremos informacion de contacto
			?>
		</section>
	</footer>


<?php wp_footer(); ?>

</body>
</html>