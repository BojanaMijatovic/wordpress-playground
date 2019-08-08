<?php get_header();?>

<div class="container">
  <!-- To add a title in the page -->

  <h1> <?php single_cat_title();?> </h1>

  <!-- To show content if it is there -->
  <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php if(has_post_thumbnail()):?>
      <img src="<?php the_post_thumbnail_url('smallest');?>">
    <?php endif;?>
    <h3><?php the_title();?></h3>
    <?php the_excerpt();?> <!-- summary of post -->
    <a href="<?php the_permalink();?>">Read More</a>
  <?php endwhile; endif;?>


</div>

<?php get_footer();?>
