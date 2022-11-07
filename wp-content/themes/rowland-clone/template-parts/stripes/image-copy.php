<?php 

 ?>

<div class='image-copy-stripe'>
    <div class='grid-container '>
    <?php if(get_sub_field('show_stripe') == True ) { ?>
    <hr class='stripe-rule'>        
    <?php }; ?>
    <div class='grid-x grid-margin-x'> 
    <?php if (get_sub_field('section_header')) { ?>
            <div class='cell large-12'> 
                <h2 class='section-header-title'><?php echo get_sub_field('section_header'); ?></h2>
                <?php if (get_sub_field('section_content')){ ?><span class="section-sub-title"><?php echo get_sub_field('section_content'); ?></span><?php };?>
            </div>        
    <?php    
        };
    if (get_sub_field('number_of_tiles') == 'one'){
    
        $select_ex = get_sub_field('select_one');
        $i = 1;
        foreach ($select_ex as $post) { 
        setup_postdata($post);
        $cropped_image_id = get_field('archive_image');
        $start_dates = get_field('event_start_date');
        $end_dates = get_field('event_end_date');
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));        
        $images = get_the_post_thumbnail($post->ID,'',array('sizes' => '(max-width: 524px) 378px, (max-width: 768px) 608px, 1024px' ));
        ?>
            <div class='cell large-6 image-<?php echo $i; ?>-section'> 
            <a aria-label="<?php echo get_field('full_title'); ?>" href="<?php echo basename(get_permalink()); ?>" >
                <?php if($cropped_image_id){echo $cropped_image;} else { echo $images;}; ?>
            </a>
            </div>
            <div class='cell large-6 copy-<?php echo $i; ?>-section'> 
                <h3 class='copy-title'><?php echo get_field('full_title'); ?></h3>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?><span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) { echo "-" . $end_dates; }; ?></span><?php }; ?>
                <br>
                <h4 class="gallery-info"> <?php echo get_field('gallery_info'); ?></h4>
                <br>
                <span class='copy-content'><?php echo get_field('archive_description'); ?></span>
            </div>
    <?php   wp_reset_postdata();
    };
 } elseif (get_sub_field('number_of_tiles') == 'two') {
        $select_ex = get_sub_field('select_two');
        $i = 1;
    foreach ($select_ex as $post) {
        setup_postdata($post);
        $cropped_image_id = get_field('archive_image'); 
        $start_dates = get_field('event_start_date');
        $end_dates = get_field('event_end_date');
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));   
        $images = get_the_post_thumbnail($post->ID,'',array('sizes' => '(max-width: 524px) 378px, (max-width: 768px) 608px, 1024px' ));
        ?>
            <div class='cell large-6 copy-<?php echo $i; ?>-section'> 
                <a aria-label="<?php echo get_field('full_title'); ?>" href="<?php echo basename(get_permalink()); ?>" >
                    <?php if($cropped_image_id){echo $cropped_image;} else { echo $images;}; ?>
                </a>
                <h3 class='copy-title'><?php echo get_field('full_title'); ?></h3>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?><span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) { echo "-" . $end_dates; }; ?></span><?php }; ?>
                <br>
                <h4 class="gallery-info"><?php echo get_field('gallery_info'); ?></h4>
                <br>
                <a aria-label="<?php echo get_field('full_title'); ?>" href="<?php echo basename(get_permalink()); ?>" class='section-image-link button'><span>Read More</span></a>
            </div>
    <?php $i ++; wp_reset_postdata();  }; 
    } elseif (get_sub_field('number_of_tiles') == 'three') {
$select_ex = get_sub_field('select_three');

 $i = 1;
    foreach ($select_ex as $post) {
        setup_postdata($post);
        $cropped_image_id = get_field('archive_image'); 
        $start_dates = get_field('event_start_date');
        $end_dates = get_field('event_end_date');
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));    
$images = get_the_post_thumbnail($post->ID,'',array('sizes' => '(max-width: 524px) 300px,  768px' ));
?>
            <div class='cell large-4 copy-<?php echo $i; ?>-section'> 
                <a aria-label="<?php echo get_field('full_title'); ?>" href="<?php echo basename(get_permalink()); ?>" >
                    <?php if($cropped_image_id){echo $cropped_image;} else { echo $images;}; ?>
                </a>
                <h3 class='copy-title'><?php echo get_field('full_title'); ?></h3>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?> <span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) { echo  "-" . $end_dates; }; ?></span><?php }; ?>
                <br>
                <h4 class="gallery-info"><?php echo get_field('gallery_info'); ?></h4>
                <br>
                <a aria-label="<?php echo get_field('full_title'); ?>" href="<?php echo basename(get_permalink()); ?>" class='section-image-link button' ><span>Read More</span></a>
            </div>
     <?php $i ++; wp_reset_postdata();  }; 
    } elseif (get_sub_field('number_of_tiles') == 'four') {
$select_ex = get_sub_field('select_four');

 $i = 1;
    foreach ($select_ex as $post) {
        setup_postdata($post);
        $cropped_image_id = get_field('archive_image'); 
        $start_dates = get_field('event_start_date');
        $end_dates = get_field('event_end_date');
        $cropped_image = wp_get_attachment_image($cropped_image_id,'','',array('sizes' => '(max-width: 524px) 378px, 1344px' ));   
$images = get_the_post_thumbnail($post->ID,'',array('sizes' => '(max-width: 524px) 378px, (max-width: 768px) 608px, 1024px' ));
?>
            <div class='cell large-3 medium-5 copy-<?php echo $i; ?>-section'> 
                <a aria-label="<?php echo get_field('full_title'); ?>" href="<?php echo basename(get_permalink()); ?>" >
                    <?php if($cropped_image_id){echo $cropped_image;} else { echo $images;}; ?>
                </a>
                <h3 class='copy-title'><?php echo get_field('full_title'); ?></h3>
                <hr class="_5050-tile">
            <?php if ($start_dates || $end_dates) { ?><span class="ex-dates"><?php if ($start_dates) { echo $start_dates; } if($end_dates) {echo "-" . $end_dates; }; ?></span><?php }; ?>
                <br>
                <h4 class="gallery-info"><?php echo get_field('gallery_info'); ?></h4>
                <br>
                <a aria-label="<?php echo get_field('full_title'); ?>" href="<?php echo basename(get_permalink()); ?>" class='section-image-link button' ><span>Read More</span></a>
            </div>
     <?php $i ++; wp_reset_postdata();  }; 
    }; ?>
      </div>
    </div>
</div>
