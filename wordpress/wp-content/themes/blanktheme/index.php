<?php get_header(); ?>

<div class="style">
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
<article>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</article>
<?php
    }
} else {
    echo '<p>No content found.</p>';
}
?>
</div>

<?php get_footer(); 

?> 

