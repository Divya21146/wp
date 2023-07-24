<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div style="margin-left: 10px;">
<h2><?php the_title(); ?></h2>

<?php
// Get the custom fields
$product_image = get_field('product_image');
$sale_price = get_field('sale_price');
$additional_information = get_field('additional_information');
?>

<div class="image-container">
<?php
// Check if the image array exists and has the 'url' property
if ($product_image && isset($product_image['url'])):
?>
    <img src="<?php echo $product_image['url']; ?>" />
</div>

<?php if (function_exists('the_ratings')) {
    echo the_ratings();
} ?>

<?php endif; ?>

<?php if ($sale_price): ?>
    <p><strong>Sale Price:</strong> <?php echo $sale_price; ?></p>
<?php endif; ?>

<?php if ($additional_information): ?>
    <p><?php echo $additional_information; ?></p>
<?php endif; ?>

</div>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>

<?php 
get_footer();
?>