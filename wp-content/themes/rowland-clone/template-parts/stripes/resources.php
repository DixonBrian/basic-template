<?php
/**
 * resource Stripe
 *
  * @package Basic template
 */

    $section = get_sub_field('resource_section');

?>
<section id="<?php echo str_replace(" ", "_", strtolower($section["section_title"])); ?>" class="resources-stripe">
  <div class="grid-container">
    <div class="grid-x margin-grid-x">
      <div class="cell medium-7 resource-title">
        <?php echo "<h3>".$section["section_title"]."</h3>"? :"";  ?>
      </div>
      <div class="medium-5 cell resouce-link">
        <?php if($section["link"]){
          echo '<a href="'.$section["link"]["url"].'" class="simple-btn">'.$section["link"]["title"].'</a>';
        } ?>
      </div>
      <div class="small-12">
        <?php echo $section["section_subtitle"]; ?>
      </div>
    </div>
    <div class="grid-x margin-grid-x resource-block">
      <?php if($section["resource"]){
        foreach ($section["resource"] as $contents) {
          //var_dump($contents['document_or_link']);
          if($contents["link"] or $contents["document_link"]){
            echo '<div class="cell large-4 medium-6">';
            if($contents['document_or_link'] == 'document'){
              if($contents["document_link"]){
                echo '<ul class="resources__document-list">';
                echo '<li><a href="'.$contents["document_link"]["url"].'" target="_blank" class="simple-btn">'.$contents["document_link"]["title"].'</a></li>'? :"";
                echo '</ul>';
              }
            }
            else {
              if($contents["link"]){
                echo '<ul class="resources__download-list">';
                echo '<li><a href="'.$contents["link"]["url"].'" target="_blank" class="simple-btn">'.$contents["link"]["title"].'</a></li>'? :"";
                echo '</ul>';
              }
            }
            echo '</div>';
          }
        }
      } ?>
    </div>
  </div>
</section>