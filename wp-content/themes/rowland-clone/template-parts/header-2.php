
<?php $field_hero = get_fields(get_the_ID()); ?>
<section class="header-2" >

  <?php
$post = get_post( $post );
 $iframe = $field_hero['select_header']['header_2']['video_embed'];
?>

    <div class="grid-container full">
        <div class="grid-x">                  
            <div class="cell large-6 large-offset-0 medium-10 medium-offset-1 small-10 small-offset-1 header__2-text-container">
                <div class="header__2-text">
                    <?php
                    $title = $field_hero['select_header']['header_2']['header_title'];
                    if($title) : ?>
                    <h1 class="header-title"><?php echo $title; ?></h1>
                    <?php endif; ?>
                </div>
            </div>
            <div class='cell large-6 header__2-image'> 
                <div class='header__2-image-container'> 
                    <div class='image'> 
                        <?php if($iframe): ?>
				<div class="video-thumbnails ">
                    <?php echo $iframe ?>
				</div>
                    <?php else: $image_id = get_post_thumbnail_id($post->ID);
                        echo get_the_post_thumbnail( $post_id, '','',['class' => ' object-fit lazy']); 
                        endif;
                        ?>
                    </div>                
                </div>                
            </div>
        </div>
    </div>
</section>