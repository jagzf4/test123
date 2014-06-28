<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Skanem | Terms of use</title>

    <link rel="stylesheet" href="css/main-menu.css"/>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/jquery.selectBoxIt.css" />
    <link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
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

                <!-- bread crumbs -->
                    <div class="bread_wrap">
                        <div class="container">
                            <nav class="breadcrumbs"> 
                                <a href="#">Home</a> 
                                <span>Terms of use</span> 
                            </nav>
                        </div>
                    </div>    
                <!-- bread crumbs -->

                    <div class="title_wraper">
                        <!-- privacy policy title -->
                            <div class="tc_title_wrap">
                                <div class="container">
                                    <div class="large-8 medium-12 column large-centered medium-centered">
                                        <h2>Terms of use</h2>
                                        <p>Skanem appreciates your visit to our website www.skanem.com, and your interest in our products & services. By accessing and using our website you agree to the terms and conditions listed below. If you do not agree to these terms and conditions we respectfully ask you to immediately discontinue any use of our site.</p>
                                    </div>
                                </div>
                               <div class="history_arrow"></div>
                            </div>
                        <!-- privacy policy title -->
                    </div>
                    <div class="container">
                        <div class="large-16 medium-16 small-16 column">
                            <div class="main_para pp_wrap">
                                <p>This website, including the contents as well as the selection and arrangement of the contents of each individual page or of the collection of the pages, are fully owned by Skanem. All rights reserved.</p>
                                <p>You are allowed to store extracts from Skanem's website on your computer and to print copies of them for your personal, non-commercial use only.</p>
                                <p>You are allowed to use and to distribute necessary minor extracts from Skanem's website to provide direct linkage to the pages, or linkage by Internet search services.</p>
                                <p>Any other kind of use, reproduction, translation, adaptation, arrangement, any other alteration, distribution or storage of this site in any form and by any means, in whole or in part, without the prior written permission of Skanem is prohibited.</p>
                                <p>The information contained in this website may not be accurate, up to date or applicable to the circumstances of any particular case, despite our efforts. We cannot accept any liability for any inaccuracies or omissions.</p>
                                <p>Any decisions you make based on information contained in this website are your sole responsibility.</p>
                                <p>Neither Skanem nor any of its subsidiaries accept liability for any direct, indirect, special, substantial or other losses or damage of whatsoever kind arising from access to, or the use of this website or any information contained in it.</p>
                                <p>Neither Skanem nor any of our subsidiaries are responsible for the content of any other website which is not under the control of Skanem through which you may have gained access to our website, or to which you may gain access from our website (hypertext). We will accept no liability in respect of the material on any other website, nor are we responsible for their privacy practices.</p>
                                <p class="last_p">If any provision of this notice shall be unlawful, void or for any reason unenforceable then that provision shall be deemed severable and shall not affect the validity and enforceability of the remaining provisions.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div> 
                    </div>
                <!-- Header -->
                <?php include 'includes/footer.php'; ?>
                <!-- Header -->     
                
                
                <!-- close the off-canvas menu --> <a class="exit-off-canvas"></a> 
                
            </div> 
        </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/foundation.min.js"></script>
    <script type="text/javascript" src="js/responsiveslides.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.selectBoxIt.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
    
   <script type="text/javascript">
    $(document).foundation();
    $(document).ready(function() {

      var owl = $("#hist-car");

      owl.owlCarousel({
      rewindNav:false,
      slideSpeed : 600,  
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
    
      afterMove : function(){
        if(this.currentItem === this.maximumItem){
          $(".next_arr").css("display","none");
        }else{
            $(".next_arr").css("display","block");
        }
        if(this.currentItem === 0){
          $(".prev_arr").css("display","none");
        }
        else{
            $(".prev_arr").css("display","block");
        }
      }
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

        /*popups*/
        /*$(".pops").fancybox({
            'titleShow'     : false
        });*/

        $(".fancybox").fancybox({
            /*'transitionIn'      : 'none',
            'transitionOut'     : 'none',
            'overlayOpacity'    : '0.96',
            'overlayColor'      : '#000',
            'titlePosition'     : 'over',
            'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
                return '<span id="fancybox-title-over">Image ' +  (currentIndex + 1) + ' / ' + currentArray.length + ' ' + title + '</span>';
            }*/
            padding : 0,
            helpers : {
                overlay : {
                    css : {'background' : '#000'}
                }
            }
        });
   
    });
    </script>
    <script type="text/javascript">

       var owl = $("#lab-car");

      owl.owlCarousel({
      rewindNav:false,
      slideSpeed : 600,  
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      
     /* afterMove : function(){
        if(this.currentItem === this.maximumItem){
          $(".next_arrow").css("display","none");
        }else{
            $(".next_arrow").css("display","block");
        }
        if(this.currentItem === 0){
          $(".back_arrow").css("display","none");
        }
        else{
            $(".back_arrow").css("display","block");
        }
      }*/
      });

      // Custom Navigation Events
      $(".next1").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev1").click(function(){
        owl.trigger('owl.prev');
      })  

    </script>
    <script>
        
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
            
            

             $(".open1").on("click", function() {
                  $(".small_box1").slideToggle();
                    /*$(this).addClass("act_arrow");*/
                    var $this = $(this);
                    if($this.hasClass('act_arrow') === true) {
                    $this.removeClass('act_arrow');
                } else if(a.hasClass('act_arrow') === false) {
                    $this.addClass('act_arrow');
                } else {
                    a.removeClass('ac_arrow');
                    $this.addClass('act_arrow');
                }     
                    });

              $(".open2").on("click", function() {
                  $(".small_box2").slideToggle();
                    /*$(this).addClass("act_arrow");*/
                    var $this = $(this);
                    if($this.hasClass('act_arrow') === true) {
                    $this.removeClass('act_arrow');
                } else if(a.hasClass('act_arrow') === false) {
                    $this.addClass('act_arrow');
                } else {
                    a.removeClass('ac_arrow');
                    $this.addClass('act_arrow');
                }     
                    });

              $(".open3").on("click", function() {
                  $(".small_box3").slideToggle();
                    /*$(this).addClass("act_arrow");*/
                    var $this = $(this);
                    if($this.hasClass('act_arrow') === true) {
                    $this.removeClass('act_arrow');
                } else if(a.hasClass('act_arrow') === false) {
                    $this.addClass('act_arrow');
                } else {
                    a.removeClass('ac_arrow');
                    $this.addClass('act_arrow');
                }     
                    });
                
                $(".open4").on("click", function() {
                  $(".small_box4").slideToggle();
                    /*$(this).addClass("act_arrow");*/
                    var $this = $(this);
                    if($this.hasClass('act_arrow') === true) {
                    $this.removeClass('act_arrow');
                } else if(a.hasClass('act_arrow') === false) {
                    $this.addClass('act_arrow');
                } else {
                    a.removeClass('ac_arrow');
                    $this.addClass('act_arrow');
                }     
                    });
                          
               

            
        });
    </script>


    <script src="js/rem.js"></script>
</body>
</html>