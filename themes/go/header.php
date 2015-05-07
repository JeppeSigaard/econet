<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title( ' · ', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div>
        <nav class="top-menu">
        <?php echo strip_tags(wp_nav_menu( array(
            'theme_location'  => 'top-menu',
            'container'       => false,
            'echo'            => false,
            'description'     => true,
            'items_wrap'      => '%3$s',
            'depth'           => 0,
            'walker'          => '',
        )),'<a>');
        ?>
        </nav>
        <a href="<?php echo esc_attr(get_bloginfo('url')); ?>"><h1><?php bloginfo('title');?></h1></a>
        <h2><?php bloginfo('description');?></h2>
    </div>
    <nav class="main-menu">
        <?php wp_nav_menu( array(
            'theme_location'  => 'main-menu',
            'container'       => false,
            'echo'            => true,
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => new Menu_With_Description,
        ));
        ?>
    </nav>
</header>

