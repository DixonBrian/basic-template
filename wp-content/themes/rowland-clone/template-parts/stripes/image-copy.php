<?php
/**
 * Image Copy Stripe
 *
  * @package Basic template
 */


 ?>

<div class='image-copy-stripe'>
    <div class='grid-container '>
    <?php if(get_sub_field('show_stripe') == True ) { ?>
    <hr class='stripe-rule'>        
    <?php }; ?>
    <div class='grid-x grid-margin-x'> 
            <div class='cell large-12'> 
                <h2 class='section-header-title'><?php echo get_sub_field('section_title'); ?></h2>
                <?php if (get_sub_field('section_subtitle')){ ?><span class="section-sub-title"><?php echo get_sub_field('section_subtitle'); ?></span><?php };?>
            </div>        
    <?php    
    
    if (get_sub_field('number_of_tiles') == 'one'){
    
        $select_ex = get_sub_field('select_one');
        $one = get_sub_field('one_tile');
        $i = 1;
        $cropped_image_id = $one['section_image'];
        $start_dates = $one['event_start_date'];
        $end_dates = $one['event_end_date'];
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));        
      
        ?>
            <div class='cell large-6 image-<?php echo $i; ?>-section'> 
                <?php if($cropped_image_id){echo $cropped_image;}; ?>
            </div>
            <div class='cell large-6 copy-<?php echo $i; ?>-section'> 
                <?php if ( $one['section_title']) : ?><h3 class='copy-title'><?php echo $one['section_title'] ?></h3><?php endif; ?>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?>
                <span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) { echo "-" . $end_dates; }; ?></span><?php }; ?>
                <br>
                <?php if ( $one['section_subtitle']) : ?><h4 class="gallery-info"> <?php echo $one['section_subtitle']; ?></h4><?php endif; ?>
                <span class='copy-content'><?php echo $one['section_content'] ?></span>
            </div>
    <?php   
 } elseif (get_sub_field('number_of_tiles') == 'two') {
        $select_ex = get_sub_field('select_two');
        $two = get_sub_field('two_tiles');
        $i = 1;

    foreach ($two as $single) {

        $cropped_image_id = $single['section_image'];
        $start_dates = $single['event_start_date'];
        $end_dates = $single['event_end_date'];
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));   
      
        ?>
            <div class='cell large-6 copy-<?php echo $i; ?>-section'> 
                <a aria-label="<?php echo $single['section_title']; ?>" href="<?php echo $single['section_link']['url']; ?>" >
                    <?php if($cropped_image_id){echo $cropped_image;}; ?>
                </a>
                 <?php if ( $single['section_title']) : ?><h3 class='copy-title'><?php echo $single['section_title']; ?></h3><?php endif; ?>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?><span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) { echo "-" . $end_dates; }; ?></span><?php }; ?>
                <br>
                <?php if ( $single['section_subtitle']) : ?><h4 class="gallery-info"><?php echo $single['section_subtitle']; ?></h4><?php endif; ?>
                <?php if ( $single['section_link']) : ?><a aria-label="<?php echo $single['section_title']; ?>" href="<?php echo $single['section_link']['url']; ?>" class='section-image-link button'><span><?php echo $single['section_link']['title']; ?></span></a><?php endif; ?>
            </div>
    <?php $i ++;  }; 
    } elseif (get_sub_field('number_of_tiles') == 'three') {
        $three = get_sub_field('three_tiles');
        $i = 1;

    foreach ($three as $single) {

        $cropped_image_id = $single['section_image'];
        $start_dates = $single['event_start_date'];
        $end_dates = $single['event_end_date'];
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));    
            ?>
            <div class='cell large-4 copy-<?php echo $i; ?>-section'> 
                <a aria-label="<?php echo $single['section_title']; ?>" href="<?php echo $single['section_link']['url']; ?>" >
                    <?php if($cropped_image_id){echo $cropped_image;}; ?>
                </a>
                 <?php if ( $single['section_title']) : ?><h3 class='copy-title'><?php echo $single['section_title']; ?></h3><?php endif; ?>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?> <span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) { echo  "-" . $end_dates; }; ?></span><?php }; ?>
                <br>
                <?php if ( $single['section_subtitle']) : ?><h4 class="gallery-info"><?php echo $single['section_subtitle'];  ?></h4><?php endif; ?>
                <br>
               <?php if ( $single['section_link']) : ?> <a aria-label="<?php echo $single['section_title']; ?>" href="<?php echo $single['section_link']['url']; ?>" class='section-image-link button'><span><?php echo $single['section_link']['title']; ?></span></a><?php endif; ?>
            </div>
     <?php $i ++; }; 
    } elseif (get_sub_field('number_of_tiles') == 'four') {
        $four = get_sub_field('five_tiles');
        $i = 1;

    foreach ($four as $single) {
        $cropped_image_id = $single['section_image'];
        $start_dates = $single['event_start_date'];
        $end_dates = $single['event_end_date'];
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));   
?>
            <div class='cell large-3 medium-5 copy-<?php echo $i; ?>-section'> 
                <a aria-label="<?php echo $single['section_title']; ?>" href="<?php echo $single['section_link']['url']; ?>" >
                    <?php if($cropped_image_id){echo $cropped_image;} else { echo $images;}; ?>
                </a>
                <?php if ( $single['section_title']) : ?><h3 class='copy-title'><?php echo $single['section_title']; ?></h3><?php endif; ?>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?><span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) {echo "-" . $end_dates; }; ?></span><?php }; ?>
                <?php if ( $single['section_subtitle']) : ?><h4 class="gallery-info"><?php echo $single['section_subtitle']; ?></h4><?php endif; ?>
                <br>
              <?php if ( $single['section_link']) : ?> <a aria-label="<?php echo $single['section_title']; ?>" href="<?php echo $single['section_link']['url']; ?>" class='section-image-link button'><span><?php echo $single['section_link']['title']; ?></span></a><?php endif; ?>
            </div>
     <?php $i ++; }; 
    }; ?>
      </div>
    </div>
</div>