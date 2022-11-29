<?php
/**
 * Three Column List Stripe
 *
  * @package Basic template
 */

?>
<div class='three-columm-list-stripe'>
    <div class='grid-container '>       
        <div class='grid-x grid-margin-x'> 
            <div class='cell medium-10'> 
                <?php if(get_sub_field('section_title') !== null) { ?><h2 class='section-header-title'><?php echo get_sub_field('section_title'); ?></h2><?php }; ?>
                <?php if(get_sub_field('section_sub_title') !== null) { ?><span class="section-sub-title"><?php echo get_sub_field('section_sub_title'); ?></span><?php }; ?>
            </div>   
            <?php $list = get_sub_field('three_column_list'); ?>
            <div class='cell small-12 three-column-list'> 
            <?php echo $list; ?>
            </div>
        </div>  
    </div>
</div>  