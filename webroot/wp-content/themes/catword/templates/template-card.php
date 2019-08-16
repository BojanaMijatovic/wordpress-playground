<?php
 /* Template Name: Card */
 get_header();
 ?>

   <article class="list-of-services container">
     <h3>Prevodilačke usluge</h3>
 <?php if( have_rows('service_card') ): ?>
 <div class="service">

 <?php while( have_rows('service_card')): the_row();

     $card = get_sub_field('card_image');
     $title = get_sub_field('card_title');
     $description = get_sub_field('card_content');
 ?>

 <div class="service__card">
   <?php echo $card;?>
   <h4 class="service__card--title"><?php echo $title;?></h4>
   <p class="service__card--description"><?php echo $description;?></p>
 </div>

<?php endwhile; ?>
</div>
<?php endif; ?>
</article>
