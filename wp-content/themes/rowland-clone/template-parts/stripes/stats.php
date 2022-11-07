<?php
/**
 * Stats Stripe
 *
 * @package basic template
 */


 $stat_stripe = get_field('stat_stripe');


        $image = get_sub_field('section_image');
?>
 <div class='stats-stripe'>
    <div class='full-container'>
        <div class='grid-x '>
            <div class='cell large-6 stats_image'>
                <?php echo wp_get_attachment_image($image,'','',array('class' => 'lazy','sizes' => '(max-width: 524px) 378px, (max-width: 768px) 608px, 1024px' )); ?>
            </div>         
            <div class='cell large-5 stats-content'>
                <h4 class="big-number"><?php echo get_sub_field('big_number'); ?></h4> 
                <hr class="stats-hr">
                <span class="stats-text"><?php echo get_sub_field('section_content'); ?></span>
            </div>
        </div>
    </div>
</div>