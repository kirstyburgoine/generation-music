<?php
$company_number = get_field('company_number', 'options');
$facebook_page = get_field('facebook_page', 'options');
$twitter_account = get_field('twitter_account', 'options');
$pinterest_account = get_field('pinterest_account', 'options');
$youtube_account = get_field('youtube_account', 'options');
$vimeo_account = get_field('vimeo_account', 'options');
$googleplus_page = get_field('googleplus_page', 'options');
$contact_email = get_field('contact_email', 'options');
$contact_telephone = get_field('contact_telephone', 'options');
?>

    <ul class="social">
            <?php if ($contact_telephone) : ?><li><a href="call:<?php echo $contact_telephone; ?>" class="ss-icon ss-social-circle">telephone</a></li><?php endif; ?>
            <?php if ($contact_email) : ?><li><a href="mailto:<?php echo $contact_email; ?>" class="ss-icon ss-social-circle">email</a></li><?php endif; ?>
            <?php if ($twitter_account) : ?><li><a href="<?php echo $twitter_account; ?>" class="ss-icon ss-social-circle" target="_blank">twitter</a></li><?php endif; ?>
            <?php if ($facebook_page) : ?><li><a href="<?php echo $facebook_page; ?>" class="ss-icon ss-social-circle" target="_blank">facebook</a></li><?php endif; ?>
            <?php if ($googleplus_page) : ?><li><a href="<?php echo $googleplus_page; ?>" class="ss-icon ss-social-circle" target="_blank">google+</a></li><?php endif; ?>
            <?php if ($pinterest_account) : ?><li><a href="<?php echo $pinterest_account; ?>" class="ss-icon ss-social-circle" target="_blank">pinterest</a></li><?php endif; ?>
            <?php if ($youtube_account) : ?><li><a href="<?php echo $youtube_account; ?>" class="ss-icon ss-social-circle" target="_blank">youtube</a></li><?php endif; ?>
            <?php if ($vimeo_account) : ?><li><a href="<?php echo $vimeo_account; ?>" class="ss-icon ss-social-circle" target="_blank">vimeo</a></li><?php endif; ?>
    </ul>