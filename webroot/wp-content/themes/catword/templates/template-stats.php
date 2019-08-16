<?php
  /* Template Name: Statistic */
  get_header();
  ?>

  <?php if ( have_rows('stats') ): ?>
      <section class="stats">
        <div class="container">
          <div class="crown">
            <?php while ( have_rows('stats')) : the_row();

              $icon = get_sub_field('stats_image');
              $statsText = get_sub_field('stats_text');
              ?>

            <div class="star">
              <?php echo $icon;?>
              <p> <?php echo $statsText;?> </p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>
