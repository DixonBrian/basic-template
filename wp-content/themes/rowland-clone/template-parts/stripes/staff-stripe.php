<div class='staff-stripe'>
    <div class='grid-container '> 
       <?php if(get_sub_field('show_stripe') == True ) { ?>
            <hr class='stripe-rule'>        
        <?php }; ?>       
        <div class='grid-x grid-margin-x'> 
            <div class='cell large-12'> 
                <?php if(get_sub_field('section_header') !== null) { ?><h2 class='section-header-title'><?php echo get_sub_field('section_header'); ?></h2><?php }; ?>
                <?php if(get_sub_field('section_sub_header') !== null) { ?><span class="section-sub-title"><?php echo get_sub_field('section_sub_header'); ?></span><?php }; ?>
            </div>   
            <?php
            $staffs = get_sub_field('staff_card');
              $i = 1;
            foreach ($staffs as $card) {
            $image_id = $card['staff_image'];
                $images =  wp_get_attachment_image($image_id,'','',array('sizes' => '(max-width: 524px) 378px, 768px' ));
              
            ?>
            <div class='cell large-3 medium-5 small-11 staff-<?php echo $i; ?>'> 
                <?php echo $images; ?>
                <h3 class='staff-name'><?php echo $card['staff_name']; ?></h3>
                <?php if($card['staff_title'] ) { ?><span class="staff-title"><?php echo $card['staff_title']; ?></span><?php }; ?>
    
                <?php if($card['staff_email'] ) { ?><a href="mailto:<?php echo $card['staff_email']; ?>" class='staff-link staff-email' target='<?php echo $button_link['target']; ?>'><span>Email - <?php echo $card['staff_email']; ?></span></a><?php }; ?>
                <br>
                <?php if($card['staff_phone'] ) { ?><a href="tel:<?php echo $card['staff_phone']; ?>" class='staff-link staff-phone' ><span>Phone - <?php echo $card['staff_phone']; ?></span></a><?php }; ?>
                <br>
                <?php if($card['staff_linkedin']) { ?>
                    <hr class="staff-hr">
                    <a href="<?php echo $card['staff_linkedin']; ?>" class='staff-link staff-linkedin' target='<?php echo $button_link['target']; ?>'><span>Linkedin</span></a>
                <?php }; ?>

            </div>
            <?php
        $i ++;
        }; ?>
        </div>  
    </div>
</div>  