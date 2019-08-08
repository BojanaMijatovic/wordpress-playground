<?php get_header();?>

<div class="container">
  <!-- To add a title in the page -->
  <h1> <?php the_title();?> </h1>

  <!-- To show content if it is there -->
  <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
  <?php endwhile; endif;?>


</div>

<?php get_footer();?>
