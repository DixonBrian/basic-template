<?php
/**
 * General Content Stripe
 *
  * @package Basic template
 */

$image_id = get_sub_field('section_image');
$images = wp_get_attachment_image($image_id,'','',array('sizes' => '(max-width: 524px) 378px, (max-width: 768px) 768px, 1024px' ));
$button_link = get_sub_field('section_link');
?>

<div class='general-content-stripe'>
    <div class='grid-container '> 
   <?php if(get_sub_field('show_blue_stripe')){ ?> 
        <hr class='stripe-rule'> 
    <?php }; ?>        
        <div class='grid-x grid-margin-x'> 
        <?php if ($images){ ?>
            <div class='cell large-6 large-order-1 medium-order-2 small-order-2 section-content-image'> 
                <?php if(get_sub_field('section_header') !== null) { ?><h2 class='section-title'><?php echo get_sub_field('section_header'); ?></h2><?php }; ?>
                <?php if(get_sub_field('section_sub_header') !== null) { ?><h3 class='section-sub-title'> <?php echo get_sub_field('section_sub_header'); ?></h3><?php }; ?>
                <span class='section-content'><?php echo get_sub_field('section_content'); ?></span>
                  <?php if (isset($button_link['url'])){ ?><a href="<?php echo $button_link['url']; ?>" class='section-image-link button' target='<?php echo $button_link['target']; ?>'><span><?php echo $button_link['title']; ?></span></a><?php }; ?>
            </div>
            <div class='cell large-order-2 medium-order-1 small-order-1 large-6 image-section'> 
                <?php echo $images; ?>
            </div>
            <?php } else { ?>
            <div class='cell large-9 section-content'> 
                <?php if(get_sub_field('section_header') !== null) { ?><h2 class='section-title'><?php echo get_sub_field('section_header'); ?></h2><?php }; ?>
                <?php if(get_sub_field('section_sub_header') !== null) { ?><h3 class='section-sub-title'> <?php echo get_sub_field('section_sub_header'); ?></h3><?php }; ?>
                <span class='setion-content'><?php echo get_sub_field('section_content'); ?></span>
                 <?php if (isset($button_link['url'])){ ?>
                 <a aria-label="<?php echo get_sub_field('section_header'); ?>" href="<?php echo $button_link['url']; ?>" class='section-image-link button' target='<?php echo $button_link['target']; ?>'><span><?php echo $button_link['title']; ?></span></a>
                 <?php }; ?>
            </div>
            <?php }; ?>
        </div>
    </div>
</div>