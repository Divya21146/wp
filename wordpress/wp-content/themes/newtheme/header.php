<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?> 
</head>

<body>

    <div class="fixed-header">
        <div class="container">
            <h1>
                <?php bloginfo('name'); ?>
            </h1>
            <a>
                <?php
     $mainmenu = array(
        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_class' =>'nav'
     );

     wp_nav_menu($mainmenu);
?>
            </a>
        </div>

        </nav>
    </div>

</body>

</html>