<?php
/**
 * cta Stripe
 *
  * @package Basic template
 */

$quote_text = get_sub_field('quote_text');
$quote_name = get_sub_field('quote_name');
$quote_title = get_sub_field('quote_title');

?>
<div class='quote-stripe' > 
    <div class='grid-container '> 
        <div class='grid-x  grid-margin-x '>
            <div class='cell quote-text large-offset-2 small-11 large-10'> 
                <div class="quote-marks"><img src="/wp-content/themes/rowland-clone/assets/images/quotemark.png" alt="Quotation marks">
                </div>
                <?php echo $quote_text; ?>
            </div>
            <hr class="quote-hr cell large-2 large-offset-2">
            <div class='cell large-3 large-offset-3 medium-offset-1'> 
                <span class="quote-name"><?php echo $quote_name; ?></span>
                <span class="quote-title"><?php echo $quote_title; ?></span>
            </div>
        </div>
    </div>
</div>

