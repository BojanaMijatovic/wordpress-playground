<!DOCTYPE html>
<html>

    <head>
        
        <?php wp_head();?>

    </head>

<body <?php body_class();?>>


<header class="header">
  <div class="header__container">
   <a href="#" class="header__logo"><img class="header__img" src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"></a>
    <?php wp_nav_menu (
      array(
        'menu' => 'top_menu',
        // 'theme_location' => 'top_menu',
        'container_class' => 'nav',
        'menu_class' => 'unstyle-list',
      )
    );?>

    <button class="burger">
      <span class="burger__line burger--first"></span>
      <span class="burger__line burger--second"></span>
      <span class="burger__line burger--third"></span>
    </button>

    <button class="close">
      <span class="close__line"></span>
      <span class="close__line close--x"></span>
    </button>


  </div>
</header>
