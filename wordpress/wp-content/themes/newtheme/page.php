<?php
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2 style="text-align: center;"><?php the_title(); ?></h2>
<div><?php the_content(); ?></div><br>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php 
get_footer();
?>