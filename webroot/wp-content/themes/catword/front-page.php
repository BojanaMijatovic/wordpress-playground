<?php get_header();?>

<div class="container">
  <!-- To add a title in the page -->
 <!-- <h1> <?php bloginfo('description', 'display');?> </h1> -->

  <!-- To show content if it is there -->
  <!-- <?php if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
  <?php endwhile; endif;?> -->



  <!-- Add your site or application content here -->
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

    <?php get_template_part('/templates/template', 'slider'); ?>


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
