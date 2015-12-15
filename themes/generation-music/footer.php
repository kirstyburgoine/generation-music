<footer id="colophon" role="contentinfo">

<?php 
if ( is_page('4') || is_home () ) : ?>
	<div class="site-footer">

		<div class="container">

			<?php
			get_template_part('includes/content', 'footer'); ?>

		<div class="seperator"></div>
		</div>

	</div>
<?php
else : ?>
	<div class="site-footer no-content">

		<div class="container">

			<div class="icon-container">
	            <img src="<?php echo get_template_directory_uri();?>/assets/img/house-bg.png" alt="" />
	        </div>
		</div>

	</div>
<?php
endif; ?>

	<div class="credits">

	<div class="credits-border">
	</div>

		<?php 
		$company_number = get_field('company_number', 'options');
		$address = get_field('company_address', 'options'); ?>

		<div class="container">

		    <?php
            wp_nav_menu( 
                array( 
                    'container' => 'false',
                    'menu_class' => 'nav navbar-nav footer-menu',
                    'theme_location' => 'secondary' 
               	) 
            ); ?>
            <div class="seperator"></div>

			<p class="alignleft">© <?php echo date('Y');?> ~ <?php bloginfo('name');?>. <?php if ( $company_number ) : ?>Registered in England & Wales. Company No:<?php echo $company_number; endif;?><?php if ( $address ) : ?> - <?php echo $address; endif;?><br />	
			<a href="http://www.kirstyburgoine.co.uk" title="Link to Kirsty Burgoine's website">Website by Kirsty Burgoine Ltd.</a></p>
				

			<div class="seperator"></div>

		</div>	



	</div>



</footer>









<a href="#" class="scrollup"><i class="ss-icon">navigateup</i></a>  
</body>


<?php

//  Custom Google map for the depot locations page
if ( is_page( '6' ) ) : ?>

<style>
#map-canvas {
    height: 600px;
    display: block;
    width: 100%;
    max-width: 100%;
  }
</style>

  <script>
  //  Google Maps
  //  =========================================== /

  function initialize() {


    var myLatlng = new google.maps.LatLng( 30.768096, 22.378065 ); 
    //var myLatlng = new google.maps.LatLng( 54.184709, -1.897371 ); 

    var locations = [
    <?php

    $count = 0;

    if ( have_rows('stockists') ) :
		while ( have_rows('stockists') ) : the_row(); 
		 $count++;

			// display a sub field value
			$name =	get_sub_field('name'); 
			$location =	get_sub_field('location');
			$region =	get_sub_field('region');  ?>

      ['<strong><?php echo $name["name"]; ?></strong><br><?php echo $region["region"]; ?>',<?php echo $location["lat"]; ?>, <?php echo $location["lng"]; ?>, <?php echo $count; ?>],
    <?php 
    	endwhile;
    endif;  ?>
     	];

    var mapOptions = {
      center: myLatlng,
      zoom: 2,
      scrollwheel: false,
      styles: [{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#004A94"},{"saturation":-100},{"gamma":2.15},{"lightness":12}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]
    };

    var infowindow = new google.maps.InfoWindow();

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    //var map = new google.maps.Map(document.getElementById('map-canvas'));

    var pinColor = "004A94";

    var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));

    // var marker = new google.maps.Marker({
    //     position: myLatlng,
    //     map: map,
    //     icon: pinImage
    // });

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

  }

    function loadScript() {
      var script = document.createElement('script');
      script.type = 'text/javascript';
      //script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp' + '&signed_in=false&callback=initialize';
      script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBkd_b_iddRwH2LV3tmwpbvarBTe9oz0wg&callback=initialize';
      document.body.appendChild(script);
    }
    
    window.onload = loadScript;
  </script>
<?php endif; ?>

<?php wp_footer(); ?>

</html>