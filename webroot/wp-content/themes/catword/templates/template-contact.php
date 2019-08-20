<?php
  /* Template Name: Contact Information */
  get_header();
  ?>

  <?php $number = get_field('phone_number');?>
  <?php $email = get_field('email');?>
  <?php $address = get_field('address');?>
  <section class="contact" id="contact">
    <div class="contact__container">
      <h2 class="contact__title">Zainteresovani ste za saradnju</h2>
      <ul class="unstyle-list contact__list">
        <li class="contact__list--item">
          <p class="contact__list--number"><?php echo $number['number_one'];?> <br>
          <?php echo $number['number_one'];?></p>
        </li>
        <li class="contact__list--item">
          <p class="contact__list--email"> <?php echo $email['email_1'];?> <br>
          <?php echo $email['email_2'];?></p>
        </li>
        <li class="contact__list--item">
          <p class="contact__list--address">
            <?php echo $address['street'];?><br> <?php echo $address['city'];?> <br><?php echo $address['country'];?>
          </p>
        </li>
        <li class="contact__list--item">
          <ul class="unstyle-list contact__social">
            <li class="contact__social--item">
              <a href=""><img class="contact__social--image" src="<?php bloginfo('template_directory');?>/assets/facebook.png" alt="facebook icon"></a>
            </li>
            <li class="contact__social--item">
              <a href=""><img class="contact__social--image" src="<?php bloginfo('template_directory');?>/assets/instagram.png" alt="instagram icon"></a>
            </li>
            <li class="contact__social--item">
              <a href=""><img class="contact__social--image" src="<?php bloginfo('template_directory');?>/assets/linkedin.png" alt="linkedin icon"></a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </section>
