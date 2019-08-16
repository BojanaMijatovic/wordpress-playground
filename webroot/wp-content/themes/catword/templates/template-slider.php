<?php
  /* Template Name: slider */
  get_header(); ?>
<section class="areas" id="areas">
  <div>
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
          <li class="areas__content">
            <div class="areas__content--text">
              <h3 class="areas__content--title"> <?php echo $sliderText['slider_title'];?></h3>
              <p class="areas__content--description"> <?php echo $sliderText['slider_description'];?></p>
            </div>
            <div class="areas__image">
              <img class="areas__image--position" src="<?php echo $sliderImage['url']; ?>" alt="<?php echo $sliderImage['alt']; ?>" /
            </div>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>
  </div>
</section>
