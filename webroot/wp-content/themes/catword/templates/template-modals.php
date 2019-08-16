<?php
  /* Template Name: Modals */
  get_header();
  ?>

  <!-- Modal 1 -->
  <div class="modal modal_1">
    <div class="modal-wrap text-center">
      <div class="modal-inner">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"/>
        <h4>Pitajte nas</h4>
        <?php echo do_shortcode('[contact-form-7 id="309" title="Contact form 1"]'); ?>
        <button class="close">
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <?php $modal = get_field('modal'); ?>
  <div class="modal modal_2">
    <div class="modal-wrap text-center">
      <div class="modal-inner">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"/>
        <h4>Pošaljite nam svoj tekst</h4>
        <?php echo do_shortcode('[contact-form-7 id="321" title="Pošaljite nam svoj tekst"]'); ?>
        <button class="close">
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
   <div class="modal modal_3">
    <div class="modal-wrap text-center">
      <div class="modal-inner">
        <img src="<?php bloginfo('template_directory');?>/assets/logo.png" alt="catword logo"/>
        <h4>Unajmite prevodioca</h4>
        <?php echo do_shortcode('[contact-form-7 id="322" title="Unajmite prevodioca"]'); ?>

        <button class="close">
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
