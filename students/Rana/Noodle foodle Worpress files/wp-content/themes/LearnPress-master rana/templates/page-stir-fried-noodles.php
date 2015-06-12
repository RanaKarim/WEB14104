<?php
/**
 * Template Name: stir fried noodles
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

<h3 class="startertitle"> Stir Fried Noodles </h3>
<!--<p class="titledescription">Served with boiled rice, green salad and miso soup</p>-->
<P class="key" id="hotkey">H - Hot & Spicy </P> 
<p class="key" id="vegkey">V - Vegetarien</p>

<div class="row"> 
<div class="nine columns">
<table class="tablemenu">
  <tr>
    <th class="tablehead"><?php the_field('food_group_1');?></th>
  </tr>



  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('stir_fried_noodles_1') ):

  // loop through the rows of data
    while ( have_rows('stir_fried_noodles_1') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
      	<td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
      	<td><?php the_sub_field('food_description');?></td>
      	<td class="chilli" ><?php the_sub_field('hot_sign');?></td>
      	<td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
      	<td class="important">£<?php the_sub_field('price');?></td>
        <td><input class="numberinput"  type="number" name="quantity" min="0" max="99" value="0"></td>
        <td><button>Add</button></td> 
     </tr>
              

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

</table>




<table class="tablemenu">

  <tr>
    <th><?php the_field('food_group_2');?></th>
  </tr>

  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('stir_fried_noodles_2') ):

  // loop through the rows of data
    while ( have_rows('stir_fried_noodles_2') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
        <td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
        <td><?php the_sub_field('food_description');?></td>
        <td class="chilli" ><?php the_sub_field('hot_sign');?></td>
        <td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
        <td class="important">£<?php the_sub_field('price');?></td>
        <td><input class="numberinput"  type="number" name="quantity" min="0" max="99" value="0"></td>
        <td><button>Add</button></td>         
     </tr>    

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

</table>



<table class="tablemenu">
  <tr>
    <th class="tablehead"><?php the_field('food_group_3');?></th>
  </tr>



  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('stir_fried_noodles_3') ):

  // loop through the rows of data
    while ( have_rows('stir_fried_noodles_3') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
        <td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
        <td><?php the_sub_field('food_description');?></td>
        <td class="chilli" ><?php the_sub_field('hot_sign');?></td>
        <td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
        <td class="important">£<?php the_sub_field('price');?></td>
        <td><input class="numberinput"  type="number" name="quantity" min="0" max="99" value="0"></td>
        <td><button>Add</button></td>         
     </tr>
              

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

</table>




<table class="tablemenu">
  <tr>
    <th class="tablehead"><?php the_field('food_group_4');?></th>
  </tr>



  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('stir_fried_noodles_4') ):

  // loop through the rows of data
    while ( have_rows('stir_fried_noodles_4') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
        <td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
        <td><?php the_sub_field('food_description');?></td>
        <td class="chilli" ><?php the_sub_field('hot_sign');?></td>
        <td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
        <td class="important">£<?php the_sub_field('price');?></td>
        <td><input class="numberinput"  type="number" name="quantity" min="0" max="99" value="0"></td>
        <td><button>Add</button></td>         
     </tr>
              

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

</table>
	
</div>

<div class="three columns">

  <h5>Basket</h5>
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
    <tr>
       
      
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