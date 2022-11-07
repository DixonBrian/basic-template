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
                        case 'general_content':
                            get_template_part('template-parts/stripes/general-content');
                            break;
                        case 'cta_stripe':
                            get_template_part('template-parts/stripes/cta');
                            break;
                        case 'full_width_image':
                            get_template_part('template-parts/stripes/full-width-image');
                            break;    
                        // case 'success_story_stripe':
                            // get_template_part('template-parts/stripes/success');
                           // break;   
                        case 'stat_stripe':
                            get_template_part('template-parts/stripes/stats');
                            break;
                        case 'news_stripe':
                            get_template_part('template-parts/stripes/news_stripe');
                            break;
                        case 'next_steps_stripe':
                            get_template_part('template-parts/stripes/next');
                            break;    
                        case 'resource_and_programs_stripe':
                            get_template_part('template-parts/stripes/resource');
                            break;
                        case 'quote_stripe':
                            get_template_part('template-parts/stripes/quote');
                             break;
                        case 'meet_our_staff_stripe':
                            get_template_part('template-parts/stripes/staff');
                            break;
                        case 'faqs_stripe':
                            get_template_part('template-parts/stripes/faq');
                            break;                               

                        }
                    endwhile; // close the loop of flexible content
                
                endif; // close flexible content conditional
            ?>
  
    </div>
</section>