<?php
/*
Template name: Products
*/

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2 style="text-align: center;"><?php the_title(); ?></h2>
<div><?php the_content(); ?></div><br>

<?php endwhile; endif; ?>

<?php
$args = array(
    'post_type' => 'product'
);

$query = new WP_Query($args);

?>
      
    <div class="image-container">
        <?php if($query->have_posts()) : while( $query->have_posts()) :$query->the_post();?>
        <div>
            <a href="<?php the_permalink(); ?>" > <?php the_post_thumbnail('full'); ?> </a>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>

<?php 
get_footer();
?>

