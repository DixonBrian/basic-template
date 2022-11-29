<?php
/**
 * Feature Benefit Stripe
 *
  * @package Basic template
 */
?>
		<section class="feature-benefit-stripe">
			<div class="grid-container">
				<div class="grid-x">
					<div class="large-11">
						<h2 class="feature-benefit-title"><?php echo get_sub_field('section_title'); ?></h2>
					</div>
				</div>
				<div class="grid-x grid-margin-x">
					<div class="medium-6 left-column">
						<h3 class="left-column-title"><?php echo get_sub_field('left_column_header'); ?></h3>
					</div>
					<div class="medium-6 right-column">
						<h3 class="right-column-title"><?php echo get_sub_field('right_column_header'); ?></h3>
					</div>
				</div>
				<?php $benefits = get_sub_field('benefits');
                if($benefits): ?>
					<div class="better-result-info grid-container">
                        <div class="grid-x grid-margin-x">
						<?php foreach($benefits as $benefit):
                                        $benefit_text = $benefit['benefit_text'];
                                        $feature_text = $benefit['feature_title']; ?>
							
								<div class="medium-6 left-column">
									<h4 class="feature-text"><?php echo $feature_text; ?></h4>
								</div>
								<div class="medium-6 right-column">
 									<h4 class="benefit-text"><?php echo $benefit_text; ?></h4>
								</div>
							
						<?php endforeach; ?>
					    </div>
                    </div>
				<?php endif; ?>
			</div>
		</section>
