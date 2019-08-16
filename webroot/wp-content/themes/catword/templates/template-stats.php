<?php
  /* Template Name: Statistic */
  get_header();
  ?>

  <?php if ( have_rows('stats') ): ?>
      <section class="stats">
        <div class="stats__container">
          <div class="stats__field">
            <?php while ( have_rows('stats')) : the_row();

              $icon = get_sub_field('stats_image');
              $statsText = get_sub_field('stats_text');
              ?>

            <div class="stats__content">
              <div class="stats__image">
                <img src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>"/>
              </div>
              <p class=stats__content--text> <?php echo $statsText;?> </p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>
