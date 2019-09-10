<?php get_header();?>

<div class="container">
  <!-- To show content if it is there -->




<!-- HERO SECTION -->
    <?php get_template_part('/templates/template', 'hero'); ?>


<!-- NAŠE USLUGE -->
  <section class="services" id="services">
    <!-- JEZICI -->
    <?php get_template_part('/templates/template', 'services'); ?>

    <!--USmeno prevodjenje -->
    <?php get_template_part('/templates/template', 'verbal'); ?>


    <!-- PREVODILACKE USLUGE -->
    <?php get_template_part('/templates/template', 'card'); ?>

  </section>


<!-- OBLASTI PREVODJENJA -->
<section class="areas" id="areas">
  <div>
  <?php if (have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content();?>

  <?php endwhile; endif;?>
 </section?

  <!-- STATS -->

    <?php get_template_part('/templates/template', 'stats'); ?>


  <!-- CENOVNIK -->
    <?php get_template_part('/templates/price', 'card'); ?>

  <!-- O NAMA -->
    <?php get_template_part('/templates/template', 'about'); ?>

  <!-- KONTAKT -->
    <?php get_template_part('/templates/template', 'contact'); ?>



  <!-- MODAL -->
    <?php get_template_part('/templates/template', 'modals'); ?>





</div>

<?php get_footer();?>
