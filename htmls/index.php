<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    
    <title>Skanem | Home</title>
    
    <link rel="stylesheet" href="css/main-menu.css"/>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/jquery.selectBoxIt.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/responsive.css" />
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

            <!-- what we do slideshow -->
            <div id="wwd-banner">
                <div class="yellow_arrow"></div>
                <ul class="rslides">
                    <li><img src="img/slides/1.jpg" alt=""></li>
                    <li><img src="img/slides/2.jpg" alt=""></li>
                    <li><img src="img/slides/3.jpg" alt=""></li>
                </ul>
                <div class="content">
                    <div class="container">
                        <div class="medium-4 large-3 column small-16"><div class="banner-title title-gray">What We Do</div></div>
                        <div class="medium-7 large-8 column message small-16">
                            <div class="left desc-1">
                                We provide high quality labelling solutions, adding value to your supply chain through professional handling of design, printing, stock management and logistics.
                            </div>
                        </div>
                        <div class="medium-5 large-5 column desc-1 back_arrow small-16">
                            <a href="#"><span class="icon black-arrow left"></span></a>
                        </div>

                        <div class="sticker">
                            <img src="img/slide-sticker.png">
                        </div>
                    </div>
                </div>
            </div>

            <!-- supply chain -->
            <div id="ss-chain" class="container">
                <div class="medium-16 large-16 column">
                    <div class="sc_head">skanem supply chain</div>
                    <div class="chain-small-wrap">
                        <img data-interchange="[img/med-chain.jpg, (small)], [img/med-chain.jpg, (medium)], [img/ss-chain.jpg, (large)]">
                        <noscript><img src="img/ss-chain.jpg" /></noscript>
                    </div>
                    <a href="efficient-supply-chain.php" class="button radius round">KNOW MORE</a>
                </div>
            </div>
            <!-- #supply chain -->
            <!-- who we are place -->
            <div id="wwr-banner">
                <div class="container">
                    <div class="medium-8 large-8 column small-16">
                    &nbsp;
                    </div>
                    <div class="medium-8 large-8 column content small-16">
                        <div class="banner-title title-white">Who We Are</div>
                        <div class="desc-1">
                            Skanem is a leading producer of self-adhesive labels with 15 production sites across 9 countries in Europe, Asia and Africa.
                        </div>
                        <div class="desc-2">
                            We offer innovative labelling solutions across different market segments. In addition, we are also
                            actively involved in the business of metal packaging and PVC film & foils.
                        </div>
                        <div class="right"><a href="who-we-are.php"><span class="icon white-arrow"></span></a></div>
                    </div>
                </div>
            </div>
            <!-- #who we are place -->
           <!-- why choose us place -->
                <div id="wcu-banner">
                    <div class="container">
                        <div class="medium-7 large-5 column">
                            <div class="banner-title title-gray left">Why Choose Us</div> <span class="icon black-arrow1 left"></span>
                        </div>
                    </div>
                    <div class="container">
                        <div class=" medium-16 large-16 column">
                            <div class="choose-wrap">
                                <div class="choose-wrap-inner">
                                    <div class="medium-4 large-4 column choose_col">
                                        <div class="row">
                                            <a href="why-choose-us.php#industry-leading">
                                                <div class="blue_banner banner">INDUSTRY <br/>Leading</div>
                                                <img src="img/wcu-banner-1.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="medium-4 large-4 column choose_col">
                                        <div class="row">
                                            <a href="why-choose-us.php#customized-solutions">
                                                <div class="red_banner banner">CUSTOMISED <br/>SOLUTIONS</div>
                                                <img src="img/wcu-banner-2.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="medium-4 large-4 column choose_col">
                                        <div class="row">
                                            <a href="why-choose-us.php#cutting-edge">
                                                <div class="purple_banner banner">CUTTING-EDGE <br/>TECHNOLOGY</div>
                                                <img src="img/wcu-banner-3.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="medium-4 large-4 column choose_col">
                                        <div class="row">
                                            <a href="why-choose-us.php#efficient-suppy">
                                                <div class="yellow_banner banner">EFFICIENT <br/>Supply Chain</div>
                                                <img src="img/wcu-banner-4.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #why choose us place -->
            <!-- locate-banner -->
            <div id="locate-banner">
                <div class="container">
                    <div class="medium-9 large-6 column content large-push-10 medium-push-7">
                        <div class="banner-title title-gray">Locate Us</div>
                        <div class="desc-1">We are closer to your markets around the world</div>
                        <div class="desc-2">
                            With 15 production units, the Skanem team encompasses over 1200 employees and is spread
                            across 9 countries in Europe, Asia and Africa.
                        </div>
                        <div class="selects">
                            <select id="regions" name="regions">
                                <option value="0" selected="selected" disabled="disabled">Regions</option>
                                <option value="1">Region 1</option>
                                <option value="2">Region 2</option>
                                <option value="3">Region 3</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="selects">
                            <select id="locations" name="locations">
                                <option value="0"selected="selected" disabled="disabled">Locations</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- #locate-banner -->
            <!-- news-subscribe -->
            <div class="footer_up">
             <div class="container">
                <div class="medium-16 large-16 columns">
                    <div class="medium-9 large-4 columns last large-push-8 email_small">
                        <input type="text" class="subscribe-email" placeholder="Enter your Email ID here" />
                    </div>
                    <div class="medium-7 large-4 columns subscribe-btn first last">
                        <a href="#" class="purple-btn">Subscribe to newsletter <span class="icon"></span></a>
                    </div>
                </div>
              </div>  
            </div>
            <!-- news-subscribe -->
            
			<!-- Header -->
            <?php include 'includes/footer.php'; ?>
            <!-- Header -->			
			
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
    <script>
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
                $( ".news_box" ).slideUp();
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

        });
    </script>

    <script src="js/rem.js"></script>
</body>
</html>