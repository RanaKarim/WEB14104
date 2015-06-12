<?php
/**
 * Template Name: Sushi & Sashimi
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

<h3 class="startertitle"> Sushi & Sashimi </h3>
<!--<p class="titledescription">Served with boiled rice, green salad and miso soup</p>-->
<P class="key" id="hotkey">H - Hot & Spicy </P> 
<p class="key" id="vegkey">V - Vegetarien</p>


<div class=row>
<table class="tablemenu">
  <tr>
    <h5 class="fg-fgd"><?php the_field('food_group_1');?></h5>
    <p class="fg-fgd" id="fgd"><?php the_field('food_group_description_1');?></p>
  </tr>



  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('sushi_&_sashimi_1') ):

  // loop through the rows of data
    while ( have_rows('sushi_&_sashimi_1') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
      	<td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
      	<td><?php the_sub_field('food_description');?></td>
      	<td class="chilli" ><?php the_sub_field('hot_sign');?></td>
      	<td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
        <td ><?php the_sub_field('portion_size_1');?>Pcs</td>
      	<td class="important">£<?php the_sub_field('price_1');?></td>      
        <td ><?php the_sub_field('portion_size_2');?>Pcs</td>
        <td class="important">£<?php the_sub_field('price_2');?></td> 
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
    <h5 class="fg-fgd"><?php the_field('food_group_2');?></h5>
    <p class="fg-fgd" id="fgd"><?php the_field('food_group_description_2');?></p>
  </tr>



  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('sushi_&_sashimi_2') ):

  // loop through the rows of data
    while ( have_rows('sushi_&_sashimi_2') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
        <td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
        <td><?php the_sub_field('food_description');?></td>
        <td class="chilli" ><?php the_sub_field('hot_sign');?></td>
        <td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
        <td ><?php the_sub_field('portion_size_1');?></td>
        <td class="important"><?php the_sub_field('price_1');?></td>
        <td ><?php the_sub_field('portion_size_2');?>Pcs</td>
        <td class="important">£<?php the_sub_field('price_2');?></td>
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

</table>

<table class="tablemenu">
  <tr>
    <h5 class="fg-fgd"><?php the_field('food_group_3');?></h5>
    <p class="fg-fgd" id="fgd"><?php the_field('food_group_description_3');?></p>
  </tr>  




  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('sushi_&_sashimi_3') ):

  // loop through the rows of data
    while ( have_rows('sushi_&_sashimi_3') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
        <td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
        <td><?php the_sub_field('food_description');?></td>
        <td class="chilli" ><?php the_sub_field('hot_sign');?></td>
        <td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
        <td ><?php the_sub_field('portion_size_1');?>Pcs</td>
        <td class="important">£<?php the_sub_field('price_1');?></td>
        <td ><?php the_sub_field('portion_size_2');?>Pcs</td>
        <td class="important">£<?php the_sub_field('price_2');?></td>
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
    <h5 class="fg-fgd"><?php the_field('food_group_4');?></h5>
    <p class="fg-fgd" id="fgd"><?php the_field('food_group_description_4');?></p>
  </tr>



  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('sushi_&_sashimi_4') ):

  // loop through the rows of data
    while ( have_rows('sushi_&_sashimi_4') ) : the_row();

    ?>  

        <!--display a sub field value-->

     <tr>
        <td class="important"><?php the_sub_field('food_item');?></td>
        <td class="new"><?php the_sub_field('new_dish_sign');?></td>
        <td><?php the_sub_field('food_description');?></td>
        <td class="chilli" ><?php the_sub_field('hot_sign');?></td>
        <td class="veggie"><?php the_sub_field('vegetarien_sign');?></td>
        <td ><?php the_sub_field('portion_size_1');?></td>
        <td class="important"><?php the_sub_field('price_1');?></td>
        <td ><?php the_sub_field('portion_size_2');?>Pcs</td>
        <td class="important">£<?php the_sub_field('price_2');?></td>
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
    <h5 class="fg-fgd"><?php the_field('food_group_5');?></h5>
    <p class="fg-fgd" id="fgd"><?php the_field('food_group_description_5');?></p>
  </tr>



  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('sushi_&_sashimi_5') ):

  // loop through the rows of data
    while ( have_rows('sushi_&_sashimi_5') ) : the_row();

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
</div>	

<?php get_footer(); ?>