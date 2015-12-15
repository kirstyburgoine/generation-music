	<?php 
	// used in index.php

	//Main grid of images to rorate on homepage

		$image1 = get_field ('homepage_image_1');
		$image2 = get_field ('homepage_image_2');
		$image3 = get_field ('homepage_image_3');
		$image4 = get_field ('homepage_image_4');
		$image5 = get_field ('homepage_image_5');
		$image6 = get_field ('homepage_image_6');
		$image7 = get_field ('homepage_image_7');
		$image8 = get_field ('homepage_image_8');
		$image9 = get_field ('homepage_image_9'); ?>
			
			<div id="ri-grid" class="ri-grid ri-grid-size-2">
				<ul>
					
				    <?php if ( $image1 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image1['sizes']['home-image']; ?>" alt="<?php echo $image1['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>

				    <?php if ( $image2 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image2['sizes']['home-image']; ?>" alt="<?php echo $image2['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>

				    <?php if ( $image3 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image3['sizes']['home-image']; ?>" alt="<?php echo $image3['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>

				    <?php if ( $image4 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image4['sizes']['home-image']; ?>" alt="<?php echo $image4['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>

				    <?php if ( $image5 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image5['sizes']['home-image']; ?>" alt="<?php echo $image5['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>

				    <?php if ( $image6 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image6['sizes']['home-image']; ?>" alt="<?php echo $image6['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>
				   	<?php if ( $image7 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image7['sizes']['home-image']; ?>" alt="<?php echo $image7['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>

				    <?php if ( $image8 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image8['sizes']['home-image']; ?>" alt="<?php echo $image8['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>

				    <?php if ( $image9 ) : ?>
				    <li>
				        <a href="#"><img src="<?php echo $image9['sizes']['home-image']; ?>" alt="<?php echo $image9['alt']; ?>" /></a>
				    </li>
				    <?php endif; ?>
				</ul>
			</div>