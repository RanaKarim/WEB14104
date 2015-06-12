<?php
/**
 * Template Name: find us 
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

      <div class="five columns">
        
        <div id="map-canvas"></div>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        
        <script>
           function initialize() {

                var mapCanvas = document.getElementById('map-canvas');

                    var mapCanvas = document.getElementById('map-canvas');
                    //longitude 51.501679, latitude 0.005766//
                    var mapOptions = {
                    center: new google.maps.LatLng(51.418825, -0.193302),
                    zoom: 20,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                    }

                var map = new google.maps.Map(mapCanvas, mapOptions);
           }

           google.maps.event.addDomListener(window, 'load', initialize);

        </script>

      </div> 

<div class="four columns">
  <table class="openinghours">
    <tr>
      <th>Opening times</th>
    </tr>

  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('opening_hours') ):

  // loop through the rows of data
    while ( have_rows('opening_hours') ) : the_row();

    ?>  

        <!--display a sub field value-->
    <tr>
      <td><?php the_sub_field('day');?></td>
      <td><?php the_sub_field('opening_time');?>:00 - <?php the_sub_field('closing_time');?>:00 </td>
    </tr>
        

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

  </table>
</div>

<div class="row">
<div class="two columns">
  <ul class="contactdetails">

  <!-- PHP loop through the repeater -->  

     <?php

// check if the repeater field has rows of data
if( have_rows('contact_details') ):

  // loop through the rows of data
    while ( have_rows('contact_details') ) : the_row();

    ?>

        <!--display a sub field value-->
        <li class="phonenumber"><h4> 0<?php the_sub_field('phone_number');?> </h4></li>
        <li> <?php the_sub_field('door_number,_road_name');?> </li>
        <li> <?php the_sub_field('area');?> </li>
        <li> <?php the_sub_field('city_');?> </li>
        <li> <?php the_sub_field('postcode');?></li>
        <li><?php the_sub_field('country'); ?></li>

<?php        

    endwhile;

else :

    // no rows found

endif;

?>

</ul>
</div>
</div>




  


</div>	

<?php get_footer(); ?>