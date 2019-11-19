<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
               <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" class="img-responsive">
            </div>
            <div class="col-sm-8">
                <?php wp_nav_menu(array(
                   'theme_location' => 'main_menu'
                ));?>
            </div>
        </div>
    </div>
</header>