
<?php
  /* Template Name: Hero */
 get_header();
 ?>

<section class="hero" id="home">
  <?php $hero = get_field('hero');?>
  <div class="hero__cover">
  <div class="hero__left">
    <h1><?php echo $hero['title'];?> </br><strong><?php echo $hero['bold_title'];?></strong></h1>
    <button href="javascript;" class="btn btn--pink ask"><?php echo $hero['link_text'];?></button>
  </div>
</div>
</section>
