<!-- Site Container Starts -->
 <div id="site-container">
  <div class="off-canvas-wrap" data-offcanvas> 
    <div class="inner-wrap"> 
      <?php if ($page['header']): ?>
        
          <?php print render($page['header']); ?>
        
      <?php endif; ?>
      

      <?php if ($show_messages && $messages): ?>
        <div id="console"><div class="limiter clearfix">
          <?php if ($show_messages && $messages): print $messages; endif; ?>
        </div></div>
      <?php endif; ?>
      
      <?php if ($site_name): ?>
      <!-- <div id="branding"><div class="limiter clearfix">
        <h1 class="site-name"><?php //print $site_name ?></h1>
      </div></div> -->
      <?php endif; ?>

      
        
        <?php if (isset($secondary_menu)) : ?>
          <div id="navigation"><div class="limiter clearfix">
          <?php //print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => 'links secondary-menu'), 'heading' => array('text' => t('Secondary menu'), 'level' => 'h2', 'class' => array('element-invisible')))) ?>
            </div></div>
        <?php endif; ?>


      <div id="header-saperator"></div>

      <?php if (!drupal_is_front_page()) { ?>
       <!-- bread crumbs -->
            <?php if ($breadcrumb) print $breadcrumb; ?>
        <!-- bread crumbs -->
      <?php } ?>

      <?php if ($page['slider_content']): ?>
      <?php  
         $pathname = drupal_get_path_alias(current_path()); 
        if(strpos($pathname,'locate-us')!== false){
             print render($page['slider_content']); 
        } 
        else { 
        ?>
        <div id="wwd-banner" class="">
          <?php print render($page['slider_content']); ?>
        </div>
        <?php } ?>
      <?php endif; ?>

        
          
          <?php //print render($title_prefix); ?>
          <?php //if ($title): ?><?php //print $title ?><?php //endif; ?>
          <?php //print render($title_suffix); ?>
          <?php if ($primary_local_tasks): ?><ul class="links clearfix primary-task"><?php print render($primary_local_tasks) ?></ul><?php endif; ?>
          <?php if ($secondary_local_tasks): ?><ul class="links clearfix secondary-task"><?php print render($secondary_local_tasks) ?></ul><?php endif; ?>
          <?php if ($action_links): ?><ul class="links clearfix action-link"><?php print render($action_links); ?></ul><?php endif; ?>
          
            <?php if (!drupal_is_front_page()) { ?>
              <div id="content">  
                <?php print render($page['content']); ?>
              </div>
            <?php } ?>

        <?php if ($page['after_content1']): ?>
          <div id="after_content1">
          <?php print render($page['after_content1']) ?>
          </div>
        <?php endif; ?>

        <?php if ($page['after_content2']): ?>
          <div id="after_content2"><?php print render($page['after_content2']) ?></div>
        <?php endif; ?>

        <?php if ($page['after_content3']): ?>
          <div id="after_content3"><?php print render($page['after_content3']) ?></div>
        <?php endif; ?>

        <?php if ($page['after_content4']): ?>
          <div id="after_content4"><?php print render($page['after_content4']) ?></div>
        <?php endif; ?>

        <!--   Newsletter Subscription  -->
        <?php if(drupal_is_front_page()) { ?>
          <?php if ($subscription_form): ?>
          <?php error_reporting (E_ALL & ~E_NOTICE & ~E_WARNING); ?>
          <?php print $subscription_form; ?>
          <?php endif; ?>
          <?php } else { ?>
          <div id="hidden-content" style="display:none;">
            <?php if ($subscription_form): ?>
            <?php error_reporting (E_ALL & ~E_NOTICE & ~E_WARNING); ?>
            <?php print $subscription_form; ?>
            <?php endif; ?>
          </div>
          <?php } ?>
        <!--   Newsletter Subscription  -->


        <?php if ($page['above_footer']): ?>
          <div id="above_footer"><?php print render($page['above_footer']) ?></div>
        <?php endif; ?>

        <?php print $feed_icons ?>
        <?php if ($page['footer']): ?>
          <?php print render($page['footer']) ;?>
         <?php endif; ?>
         
          <!-- close the off-canvas menu --> <a class="exit-off-canvas"></a> 
        </div>
    </div>
</div>

<!-- Site Container Ends -->

<?php 
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/vendor/modernizr.js', array('type' => 'file', 'weight' => -28));
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/foundation.min.js', array('type' => 'file','scope' => 'footer'));
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/flowtype.js', array('type' => 'file','scope' => 'footer'));
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/responsiveslides.js', array('type' => 'file','scope' => 'footer'));
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/jquery-ui.min.js', array('type' => 'file','scope' => 'footer'));
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/jquery.selectBoxIt.min.js', array('type' => 'file','scope' => 'footer'));
      //drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/superfish.js', 'file');
      //drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/easyaspie.min.js', 'file');
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/owl.carousel.js', array('type' => 'file','scope' => 'footer'));

      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/custom.js', array('type' => 'file','scope' => 'footer'));
      drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/rem.js', array('type' => 'file','scope' => 'footer'));
?>
    