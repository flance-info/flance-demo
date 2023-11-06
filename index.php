<?php
// There is nothing output here because block themes do not use php templates.
// There is a core ticket discussing removing this requirement for block themes:
// https://core.trac.wordpress.org/ticket/54272.
?>

<?php get_header(); ?>

<div id="page" class="site">
	<div class="site-content-contain">
		<div class="wrap">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );
			endwhile;

		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>
</div>
	</div>
</div>


<?php get_footer(); ?>

