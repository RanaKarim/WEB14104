<?php
/**
 * Template Name: home page
 *
 *	This is an example using Skeleton
 *
 */
?>

<?php get_header(); ?>

<div class="container">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>


		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

    <div class="row">
      <div class="three columns">
        <ul class="CDHP">
          <li>148 Merton Road</li>
          <li>Wimbledon</li>
          <li>London</li>
          <li>SW19 1EH</li>
          <li>United Kingdom</li>
          <li class="contactnum">02085406963</li>
        </ul>  
        <section class="signin">
          <p class="telluser">Email address </p>
          <input class="inputs" type="text">
          <p class="telluser" >Password</p>
          <input class="inputs" type="password">
          <button class="signinbuttons">Sign in</button> 
          <button class="signinbuttons">Sign in with facebook</p></button>
          <a href="" class="createaccountlink">not a member yet?</a>
        </section>
      </div>
      <div class="six columns">

<?php $image = get_field('promotion_1_image'); ?>
<img class="promtionalimage" src="<?php echo $image['url']; ?>">




<table class="tablemenu">       

  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('promotion_details_1') ):

  // loop through the rows of data
    while ( have_rows('promotion_details_1') ) : the_row();

    ?>

        <!--display a sub field value-->    

     <tr>
        <td ><?php the_sub_field('food_item');?></td>
        <td >£<?php the_sub_field('food_price');?></td>
     </tr>

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

     <tr>
      <td><h5><?php the_field('promotion_1_title_');?></h5><?php the_field('promotion_details_1.5');?></td>
      <td><button>Add</button></td>
     </tr>

</table>  



<!--<?php $image = get_field('promotion_2_image_'); ?>
<img class="promtionalimage" src="<?php echo $image['url']; ?>">-->




<!--<table class="tablemenu">-->       

  <!-- PHP loop through the repeater -->  

     <!--<?php

// check if the repeater field has rows of data
if( have_rows('promotion_details_2_') ):

  // loop through the rows of data
    while ( have_rows('promotion_details_2_') ) : the_row();

    ?>-->

        <!--display a sub field value-->    

     <!--<tr>
        <td ><?php the_sub_field('food_item');?></td>
        <td >£<?php the_sub_field('food_price');?></td>
     </tr>-->

<!--<?php        

    endwhile;

else :

    // no rows found

endif;

?>-->

     <!--<tr>
      <td><h5><?php the_field('promotion_2_title');?></h5><?php the_field('promotion_details_2.5');?></td>
      <td><button>Add</button></td>
     </tr>

</table> --> 


        
</div>

<div class="three columns">
  <h5 class="basketheading">Basket</h5>
  <table class="main-basket">
    <table class="popular-dishes">
    <tr>
      <p class="popular-dishes-title" id="bold">Your basket is empty</p>
      <p class="popular-dishes-title">Try some of our popular dishes</p>
    </tr>      

  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('basket_popular_dishes') ):

  // loop through the rows of data
    while ( have_rows('basket_popular_dishes') ) : the_row();

    ?>  



    <tr>
      <td><?php the_sub_field('food_item');?></td>
      <td>£<?php the_sub_field('price');?><br><input class="numberinput" type="number" name="quantity" min="0" max="99" value="0"><button>Add</button></td>
    </tr> 
    

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

    </table>
    <tr>
      <td><p>Total £0.00</p><button>checkout</button></td>
    </tr>
    <tr>
      <td><p>Minimum order £15.00<br>Delivery within 3 miles<br>Delivery time 30-40 mins</p></td>
    </tr>    
 
  </table>
</div>      



	
	

</div> 
</div>	

<?php get_footer(); ?>