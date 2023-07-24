<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div style="float: left; height:100%; width: 20%; margin-left: 10px;">
<h2><?php the_title(); ?></h2>
<?php the_field('test'); ?>
</div>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php 
get_footer();
?>