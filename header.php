<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>
    <?php $featured = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');?>
    <?php $featured = $featured[0]; ?>

<header class="site-header" style="background-image:url(<?php echo $featured ?>);">
    <nav class="main-navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" class="img-responsive">
                </div>

                <div class="navbar-right">
                    <?php wp_nav_menu(array(
                       'theme_location' => 'main_menu',
                        'container_id' => 'navbar',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class' => 'nav navbar-nav navbar-right'
                    ));?>
                </div>
            </div>
        </div>
    </nav>
</header>