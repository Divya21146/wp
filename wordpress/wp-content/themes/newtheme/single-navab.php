<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div style="margin-left: 10px;">
<h2><?php the_title(); ?></h2>
<?php the_field('description'); ?>
</div>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php 
get_footer();
?>