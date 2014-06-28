<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Skanem | Privacy policy</title>

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
                                <span>privacy policy</span> 
                            </nav>
                        </div>
                    </div>    
                <!-- bread crumbs -->

                    <div class="title_wraper">
                        <!-- privacy policy title -->
                            <div class="pp_title_wrap">
                                <div class="container">
                                    <div class="large-8 medium-12 column large-centered medium-centered">
                                        <h2>privacy policy</h2>
                                        <p>Skanem appreciates your visit to our website www.skanem.com, and your interest in our products & services. We want you to feel secure visiting our site, and we assure you that your personal information is safe with us. Skanem ensures you that any personal information with which we are provided through our website is used exclusively to help us help you.</p>
                                    </div>
                                </div>
                                <div class="mark_green_arrow"></div>
                            </div>
                        <!-- privacy policy title -->
                    </div>
                    <div class="container">
                        <div class="large-16 medium-16 small-16 column">
                            <div class="main_para pp_wrap">
                                <p>The following are the ways in which we use this information:</p>
                                <p>Information is collected and stored in order to assist us in fulfilling your requests for information, and providing you with the information you need.<br/>Visits to our site are tracked and we may use cookies to estimate its size audience so that we can assess which parts of our sites best serve our customers & suppliers in order to better tailor our information to their needs.</p>
                                <p>We do not sell any of the information we receive.</p>
                                <p>If you provide personal information (name, job title, address, telephone, fax, company name, reference number, enquiry details etc) to Skanem, the information is used to provide you with special services and to fulfil your requests.</p>
                                <p class="last_p">You may be contacted by Skanem or by its representative for additional information, to answer your questions, fulfil your requests, for marketing purposes, opinion surveys, for product surveys or for technical administration and development of this site or for similar purposes. Personal information may have to be transferred between Skanem Group companies or third parties in countries, where the level of protection does not necessarily meet EU legal requirements, in order to carry out the above or fulfil your customer needs. The recipient of such information shall be required to protect the confidentiality and security of the personal information and may not use it for any other purpose.</p>
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