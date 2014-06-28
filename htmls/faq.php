<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Skanem | Our Team</title>

    <link rel="stylesheet" href="css/main-menu.css" media="screen" />
    <link rel="stylesheet" href="css/foundation.css" media="screen" />
    <link rel="stylesheet" href="css/jquery.selectBoxIt.css" media="screen" />
    <link rel="stylesheet" href="css/styles.css" media="screen" />
    <link rel="stylesheet" href="css/responsive.css" media="screen"s />
    <script src="js/vendor/modernizr.js"></script>

    <!--fox IE8 issue -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/nwmatcher-1.2.5-min.js"></script>
    <script src="js/selectivizr-1.0.3b.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="site-container">
    	<div class="off-canvas-wrap" data-offcanvas> 
    		<div class="inner-wrap"> 
    		
                <!-- Header -->
                <?php include 'includes/header.php'; ?>
                <!-- Header -->

                <!-- bread crumbs -->
                <div class="bread_wrap">
                    <div class="container">
                		<nav class="breadcrumbs"> 
                			<a href="index.php">Home</a>
                			<span>FAQs</span>
                		</nav>
                    </div>
                </div>    
        		 <!-- bread crumbs -->
                      
                <!-- Our team title -->
                    <div class="history_title_wrap_faq">
                        <div class="container">
                            <div class="large-12 medium-14 column large-centered medium-centered">
                                <h2>FAQ<span class="small-text">s</span></h2>
                                <p>At Skanem, we are always happy to help you. If you have a specific query, do email us at
                                    <a class="faq_link">skanem@skanem.com</a></p>
                            </div>
                        </div>
                        <div class="history_arrow_faq"></div>
                    </div>
                <!-- Our team title -->

                <!-- team tree -->
                <div class="container">
                    <div class="large-16 medium-16 column">
                        <div class="faq">
                            <span>What does Skanem do?</span>
                            <p>We develop and print self adhesive labels, by working closely with our customers.
                               Our customer portfolio comprises of both multi-national and local companies. <br />
                               <a href="#">Click here</a> to view our history.<a href="#">Click here</a> to view our products.
                            </p>
                        </div>
                        <div class="faq">
                            <span>What are Self Adhesive labels?</span>
                            <p>Labels with an already applied adhesive are called self adhesive labels. Self adhesive labels can be decorative, functional as well as security enhancing.
                               To know more about self adhesive labels
                               <a href="#">Click here.</a>
                            </p>
                        </div>
                        <div class="faq">
                            <span>Where is Skanem located?</span>
                            <p>Our headquarters is in Stavanger, Norway. We have 15 production units across 9 countries including Norway, Sweden, Denmark, UK, Poland, Germany, Kenya, India and Thailand.
                               For more details on Skanem locations
                               <a href="#">Click here.</a>
                            </p>
                        </div>
                        <div class="faq">
                            <span>How can I contact Skanem?</span>
                            <p>Contacts are listed for each of the Skanem locations <a href="#">here</a>. Select your location and you should see the relevant contact details. If you are unable to get in touch with the
                                concerned team member, please send an email to <a href="#">skanem@skanem.com</a> and we will get back to you at the earliest.

                            </p>
                        </div>
                        <div class="faq">
                            <span>There is no Skanem office in my location. Will Skanem still provide services?</span>
                            <p>If you are located in Europe, Asia or Africa please contact Skanem at <a href="#">skanem@skanem.com</a>. Skanem will guide you in the right direction.
                            </p>
                        </div>
                        <div class="faq">
                            <span>How can I apply for a job at Skanem?</span>
                            <p>Our headquarters is in Stavanger, Norway. We have 15 production units across 9 countries including Norway, Sweden, Denmark, UK, Poland, Germany, Kenya, India and Thailand.
                               For more details on Skanem locations
                               <a href="#">Click here.</a>
                            </p>
                        </div>
                        <div class="faq">
                            <span>Where is Skanem located?</span>
                            <p>You can submit your CV <a href="#">here</a> and we will get in touch with you whenever there is a suitable vacancy.
                            </p>
                        </div>
                        <div class="faq faq_last">
                            <span>Who should I contact if I am a publisher/ advertiser?</span>
                            <p>Please get in touch with our Branding & Communications Manager at <a href="#"> Chanda.b@skanem.com </a>
                            </p>
                        </div>
				    </div>
                </div>
                <!-- team tree -->
                
                
                <!-- news-subscribe -->
                <div class="our_ft">
                    <div class="ftup_whower">
                     <div class="container">
                        <div class="medium-16 large-16 small-16 columns">
                            <div class="subscribe-btn">
                                <a href="#" class="an_report"><span>What We Do</span><span class="icon"></span><span class="clearfix"></span></a>
                            </div>
                        </div>    
                      </div>  
                    </div>
                </div>    
                <!-- news-subscribe -->
                
                <!-- Footer -->
                <?php include 'includes/footer.php'; ?>
                <!-- Footer -->		
    			
    			
    			<!-- close the off-canvas menu --> <a class="exit-off-canvas"></a> 
    			
    		</div> 
    	</div>
	</div>
     <script type="text/javascript" src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/flowtype.js"></script>
    <script type="text/javascript" src="js/responsiveslides.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.selectBoxIt.min.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/easyaspie.min.js"></script>


    
   <script type="text/javascript">
        $(document).foundation();
        $(function () {
            $(".rslides").responsiveSlides({
                speed: 1000,
                timeout: 10000
            });
            $("select").selectBoxIt();
            /*Responsive menu*/
            $('body').addClass('js');
                  var $menu = $('#menup'),
                      $menulink = $('.menu-link'),
                      $menuTrigger = $('.has-subnav > a');
                
            $menulink.click(function(e) {
                    e.preventDefault();
                    $menulink.toggleClass('active');
                    $menu.toggleClass('active');
            });

            var add_toggle_links = function() {         
                if ($('.menu-link').is(":visible")){
                    if ($(".toggle-link").length > 0){
                    }
                    else{
                        $('.has-subnav > a').before('<span class="toggle-link"> Open submenu </span>');
                        $('.toggle-link').click(function(e) {       
                            var $this = $(this);
                            $this.toggleClass('active').siblings('ul').toggleClass('active');
                        }); 
                    }
                }
                else{
                    $('.toggle-link').empty();
                }
             }
            add_toggle_links();
            $(window).bind("resize", add_toggle_links); 
            /*Responsive menu*/

            /*Font Resize*/
            /*$('body').flowtype({
                minimum: 500,
                maximum: 1200,
                minFont: 12,
                maxFont: 40,
                fontRatio: 30,
            });*/

            /*Right side menu*/
            var open = $('.open'),
                a = $('ul').find('a');

            console.log(a.hasClass('active'));

            open.click(function(e){
                e.preventDefault();
                var $this = $(this),
                    speed = 500;
                if($this.hasClass('active') === true) {
                    $this.removeClass('active').next('.box').slideUp(speed);
                } else if(a.hasClass('active') === false) {
                    $this.addClass('active').next('.box').slideDown(speed);
                } else {
                    a.removeClass('active').next('.box').slideUp(speed);
                    $this.addClass('active').next('.box').delay(speed).slideDown(speed);
                }
            });
            /*Right side menu*/

            $('#search-box').focus(function() {
                $('#search-btn').css({'background-position': '-40px 0px'});
            });
            $('#search-box').blur(function() {
                $('#search-btn').css({'background-position': '0px 0px'});
            });

            /*Sub toggle right menu*/
            $( ".news_link" ).click(function() {
              $( ".news_box" ).slideToggle( "slow" );
            });
            /*Sub toggle right menu*/

            $('.search_close').click(function() {
                $('input.search_txt').val('');
            });


            /*Responsive accordian for our team*/
            var open1 = $('.open1'),
                a = $('.history_title_wrap').find('a');

            console.log(a.hasClass('active'));

            open1.click(function(e){
                $( ".small_box" ).slideUp();
                e.preventDefault();
                var $this = $(this),
                    speed = 500;
                if($this.hasClass('active') === true) {
                    $this.removeClass('active').next('.small_box').slideUp(speed);
                } else if(a.hasClass('active') === false) {
                    $this.addClass('active').next('.small_box').slideDown(speed);
                } else {
                    a.removeClass('active').next('.small_box').slideUp(speed);
                    $this.addClass('active').next('.small_box').delay(speed).slideDown(speed);
                }
            });
            /*Responsive accordian for our team*/
            
        });
    </script>


    <script src="js/rem.js"></script>
</body>
</html>