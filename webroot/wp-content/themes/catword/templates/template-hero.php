
<?php
  /* Template Name: Hero */
 get_header();
 ?>

<section class="hero" id="home">
  <?php $hero = get_field('hero');?>
  <div class="container">
  <div class="hero-left">
    <h1><?php echo $hero['title'];?> <br><strong><?php echo $hero['bold_title'];?></strong></h1>
    <button href="javascript;" class="btn ask"><?php echo $hero['link_text'];?></button>
  </div>
</div>
</section>
