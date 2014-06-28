<?php 
  //dpm($submitted);
  //dpm($content);
  if(!empty($content['field_image']['#items'][0]['uri'])){        
?>
<!--img -->
  <div class="large-8 medium-16 small-15 column large-centered medium-centered small-centered">
      <div class="image">
      <img src="<?php echo file_create_url($content['field_image']['#items'][0]['uri']); ?>" />
      </div>
  </div>
<!-- img -->
<?php } ?>
<!--detalis -->
  <div class="large-8 medium-15 small-15 column large-centered medium-centered small-centered">
      <?php 
          if ($submitted) {
            echo "<div class='date_news'>".date( "F j, Y",$node->created)."</div>";
          } 
      ?>
      <div class="para">
          <span><?php echo $title; ?></span>
      </div>
     <?php echo $content['body']['#items'][0]['value']; ?>
  </div>
<!-- details -->
