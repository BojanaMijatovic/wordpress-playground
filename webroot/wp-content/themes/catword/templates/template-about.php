<?php
  /* Template Name: About us */
  get_header();
?>

<section class="about container" id="about">
    <div class="animation">
        <?php

            $image = get_field('image_2');

            if( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>
      </div>
    <?php $about = get_field('text_2');?>
    <div class="text-right">
      <h2> <?php echo $about['title'];?> </h2>
      <h3> <?php echo $about['subtitle'];?> </h3>
      <p> <?php echo $about['description'];?> </p>
      <button class="btn btn2 accordion"> <?php echo $about['button'];?> </button>
    </div>

</section>
