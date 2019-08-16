<?php
  /* Template Name: Modals */
  get_header();
  ?>

  <!-- Modal 1 -->
  <div class="modal modal__first">
    <div class="modal__wrap">
      <div class="modal__inner">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"/>
        <h4 class="modal__title">Pitajte nas</h4>
        <?php echo do_shortcode('[contact-form-7 id="309" title="Contact form 1"]'); ?>
        <button class="close">
          <span class="close__line"></span>
          <span class="close__line close--x"></span>
        </button>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <?php $modal = get_field('modal'); ?>
  <div class="modal modal_2">
    <div class="modal__wrap">
      <div class="modal__inner">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"/>
        <h4 class="modal__title">Pošaljite nam svoj tekst</h4>
        <?php echo do_shortcode('[contact-form-7 id="321" title="Pošaljite nam svoj tekst"]'); ?>
        <button class="close">
          <span class="close__line"></span>
          <span class="close__line close--x"></span>
        </button>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
   <div class="modal modal_3">
    <div class="modal__wrap">
      <div class="modal__inner">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"/>
        <h4 class="modal__title">Unajmite prevodioca</h4>
        <?php echo do_shortcode('[contact-form-7 id="322" title="Unajmite prevodioca"]'); ?>

        <button class="close">
          <span class="close__line"></span>
          <span class="close__line close--x"></span>
        </button>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
