<?php
  /* Template Name: slider */
  get_header(); ?>
<section class="translation-areas" id="areas">
  <div class="container">
    <h2>Oblasti prevođenja</h2>
    <?php
      $slides = get_field('slider');
      if( have_rows ('slider') ): ?>
    <div class="flexslider">
      <ul class="slides">

        <?php while (have_rows('slider')): the_row();
          $sliderText = get_sub_field('slider_text');
          $sliderImage = get_sub_field('slider_image');

          ?>
          <li class="text-area">
            <div class="text">
              <h3> <?php echo $sliderText['slider_title'];?></h3>
              <p> <?php echo $sliderText['slider_description'];?>  </p>
            </div>
            <div class="image_2">
              <img src="<?php echo $sliderImage['url']; ?>" alt="<?php echo $sliderImage['alt']; ?>" /
            </div>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>
  </div>
</section>
