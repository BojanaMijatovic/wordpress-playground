<?php
  /* Template Name: Price Cards */
  get_header(); ?>

<?php if( have_rows ('price_card', 1317)): ?>
  <section class="price" id="price">
    <div class="price__container">
      <h2>Cenovnik</h2>

      <div class="price__layout">
      <?php while( have_rows('price_card', 1317)): the_row();
        $pricetitle = get_sub_field('price_title', 1317);

        ?>

        <div class="card">
          <h3 class="card__title"><?php echo $pricetitle;?></h3>
          <?php if ( have_rows ('price_list', 1317) ): ?>
          <ul class="unstyle-list card__list">
            <?php while ( have_rows ('price_list', 1317)): the_row();

              $planguage = get_sub_field('price_language', 1317);
              $tag = get_sub_field('price_tag', 1317);
            ?>
            <li class="card__item">
              <p class="card__text"> <?php echo $planguage;?></p>
              <span class="card__price"> <?php echo $tag;?></span>
            </li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
