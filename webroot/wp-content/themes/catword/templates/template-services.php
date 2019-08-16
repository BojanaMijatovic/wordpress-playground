<?php
  /* Template Name: Our Services */
  get_header();
  ?>


  <?php $services = get_field('languages');?>
  <h2><?php echo $services['title'];?></h2>

  <article class="services__language">
    <h3> <?php echo $services['subtitle'];?> </h3>
    <p> <?php echo $services['description'];?></p>
    <?php if( have_rows('image_small') ): ?>
    <div class="services__icons">
      <?php while( have_rows('image_small')): the_row();


          $circle = get_sub_field('image_circle');
          $language = get_sub_field('language');
      ?>
      <div class="services__icon">
        <div class="services__icon--img">
          <img src="<?php echo $circle['url'];?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <p class="services__icon--title"> <?php echo $language;?> </p>
      </div>
      <?php endwhile;?>
    </div>
  <?php endif; ?>
  <button href="javascript;" class="btn btn--purple send">Pošaljite nam svoj tekst</button>
</article>
