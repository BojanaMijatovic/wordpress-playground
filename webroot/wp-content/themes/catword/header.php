<!DOCTYPE html>
<html>

    <head>

        <?php wp_head();?>

    </head>

<body <?php body_class();?>>


<header class="container">
   <a href="#" class="header-logo"><img src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"></a>
    <?php wp_nav_menu (
      array(
        'menu' => 'top_menu',
        // 'theme_location' => 'top_menu',
        'menu_class' => 'navigation', //this is how we assign class to some element, because they already have it automatically and we can change it if we want to. We just have to see what the class is first
      )
    );?>
</header>
