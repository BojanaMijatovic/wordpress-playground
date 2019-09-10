<?php
  /* Template Name: About us */
  get_header();
?>

<section class="about" id="about">
    <div class="about__left">
        <?php

            $image = get_field('image_2', 1321);

            if( !empty($image) ): ?>

            <img class="about__image"src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
    <?php $about = get_field('text_2', 1321);?>
    <div class="about__right">
      <h2 class="about__title"> <?php echo $about['title'];?> </h2>
      <h3 class="about__subtitle"> <?php echo $about['subtitle'];?> </h3>
      <p class="about__description"> <?php echo $about['description'];?> </p>
      <button class="btn btn--pink accordion"> <?php echo $about['button'];?> </button>
    </div>

</section>
