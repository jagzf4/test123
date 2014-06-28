<?php 
global $base_url;
$theme_name = 'skanem';
$settings = variable_get('theme_' . $theme_name . '_settings', array());
$main_menu = menu_navigation_links('main-menu');
$header_menu = menu_navigation_links('menu-header-menu');
 
if (isset($settings['logo_path'])) {
  $logo = file_create_url($settings['logo_path']);
}
?>

<!-- mobile -->
<aside class="left-off-canvas-menu ipad_up"> 
<!-- whatever you want goes here --> 
	
    <div class="menu-wrapper">

        <a href="#menup" class="menu-link active"> &nbsp;<span class="ico-caret-down right" aria-hidden="true"></span>
        </a>
        <nav id="menup" role="navigation" class="active">
            <div class="menu">
                <ul class="menu">
                    <li class="has-subnav">
                        <a href="#">Who We Are </a>
                        <?php  $who_we_are = menu_navigation_links('menu-who-we-are');

                        if (isset($who_we_are)) : ?>
                        <a href="#">WHO WE ARE</a>    
                        <?php print theme('links__system_menu-what-we-do', array('links' => $who_we_are, 'attributes' => array('class' => 'sub-menu'))) ?>
                        <?php endif; ?>
                    </li>
                    <li class=" has-subnav">
                        <?php   
                         $what_we_do = menu_navigation_links('menu-what-we-do');
                        if (isset($what_we_do)) : ?>
                          <a href="">WHAT WE DO</a>
                          <?php print theme('links__system_menu-what-we-do', array('links' => $what_we_do, 'attributes' => array('class' => 'sub-menu'))) ?>
                        <?php endif; ?>
                    </li>
                    <li class="has-subnav">
                       <?php   
                         $why_choose_us = menu_navigation_links('menu-why-choose-us');
                        if (isset($why_choose_us)) : ?>
                          <a href="">WHY CHOOSE US</a>
                          <?php print theme('links__system_menu-why_choose_us', array('links' => $why_choose_us, 'attributes' => array('class' => 'sub-menu'))) ?>
                        <?php endif; ?>
                    </li>
                    <li class="">
                        <a href="#">CSR </a>
                    </li>
                    <li  class="has-subnav">
                        <?php   
                         $locate_us = menu_navigation_links('menu-locate-us');
                        if (isset($why_choose_us)) : ?>
                          <a href="">LOCATE US</a>
                          <?php print theme('links__system_menu-why_choose_us', array('links' => $locate_us, 'attributes' => array('class' => 'sub-menu'))) ?>
                        <?php endif; ?>
                    </li>
                    <li  class="has-subnav">
                        <?php   
                         $press_room = menu_navigation_links('menu-press-room');
                        if (isset($press_room)) : ?>
                          <a href="">PRESS ROOM</a>
                          <?php print theme('links__system_menu-press_room', array('links' => $press_room, 'attributes' => array('class' => 'sub-menu'))) ?>
                        <?php endif; ?>
                    </li>
                    <li  class="has-subnav">
                       <?php   
                         $careers= menu_navigation_links('menu-careers');
                        if (isset($careers)) : ?>
                          <a href="">CAREERS</a>
                          <?php print theme('links__system_menu-careers', array('links' => $careers, 'attributes' => array('class' => 'sub-menu'))) ?>
                        <?php endif; ?>
                    </li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#" class="navlast">Contact Us</a></li>
                    <div class="cl"></div>
                </ul>
                <div class="cl"></div>
            </div>
            <div class="cl"></div>
        </nav>
        <div class="cl"></div>
    </div>
    <div class="cl"></div>

</aside> 
<!-- mobile -->


 <!-- header -->
<div id="header" class="row">
    <div class="medium-6 large-4 column small-10">
		
		<div class="row">
			<!-- mobile -->
			<div class="medium-4 small-4 columns ipad_up">
				<nav class="tab-bar menu-icon">
				  <section class="left-small">
					<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
				  </section>
				</nav>
			</div>
			<!-- mobile -->

			<div class="medium-10 small-10 large-12 columns last first left">
				<div id="site-logo" class="">
					<h1>
						<a href="<?php echo $base_url; ?>">
                            <img src="<?php echo $logo; ?>" />
                        </a>
					</h1>
				</div>
			</div>
		</div>

    </div>

    <!-- mobile -->
    <div class="medium-16 small-16 medium-right-nav right column ipad_up">
        <div class="right_nav">
            <ul>
                <li id="one">
                    <a href="#" class="open search_icon"></a>
                    <div class="box">
                        <div class="search_pop_wrap">
                            <a href="#" class="search_icon_pop"></a>
                            <form action="<?php echo url('search'); ?>" method="post" id="search-block-form-custom" accept-charset="UTF-8">
                              <input type="text" id="search-box" name="search_block_form" value="" size="15" maxlength="128" class="search_txt" placeholder="search here..."/>
                              <input type="submit" id="search-btn" name="op" value="Search" style="display:none" />
                            </form>
                            <script type="text/javascript">
                                jQuery("document").ready(function(){
                                  jQuery("#search-block-form-custom").submit(function(event) {
                                    event.preventDefault();
                                    location.href = jQuery(this).attr("action") + "/node/" + jQuery("#search-box").val();
                                  });
                                });
                              </script>
                            <a href="javascript:;" class="search_close"></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>        
                </li>
                <li id="two">
                    <a href="#" class="open right_menu"></a>
                    <div class="box">
                        <div class="right_menu_box">
                            <ul>
                                <li>
                                    <a href="javascript:;" class="news_link">Subscribe to newsletter</a>
                                    <div class="news_box" style="display:none;">
                                        <div class="news_input">
                                            <input type="text" placeholder="Enter your Email ID here" />
                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:;">Follow us on <img src="<?php echo drupal_get_path('theme', 'skanem') .'/img/in.jpg'; ?>" alt="" /></a></li>
                                <li><a href="javascript:;">Terms of Use</a></li>
                                <li class="rgt_last"><a href="javascript:;">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile -->
  
    <div class="medium-10 large-12 column ipad_hide">
        <div id="top-section">
            <!-- top-search -->
            <div id="top-search" class="medium-4 large-4 column right">
                <form action="<?php echo url('search'); ?>" method="post" id="search-block-form-custom" accept-charset="UTF-8" class="search-form">
                  <input type="text" id="search-box" name="search_block_form" value="" size="15" maxlength="128" class="right search-box" placeholder="Enter here"/>
                  <input type="submit" id="search-btn" name="op" value="Search" class="right" />
                </form>
            </div>

            <!-- #top-search -->
            <!-- top-menu -->
            <div id="top-menu" class="medium-12 large-12 column">
                <?php  if(isset($header_menu)): ?>
                <?php  print theme('links__menu_header_menu', array('links' => $header_menu, 'attributes' => array('class' => 'sub-nav right'))); ?>
                <?php endif; ?>
            </div>
            <!-- #top-menu -->

            <div class="clearfix"></div>
        </div>
        <div id="main-menu">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name">
                    </li>
                    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <?php if (isset($main_menu)) : ?>
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => 'links main-menu right'), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible')))) ?>
                    <?php endif; ?>
                </section>
            </nav>
        </div>
    </div>
    
</div>

<!-- #header -->
