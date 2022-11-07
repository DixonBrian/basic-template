
<?php 
if (is_post_type_archive('programs')):
    $header_1 = get_field('header_1','options');
elseif(is_post_type_archive('success-stories')):
    $header_1 = get_field('header2_1','options');
else:
    $field_hero = get_fields(get_the_ID()); 
    $header_1 =$field_hero['select_header']['header_1'];
endif;
?>


<section class="header-1" >
    <div class="header__plus--pattern top" role="img" aria-label="PSU Plus pattern"  ></div>
  <?php
     
        $text_color = $header_1['text_color'];
        $image_id = $header_1['header_image']['id']; 
        $src = wp_get_attachment_image_src( $header_1['header_image']['id'],'large',""  ); 
        $src_mb = wp_get_attachment_image_src( $header_1['header_image']['id'],'',""  ); 
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE); 
        ?>
<?php if(wp_is_mobile()){ ?>
      <div class='hero-image' style='background-image:url(<?php echo $src[0]; ?>)'alt="<?php echo $image_alt; ?>">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                    <div class='cell large-7 large-offset-0 medium-offset-1 small-10 small-offset-1 header-text <?php echo $text_color; ?>' >
                        <?php if ($header_1['header_title']) : ?>
                            <h1 class="header-title"><?php echo $header_1['header_title']; ?></h1>
                        <?php endif; ?>
                    </div><!-- closes cell -->  
                    <div class="cell large-5 large-offset-1 medium-11 medium-offset-1 small-10 small-offset-1 <?php echo $text_color; ?>">
                            <?php if($header_1['header_content']): ?>
                                <hr class="header1">
                                <span class="header1-content"><?php echo $header_1['header_content'] ?></span>
                            <?php endif; ?>
                    </div>
                </div><!------------------------ closes .grid-x ------------------------>
            </div><!------------------------ closes .grid-container ------------------------>
        </div><!------------------------ closes .geader ------------------------>
  
    <div class='mobile-hero-image' style='background-image:url(<?php echo $header_1['header_image']['sizes']['hero-banner-home']; ?>)'alt="<?php echo $image_alt; ?>">
    </div>
  
<?php } else{ ;?>
    <div class='hero-image' style='background-image:url(<?php echo $src[0]; ?>)'alt="<?php echo $image_alt; ?>">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class='cell large-7 large-offset-0 medium-offset-1 small-10 small-offset-1 header-text <?php echo $text_color; ?>' >
                    <?php if ($header_1['header_title']) : ?>
                        <h1 class="header-title"><?php echo $header_1['header_title']; ?></h1>
                    <?php endif; ?>
                </div><!-- closes cell -->  
                <div class="cell large-5 large-offset-1 medium-8 medium-offset-2 small-10 small-offset-1 <?php echo $text_color; ?>">
                            <?php if($header_1['header_content']): ?>
                                <hr class="header1">
                                <span class="header1-content"><?php echo $header_1['header_content'] ?></span>
                        <?php endif; ?>
                </div>
            </div><!------------------------ closes .grid-x ------------------------>
        </div><!------------------------ closes .grid-container ------------------------>
    </div><!------------------------ closes .header ------------------------>

<?php }; ?>    
</section>
<?php if(is_front_page()): ?>
        <!--div class="programs__plus--pattern content bottom" role="img" aria-label="PSU Plus pattern"  ></div -->
        <?php endif; ?>
