<?php
  /* Template Name: Our Services */
  get_header();
  ?>

  <div class="container">
  <?php $services = get_field('languages');?>
  <h2><?php echo $services['title'];?></h2>

  <article class="language">
    <h3> <?php echo $services['subtitle'];?> </h3>
    <p> <?php echo $services['description'];?></p>
    <?php if( have_rows('image_small') ): ?>
    <div class="icons">
      <?php while( have_rows('image_small')): the_row();


          $circle = get_sub_field('image_circle');
          $language = get_sub_field('language');
      ?>
      <div class="one-lang">
        <div class="big-ben">
          <img src="<?php echo $circle['url'];?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <p> <?php echo $language;?> </p>
      </div>
      <?php endwhile;?>
    </div>
  <?php endif; ?>
  <button href="javascript;" class="btn btn2 send">Pošaljite nam svoj tekst</button>
  </div>
</article>
