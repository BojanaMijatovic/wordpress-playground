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

 <div class="service-card written">
   <?php echo $card;?>
   <h4><?php echo $title;?></h4>
   <p><?php echo $description;?></p>
 </div>

<?php endwhile; ?>
</div>
<?php endif; ?>
</article>
