<?php

/*
Template name: Right sidebar
*/

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div style="float: left; height:100%; width: 70%;">
<h2 style="text-align: center;"><?php the_title(); ?></h2>
<?php the_content(); ?></div>
<div style="float: right; height:100%; width: 20%; margin-left: 10px;">
<h2>Sidebar</h2>
<p> It's a side bar...</p>

<?php
    if(is_active_sidebar('header_widget')):
    ?>
    <div class="head_wrap">
        <?php dynamic_sidebar('header_widget'); ?>
    </div>

    <?php endif; ?>

</div>
<br>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
<?php endif; ?>


<?php 
get_footer();
?>