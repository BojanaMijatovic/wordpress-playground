<?php
  /* Template Name: Contact Information */
  get_header();
  ?>

  <?php $number = get_field('phone_number');?>
  <?php $email = get_field('email');?>
  <?php $address = get_field('address');?>
  <section class="contact" id="contact">
    <div class="container">
      <h2>Zainteresovani ste za saradnju</h2>
      <ul class="unstyle-list contact-list">
        <li class="contact_1">
          <p><?php echo $number['number_one'];?> <br>
          <?php echo $number['number_one'];?></p>
        </li>
        <li class="contact_2">
          <p> <?php echo $email['email_1'];?> <br>
          <?php echo $email['email_2'];?></p>
        </li>
        <li class="contact_3">
          <p>
            <?php echo $address['street'];?><br> <?php echo $address['city'];?> <br><?php echo $address['country'];?>
          </p>
        </li>
        <li>
          <ul class="unstyle-list social-net">
            <li>
              <a href=""><img src="<?php bloginfo('template_directory');?>/assets/facebook.png" alt="facebook icon"></a>
            </li>
            <li>
              <a href=""><img src="<?php bloginfo('template_directory');?>/assets/instagram.png" alt="instagram icon"></a>
            </li>
            <li>
              <a href=""><img src="<?php bloginfo('template_directory');?>/assets/linkedin.png" alt="linkedin icon"></a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <?php get_footer(); ?>
