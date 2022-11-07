<?php
/**
 * cta Stripe
 *
  * @package Basic template
 */

$section_title = get_sub_field('section_title');
$faqs = get_sub_field('faqs');

?>



<div class='faq-stripe '  > 
     <div class='grid-container'> 
          <div class='grid-x  grid-margin-x '>
                <div class='cell large-12 large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1 <?php if (empty ($section_title)) echo 'hide-me' ?>' >
                    <div class='faq-title '>  
                        <h2 class="faq-title"><?php if (!empty ($section_title)) echo $section_title; ?></h2>
                    </div> <!------------------------ closes .grid-y ------------------------>
                </div> <!-- closes cell -->
              
               <div class='cell large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1' >
                    <div class='faq-content '> 
 
                                <ul class="accordion" data-accordion data-allow-all-closed="true">
                                    <?php foreach($faqs as $faq):

                                        $accordion_title = $faq ['accordion_title'];
                                        $accordion_body = $faq ['accordion_body'];
                                    ?>  
                                    <li class="accordion-item " data-accordion-item>
                                        <!-- Accordion tab title -->
                                        <a href="#" class="accordion-title"><div class="faq-question"><?php echo $accordion_title; ?></div></a>
                                        <!-- Accordion tab content -->
                                        <div class="accordion-content" data-tab-content>
                                        <p class="faq-answer"><?php echo $accordion_body; ?></p>
                                        </div>
                                    </li>
                                    <!-- ... -->
                                            <?php endforeach; ?>
                                </ul>   
                    </div> <!------------------------ closes .grid-y ------------------------>
              </div>
          </div><!------------------------ closes .grid-x ------------------------>
     </div><!------------------------ closes .grid-container ------------------------>
</div><!------------------------ closes .success-stripe ------------------------>

