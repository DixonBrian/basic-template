<?php
/**
 * Call to action (CTA) Stripe
 *
 * @package Rowland - Template
 */
  $section_content = get_sub_field('cta_message'); 
  $button_link = get_sub_field('button_link');  
  $background_image = get_sub_field('background_image'); 
?> 
<div class='cta-stripe' style=" background-image: url('<?php echo $background_image['sizes']['hero-banner-home']; ?>'); height: 100%;">
<div class='grid-container '> 
    <div class="grid-x grid-margin-x align-middle cta-holder">
    <div class="cell middle-cell large-auto large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1 ">
            <?php echo $section_content; ?>
    </div>
    <div class="cell large-shrink align-middle large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1">        
            <a href="<?php echo $button_link['url']; ?>" class='cta-link button' target='<?php echo $button_link['target']; ?>' aria-label="<?php echo $button_link['title']; ?> - link opens in a new tab"><span><?php echo $button_link['title']; ?></span><i class="fa drk-orange fa-chevron-right"></i></a>
    </div>  
    </div>
</div>
</div><!-- closes cta-stripe -->