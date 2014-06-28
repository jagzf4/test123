<div class="footer_wrap">
	<div class="foot_hide">
        <div class="container">

		<div class="medium-2 large-2 columns first">
		<?php   
		 $who_we_are = menu_navigation_links('menu-who-we-are');
		if (isset($who_we_are)) : ?>
		  <a href="#">WHO WE ARE</a>	
		  <?php print theme('links__system_menu-what-we-do', array('links' => $who_we_are)) ?>
		<?php endif; ?>
		</div>

		<div class="medium-2 large-2 columns">
		<?php   
		 $what_we_do = menu_navigation_links('menu-what-we-do');
		if (isset($what_we_do)) : ?>
		  <a href="">WHAT WE DO</a>
		  <?php print theme('links__system_menu-what-we-do', array('links' => $what_we_do)) ?>
		<?php endif; ?>
		</div>

		<div class="medium-2 large-2 columns">
		<?php   
		 $why_choose_us = menu_navigation_links('menu-why-choose-us');
		if (isset($why_choose_us)) : ?>
		  <a href="">WHY CHOOSE US</a>
		  <?php print theme('links__system_menu-why_choose_us', array('links' => $why_choose_us)) ?>
		<?php endif; ?>
		</div>

		<div class="medium-2 large-2 columns">
		<?php   
		 $locate_us = menu_navigation_links('menu-locate-us');
		if (isset($why_choose_us)) : ?>
		  <a href="">LOCATE US</a>
		  <?php print theme('links__system_menu-why_choose_us', array('links' => $locate_us)) ?>
		<?php endif; ?>
		</div>

		<div class="medium-2 large-2 columns">
		<?php   
		 $press_room = menu_navigation_links('menu-press-room');
		if (isset($press_room)) : ?>
		  <a href="">PRESS ROOM</a>
		  <?php print theme('links__system_menu-press_room', array('links' => $press_room)) ?>
		<?php endif; ?>
		</div>

		<div class="medium-2 large-2 columns">
		<?php   
		 $careers= menu_navigation_links('menu-careers');
		if (isset($careers)) : ?>
		  <a href="">CAREERS</a>
		  <?php print theme('links__system_menu-careers', array('links' => $careers)) ?>
		<?php endif; ?>
		</div>
	
			<div class="medium-2 large-2 columns">
                <ul>
                    <a href="">CSR</a>
                    <br />
                    <a href="">FAQs</a>
                    <br />
                    <a href="">CONTACT US</a>
                </ul>
            </div>
            <div class="medium-2 large-2 columns last">
                <ul>
                    <a href="">Follow us on</a>
                    <li><a href="" class="in_follow"></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>    
    </div>

	<div class="clearfix"></div>
    <div class="container">
        <div class="last_bottom"><span class="verdana-font">&copy;</span> 
        <span>Skanem AS 2014,</span>
        <span class="sk_btm"> All Rights Reserved Skanem</span>
        </div>
        <div class="last_bottom_tp right">
            <a href="#">Privacy Policy </a>
            <a href="#">Terms of Use</a>
        </div>
    </div>

</div>