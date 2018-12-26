<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>



</head>
<body>

<header>
    <div class="header-wrapper">
    <div class="logo">
        <img src="<?php bloginfo('template_url'); ?>/image/Logo.svg" alt="logo"/>
    </div>

            <?php $the_query = new WP_Query('p=46'); ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <span class="mob-phone">
            <?php echo get_post_meta($post->ID, 'phone', true); ?>
        </span>
            <?php endwhile;?>


        <a id="hamburger-icon" href="#" title="Menu">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </a>
    <div class="menu-wrapper">
        <? wp_nav_menu(array('theme_location' => 'topMenu', 'menu' => 'topMenu', 'menu_class' => 'nav navbar-nav mainmenu', 'container' => 'ul')); ?>
    </div>
    </div>
</header>


