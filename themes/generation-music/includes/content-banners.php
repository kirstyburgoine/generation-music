<?php
// used in inlcudes/content-header-content.php

// If there is a banner for each page show tha
    $show_banner = get_field('show_banner');
    if ( $show_banner == 'Yes') : 

    $image1 = get_field ('header_image_1');
    $image2 = get_field ('header_image_2');
    $image3 = get_field ('header_image_3');
    $image4 = get_field ('header_image_4');
    $image5 = get_field ('header_image_5');
    $image6 = get_field ('header_image_6');

    // Else get the details for the default banner
    else :

        $show_banner = get_field('show_banner','options');
        if ( $show_banner == 'Yes') : 

        $image1 = get_field ('header_image_1','options');
        $image2 = get_field ('header_image_2','options');
        $image3 = get_field ('header_image_3','options');
        $image4 = get_field ('header_image_4','options');
        $image5 = get_field ('header_image_5','options');
        $image6 = get_field ('header_image_6','options');

        endif;
    endif;

    if ( $show_banner == 'Yes') : 
    ?>
    <div id="owl" class="owl-carousel">
        
        <?php if ( $image1 ) : ?>
        <div class="item">
            <img src="<?php echo $image1['sizes']['banner-image']; ?>" alt="<?php echo $image1['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php if ( $image2 ) : ?>
        <div class="item">
            <img src="<?php echo $image2['sizes']['banner-image']; ?>" alt="<?php echo $image2['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php if ( $image3 ) : ?>
        <div class="item">
            <img src="<?php echo $image3['sizes']['banner-image']; ?>" alt="<?php echo $image3['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php if ( $image4 ) : ?>
        <div class="item">
            <img src="<?php echo $image4['sizes']['banner-image']; ?>" alt="<?php echo $image4['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php if ( $image5 ) : ?>
        <div class="item">
            <img src="<?php echo $image5['sizes']['banner-image']; ?>" alt="<?php echo $image5['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php if ( $image6 ) : ?>
        <div class="item">
            <img src="<?php echo $image6['sizes']['banner-image']; ?>" alt="<?php echo $image6['alt']; ?>" />
        </div>
        <?php endif; ?>

    </div>

    <?php endif; ?>