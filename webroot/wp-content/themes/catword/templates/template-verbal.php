<?php
  /* Template Name: Verbal Translation */
  get_header();
  ?>

  <article class="verbal-translation">
    <div class="container clearfix">
      <div class="image">
        <?php

            $image = get_field('image');

            if( !empty($image) ): ?>

             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
      <?php $text = get_field('text');?>
      <div class="verbal-text">
        <h3> <?php echo $text['title'];?> </h3>
        <p> <?php echo $text['subtitle'];?> </p>
        <button href="javascript;" class="btn btn2 hire"> <?php echo $text['button'];?></button>
      </div>
    </div>
  </article>
