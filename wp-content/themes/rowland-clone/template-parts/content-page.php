<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rowland-Clone
 */

?>


<section id="page-content">
            <div class='stripes'>
                <?php 
                // are there any rows within the flexible content?
            if( have_rows('flexible_content') ): 
                global $zindex;
                $zindex = 1000;

                // loop through all the rows of flexible content
                while ( have_rows('flexible_content') ) : the_row();

                    // get the row layout
                    $row_layout = get_row_layout();
                    
                    // get template parts based on the row layout
                    switch ($row_layout){
                        // General Content Stripe
                        case 'image_copy':
                            get_template_part('template-parts/stripes/image-copy');
                            break;
                        case 'cta_stripe':
                            get_template_part('template-parts/stripes/cta');
                            break;
                        case 'full_width_image':
                            get_template_part('template-parts/stripes/full-width-image');
                            break;    

                        case 'entry_block_stripe':
                            get_template_part('template-parts/stripes/entery-blocks');
                            break;
                        case '50_50_image':
                            get_template_part('template-parts/stripes/5050');
                            break;                               
                        case 'stats_stripe':
                            get_template_part('template-parts/stripes/stats');
                            break; 
                        case 'quote_stripe':
                            get_template_part('template-parts/stripes/quote');
                            break;  
                        case 'faq':
                            get_template_part('template-parts/stripes/faq');
                            break;   
                        case 'feature_benefit':
                            get_template_part('template-parts/stripes/feature-benefit');
                            break;  
                        case 'general_content':
                            get_template_part('template-parts/stripes/general-content');
                            break;       
                        case 'stat_stripe':
                            get_template_part('template-parts/stripes/stats');
                            break;   
                        case 'faq_stripe':
                            get_template_part('template-parts/stripes/faq');
                            break;  
                        case 'resources':
                            get_template_part('template-parts/stripes/resources');
                            break;   
                        case 'staff_stripe':
                            get_template_part('template-parts/stripes/staff-stripe');
                            break; 
                        case 'three_column_list':
                            get_template_part('template-parts/stripes/three-column-list');
                            break;            
                        }
                    endwhile; // close the loop of flexible content
                endif; // close flexible content conditional
            ?>
    </div>
    
</section>