<?php
  /* Template Name: Verbal Translation */
  get_header();
  ?>

  <article class="verbal">
    <div class="verbal__container clearfix">
      <div class="verbal__image">
        <?php

            $image = get_field('image', 1305);

            if( !empty($image) ): ?>

             <img class="verbal__image--position" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
      <?php $text = get_field('text', 1305);?>
      <div class="verbal__text">
        <h3 class="verbal__text--title"> <?php echo $text['title'];?> </h3>
        <p class="verbal__text--subtitle"> <?php echo $text['subtitle'];?> </p>
        <button href="javascript;" class="btn btn--purple hire"> <?php echo $text['button'];?></button>
      </div>
    </div>
  </article>
