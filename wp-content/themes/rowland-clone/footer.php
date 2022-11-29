<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Palmer-Museum
 */

?>
    <footer id="colophon" class="site-footer">
        <section id="primary-footer" class="grid-container" >
             <div class='grid-x grid-padding-x '> 
                <div class='cell medium-3 address'> 
                    <?php 
                        $footer = get_field('identity', 'options');
                        $footer_social = get_field('social','options');
                    ?>
                    <address>
                        <?php echo $footer['address']; ?>
                    </address>
                </div>
                <div class='cell medium-6 large-offset-1 large-3 hours'> 
                <?php echo get_field('hours', 'options'); ?>
                </div>
                <div class='cell medium-12 large-3 social'> 
                    <div class='footer-links'> 
                        
                    <?php $footer_links = get_field('footer_links', 'options');
                        if(isset($footer_links)&& is_array($footer_links)):
                        foreach($footer_links as $link):
                         ?>
                         <a href="<?php echo $link['footer_link']['url'] ?>" target='<?php echo $link['footer_link']['target'] ?>'><?php echo $link['footer_link']['title'] ?></a>
                         </br>
                         <?php endforeach; endif; ?>
                    </div>
                    <div class='connect'> 
                        <?php  $footer_social['social_icons'];
                        if(isset($footer_social['social_icons'])&& is_array($footer_social['social_icons'])):
                        foreach($footer_social['social_icons'] as $tiles):
                        ?>
                        <a   aria-label="Link To <?php echo $tiles['link_title'];?>" target='<?php echo $tiles['media_link']['target'];?>' href="<?php echo $tiles['media_link']['url'];?> "><span class="social-media-title">Link To <?php echo $tiles['link_title'];?></span><?php echo $tiles['font_awesome_icons']; ?></a>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
        </section>
<?php wp_footer(); ?>
        <!---------------- Jquery scripts ---------------->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="/wp-content/themes/rowland-clone/builds/development/js/custom.js"></script>
            <script type="text/javascript">
        $(document).ready(function() {
            $(document).foundation(); 
            // Get the button, and when the user clicks on it, execute myFunction
            document.getElementById("searchfield").onfocus=function() {showRadio();};
            $(document).on("click",function(e){
                    if ($(e.target).is(".search-field, .search-radio-buttons *, .search-radio-buttons, #searchform") === false){
                            $("#search-radio-buttons").last().removeClass("show"); 
                    }
            });
            /* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
            function showRadio() {
            document.getElementById("search-radio-buttons").classList.add("show");
            $('#search-submit span').html('');
            }
        });
        </script>
</body>
</html>
