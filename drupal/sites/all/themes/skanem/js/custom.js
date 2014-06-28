jQuery(document).foundation();
window.locations = Array();
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
        return false;
    } else {

        return true;
    }
}
function setFirstNameError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-first-name").val();
    if(content =="")
    {
        jQuery("#webform-client-form-2 #edit-submitted-first-name").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-first-name").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-first-name").parent().parent().removeClass("customerror");
    }
}

function setLastNameError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-last-name").val();
    if(content =="")
    {
        jQuery("#webform-client-form-2 #edit-submitted-last-name").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-last-name").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-last-name").parent().parent().removeClass("customerror");
    }
}
function setEmailError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-email").val();
    if(content == "" || !IsEmail(content))
    {
        jQuery("#webform-client-form-2 #edit-submitted-email").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-email").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-email").parent().parent().removeClass("customerror");
    }
}
function setCountryError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-country").val();
    if(content =="")
    {
        jQuery("#webform-client-form-2 #edit-submitted-country").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-country").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-country").parent().parent().removeClass("customerror");
    }
}

function setPhoneError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-phone").val();
    if(content == "" || isNaN(content))
    {
        jQuery("#webform-client-form-2 #edit-submitted-phone").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-phone").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-phone").parent().parent().removeClass("customerror");
    }
}

function setRegionError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-choose-division").val();
    if(content == "" || content=="0")
    {
        jQuery("#webform-client-form-2 #edit-submitted-choose-division").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-choose-division").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-choose-division").parent().parent().removeClass("customerror");
    }
}

function setLocationError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-choose-location").val();
    if(content == "" || content=="0" || content == null)
    {
        jQuery("#webform-client-form-2 #edit-submitted-choose-location").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-choose-location").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-choose-location").parent().parent().removeClass("customerror");
    }
}

function setEnquryError(){
    var content = jQuery("#webform-client-form-2 #edit-submitted-inquiry").val();
    if(content == "")
    {
        jQuery("#webform-client-form-2 #edit-submitted-inquiry").parent().parent().addClass("customerror");
        jQuery("#webform-client-form-2 #edit-submitted-inquiry").focus();
    }
    else{
        jQuery("#webform-client-form-2 #edit-submitted-inquiry").parent().parent().removeClass("customerror");
    }
}

/* Career Page  */

function CareersetFirstNameError(){
    var content = jQuery("#webform-client-form-131 #edit-submitted-first-name").val();
    if(content =="")
    {
        jQuery("#webform-client-form-131 #edit-submitted-first-name").addClass("customerror");
        jQuery("#webform-client-form-131 #edit-submitted-first-name").focus();
    }
    else{
        jQuery("#webform-client-form-131 #edit-submitted-first-name").removeClass("customerror");
    }
}

function CareersetLastNameError(){
    var content = jQuery("#webform-client-form-131 #edit-submitted-last-name").val();
    if(content =="")
    {
        jQuery("#webform-client-form-131 #edit-submitted-last-name").addClass("customerror");
        jQuery("#webform-client-form-131 #edit-submitted-last-name").focus();
    }
    else{
        jQuery("#webform-client-form-131 #edit-submitted-last-name").removeClass("customerror");
    }
}
function CareersetEmailError(){
    var content = jQuery("#webform-client-form-131 #edit-submitted-email").val();
    if(content == "" || !IsEmail(content))
    {
        jQuery("#webform-client-form-131 #edit-submitted-email").addClass("customerror");
        jQuery("#webform-client-form-131 #edit-submitted-email").focus();
    }
    else{
        jQuery("#webform-client-form-131 #edit-submitted-email").removeClass("customerror");
    }
}
function CareersetCountryError(){
    var content = jQuery("#webform-client-form-131 #edit-submitted-country").val();
    if(content =="")
    {
        jQuery("#webform-client-form-131 #edit-submitted-country").addClass("customerror");
        jQuery("#webform-client-form-131 #edit-submitted-country").focus();
    }
    else{
        jQuery("#webform-client-form-131 #edit-submitted-country").removeClass("customerror");
    }
}

function CareersetPhoneError(){
    var content = jQuery("#webform-client-form-131 #edit-submitted-mobile").val();
    if(content == "" || isNaN(content))
    {
        jQuery("#webform-client-form-131 #edit-submitted-mobile").addClass("customerror");
        jQuery("#webform-client-form-131 #edit-submitted-mobile").focus();
    }
    else{
        jQuery("#webform-client-form-131 #edit-submitted-mobile").removeClass("customerror");
    }
}

function CareersetEnquryError(){
    var content = jQuery("#webform-client-form-131 #edit-submitted-enqury").val();
    if(content == "")
    {
        jQuery("#webform-client-form-131 #edit-submitted-enqury").addClass("customerror");
        jQuery("#webform-client-form-131 #edit-submitted-enqury").focus();
    }
    else{
        jQuery("#webform-client-form-131 #edit-submitted-enqury").removeClass("customerror");
    }
}

jQuery(document).ready(function() {

    jQuery("#webform-client-form-2 #edit-submitted-first-name").blur(function(){
        setFirstNameError();
    });
    jQuery("#webform-client-form-2 #edit-submitted-last-name").blur(function(){
        setLastNameError();
    });
    jQuery("#webform-client-form-2 #edit-submitted-email").blur(function(){
        setEmailError();
    });
    jQuery("#webform-client-form-2 #edit-submitted-phone").blur(function(){
        setPhoneError();
    });
    jQuery("#webform-client-form-2 #edit-submitted-country").blur(function(){
        setCountryError();
    });
    jQuery("#webform-client-form-2 #edit-submitted-choose-division").blur(function(){
        setRegionError();
    });
    jQuery("#webform-client-form-2 #edit-submitted-choose-location").blur(function(){
        setLocationError();
    });
    jQuery("#webform-client-form-2 #edit-submitted-inquiry").blur(function(){
        setEnquryError();
    });
    
    jQuery("#ContactsPopClose, #ContactsPopOK").click(function(){
        jQuery("#MessageBox").hide();
    });

    /* Careers Page Blur Functions */

    jQuery("#webform-client-form-131 #edit-submitted-first-name").blur(function(){
        CareersetFirstNameError();
    });
    jQuery("#webform-client-form-131 #edit-submitted-last-name").blur(function(){
        CareersetLastNameError();
    });
    jQuery("#webform-client-form-131 #edit-submitted-email").blur(function(){
        CareersetEmailError();
    });
    jQuery("#webform-client-form-131 #edit-submitted-mobile").blur(function(){
        CareersetPhoneError();
    });
    jQuery("#webform-client-form-131 #edit-submitted-country").blur(function(){
        CareersetCountryError();
    });
    jQuery("#webform-client-form-131 #edit-submitted-enqury").blur(function(){
        CareersetEnquryError();
    });

    jQuery("#webform-client-form-2 #edit-submit").click(function(event){
        var firstName = jQuery("#edit-submitted-first-name").val();
        var lastName = jQuery("#edit-submitted-last-name").val();
        var email = jQuery("#edit-submitted-email").val();
        var phone = jQuery("#edit-submitted-phone").val();
        var country = jQuery("#edit-submitted-country").val();
        var region = jQuery("#edit-submitted-choose-division").val();
        var location = jQuery("#edit-submitted-choose-location").val();
        var enquiry = jQuery("#edit-submitted-inquiry").val();

        if(firstName == "" || lastName == "" || email == "" || phone == "" || country == "" || region =="0" || location =="0" || enquiry ==""){

            showMessage("Please ensure all fields are filled-in correctly.");
            event.preventDefault();
            setEnquryError();
            setRegionError();
            setLocationError();
            setCountryError();
            setPhoneError();
            setEmailError();
            setLastNameError();
            setFirstNameError();
            return false;
        }

        if(!IsEmail(email)){
            showMessage("Provided email id is not valid.");
            setEmailError();
            event.preventDefault();
            return false;   
        }

        if(isNaN(phone)){
            showMessage("Provided phone number is not valid.");
            setPhoneError();
            event.preventDefault();
            return false;   
        }
    });

/* Careers Page Client Side Validation - Submit Button */

jQuery("#webform-client-form-131 #edit-submit").click(function(event){
    var firstName = jQuery("#webform-client-form-131 #edit-submitted-first-name").val();
    var lastName = jQuery("#webform-client-form-131 #edit-submitted-last-name").val();
    var email = jQuery("#webform-client-form-131 #edit-submitted-email").val();
    var phone = jQuery("#webform-client-form-131 #edit-submitted-mobile").val();
    var country = jQuery("#webform-client-form-131 #edit-submitted-country").val();
    var enquiry = jQuery("#webform-client-form-131 #edit-submitted-enqury").val();

    if(firstName == "" || lastName == "" || email == "" || phone == "" || country == "" || enquiry ==""){

        showMessage("Please ensure all fields are filled-in correctly.");
        event.preventDefault();
        CareersetEnquryError();
        CareersetCountryError();
        CareersetPhoneError();
        CareersetEmailError();
        CareersetLastNameError();
        CareersetFirstNameError();
        return false;
    }

    if(!IsEmail(email)){
        showMessage("Provided email id is not valid.");
        CareersetEmailError();
        event.preventDefault();
        return false;   
    }

    if(isNaN(phone)){
        showMessage("Provided phone number is not valid.");
        CareersetPhoneError();
        event.preventDefault();
        return false;   
    }
});

jQuery('#edit-submitted-phone').bind('keypress', function(event) {
   if(event.keyCode != 9){
    var regex = new RegExp("^[0-9\b]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}
});

jQuery('#edit-submitted-first-name').bind('keypress', function(event) {
    if(event.keyCode != 9){
        var regex = new RegExp("^[a-zA-Z.\b]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
});

jQuery('#edit-submitted-last-name').bind('keypress', function(event) {
 if(event.keyCode != 9){
    var regex = new RegExp("^[a-zA-Z.\b]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}
});

jQuery('#edit-submitted-country').bind('keypress', function(event) {
 if(event.keyCode != 9){
    var regex = new RegExp("^[a-zA-Z.\b]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}
});
/* Custom Script for Contact US */

jQuery("#edit-submitted-choose-division").change(function(){
    var currentRegion = jQuery(this).val();
    if(currentRegion != "0"){
        var options = [];
        options.push('<option value="0" selected="selected" disabled>Choose Location</option>');
        jQuery.each(window.locations, function(index, data){
            data[0] = data[0].replace(/&amp;/g, '&');
            if(data[0] == currentRegion){
                options.push('<option value="' + data[1] + '">' + data[1] + '</option>');
            }
        });
        jQuery('#edit-submitted-choose-location').empty().html(options);
        jQuery("#edit-submitted-choose-location").selectBoxIt().data("selectBoxIt").refresh();
    }
    else{
        var options = [];
        options.push('<option value="0"  selected="selected" disabled>Choose Location</option>');
        jQuery('#edit-submitted-choose-location').empty().html(options);
        jQuery("#edit-submitted-choose-location").selectBoxIt().data("selectBoxIt").refresh();
    }
});

jQuery("#edit-submitted-choose-location option").each(function(index, value){
    var current = jQuery(this).attr("value");
    if(current != "0"){
        var data = jQuery(this).html();
        var val = data.split("|");
        jQuery(this).html(val[0]);
        jQuery(this).attr("region-data", val[1]);
        var temp = Array();
        temp.push(val[1]);
        temp.push(val[0]);
        window.locations.push(temp);
    }
});

var pathname = window.location.pathname;
if(pathname.indexOf("contact-us") != -1){
    var currentRegion = jQuery("#edit-submitted-choose-division").val();
    if(currentRegion != "0"){
        var options = [];
        options.push('<option value="0" selected="selected"  disabled>Choose Location</option>');
        jQuery.each(window.locations, function(index, data){
            if(data[0] == currentRegion){
                options.push('<option value="' + data[1] + '">' + data[1] + '</option>');
            }
        });
        jQuery('#edit-submitted-choose-location').empty().html(options);
        jQuery("#edit-submitted-choose-location").selectBoxIt().data("selectBoxIt").refresh();
    }
    else{
        var options = [];
        options.push('<option value="0"  selected="selected" disabled>Choose Location</option>');
        jQuery('#edit-submitted-choose-location').empty().html(options);
        jQuery("#edit-submitted-choose-location").selectBoxIt().data("selectBoxIt").refresh();
    }
}

if(pathname.indexOf("careers") != -1){
    jQuery("#edit-submitted-attachment-ajax-wrapper").addClass("hide");
    jQuery("#browse").click(function () {
        jQuery("#edit-submitted-attachment-upload").click();
    });
    jQuery('#edit-submitted-attachment-upload').change(function () {
        jQuery('#testfile').val(jQuery(this).val());
    });
}

     //console.log(Foundation.utils.S('#hist-car').html());
     var owl = jQuery("#hist-car2");

     owl.owlCarousel({
      rewindNav:false,
      slideSpeed : 600,  
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile :[360,1],// itemsMobile disabled - inherit from itemsTablet option
      afterMove : function(){
        if(this.currentItem === this.maximumItem){
          jQuery(".next_arr").css("display","none");
      }else{
       jQuery(".next_arr").css("display","block");
   }
   if(this.currentItem === 0){
      jQuery(".prev_arr").css("display","none");
  }
  else{
   jQuery(".prev_arr").css("display","block");
}
}
});

      // Custom Navigation Events
      jQuery(".next").click(function(){
        owl.trigger('owl.next');
    })
      jQuery(".prev").click(function(){
        owl.trigger('owl.prev');
    })

  });

jQuery(function() {
      //alert("Hello");
      jQuery(".rslides").responsiveSlides();
      jQuery("select").selectBoxIt();

      /*Responsive menu*/
      jQuery('body').addClass('js');
      var $menu = jQuery('#menup'),
      $menulink = jQuery('.menu-link'),
      $menuTrigger = jQuery('.has-subnav > a');

      $menulink.click(function(e) {
        e.preventDefault();
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
    });

      var add_toggle_links = function() {         
        if (jQuery('.menu-link').is(":visible")){
            if (jQuery(".toggle-link").length > 0){
            }
            else{
                jQuery('.has-subnav > a').before('<span class="toggle-link"> Open submenu </span>');
                jQuery('.toggle-link').click(function(e) {       
                    var $this = jQuery(this);
                    $this.toggleClass('active').siblings('ul').toggleClass('active');
                }); 
            }
        }
        else{
            jQuery('.toggle-link').empty();
        }
    }
    add_toggle_links();
    jQuery(window).bind("resize", add_toggle_links); 
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
var open = jQuery('.open'),
a = jQuery('ul').find('a');



open.unbind().click(function(e){
    jQuery( ".box" ).slideUp();
    e.preventDefault();
    var $this = jQuery(this),
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

jQuery('.search-form #search-box').focus(function() {
                //alert('Hello23');
                jQuery('.search-form #search-btn').css({'background-position': '-40px 0px'});
            });
jQuery('.search-form #search-box').blur(function() {
    jQuery('.search-form #search-btn').css({'background-position': '0px 0px'});
});

/*Sub toggle right menu*/
jQuery( ".news_link" ).click(function() {
  jQuery( ".news_box" ).slideToggle( "slow" );
});
/*Sub toggle right menu*/

jQuery('.search_close').click(function() {
    jQuery('input.search_txt').val('');
});

/*Responsive accordian for our team*/
var open1 = jQuery('.open1'),
a = jQuery('ul').find('a');



open1.unbind().click(function(e){
    jQuery( ".small_news_box" ).slideUp();
    e.preventDefault();
    var $this = jQuery(this),
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



jQuery(document).ready(function() {
   jQuery( "#newsletter-manage-subscriptions-form .purple-btn" ).click(function(event) {
    event.preventDefault();
          //alert(jQuery('#newsletter-manage-subscriptions-form .subscribe-email').val());
          var mailval = jQuery('#newsletter-manage-subscriptions-form .subscribe-email').val();
          var mailstatus = validateEmail(mailval);
          
          if(mailval=="" || mailstatus==false){
           alert("Please enter valid email id");
       }
       else{
           jQuery('#newsletter-manage-subscriptions-form').submit();
       }
   });
});

jQuery("document").ready(function(){
    jQuery("#form-newsletter-mail").submit(function(event) {
      event.preventDefault();
      
      var mailid = jQuery('#newslettermail').val();
      var mailstatus = validateEmail(mailid);
      //alert(mailstatus);
      if(mailid=="" || mailstatus==false){
        alert("Please enter valid email id");
    }
    else{
        jQuery('.subscribe-email').val(mailid);
        jQuery('#newsletter-manage-subscriptions-form').submit();
    }

});
});

jQuery("document").ready(function(){
  jQuery(".search-form").submit(function(event) {
    event.preventDefault();
  //  alert("Heelo"+jQuery("#search-box").val());
  location.href = jQuery(this).attr("action") + "/node/" + jQuery("#search-block-form-custom #search-box").val();
});
});


function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

jQuery(document).ready(function() {

    var owl = jQuery("#hist-car");

    owl.owlCarousel({
        rewindNav:false,
        slideSpeed : 600,
    items : 4, //10 items above 1000px browser width
    itemsDesktop : [1000,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
    itemsTablet: [600,1], //2 items between 600 and 0;

    afterMove : function(){
        if(this.currentItem === this.maximumItem){
            jQuery(".next_arr").css("display","none");
        }else{
            jQuery(".next_arr").css("display","block");
        }
        if(this.currentItem === 0){
            jQuery(".prev_arr").css("display","none");
        }
        else{
            jQuery(".prev_arr").css("display","block");
        }
    }
});

    // Custom Navigation Events
    jQuery(".next").click(function(){
        owl.trigger('owl.next');
    })
    jQuery(".prev").click(function(){
        owl.trigger('owl.prev');
    })

    jQuery('.pop_container').hide();
    jQuery('.pop_overlay').hide();
    jQuery('.thumb_label_wrap a.pop_link').click(function(e){
        var windowHeight = jQuery(window).height();
        var dataToParse = "";
        var type = jQuery(this).attr("data-type");
        if(jQuery(this).attr("data-type") == "effect"){
            dataToParse = window.effectsjson;
            jQuery(".pop_red_title").text("Skanem Effects");
        }
        else
        {
            jQuery(".pop_red_title").text("Skanem Functions");
            dataToParse = window.functionJson;
        }
        var effectData = jQuery.parseJSON(dataToParse);

        var currentId = jQuery(this).attr("data-id");
        jQuery.each(effectData, function(index, value){
            if(value[0] == currentId){
                jQuery("#label-id").html(value[1]);
                jQuery("#image-id").attr("src", value[2]);
                jQuery("#effect-next").attr("data-type",type);
                jQuery("#effect-prev").attr("data-type",type);

                jQuery("#effect-prev").show();
                jQuery("#effect-next").show();

                var next = "id-" + (parseInt(index) + 1);
                var prev = "id-" + (parseInt(index) - 1);
                jQuery("#effect-next").attr("data-id", next);
                jQuery("#effect-prev").attr("data-id", prev);

                if(index == 0){
                   jQuery("#effect-prev").hide();
               }
               if (index == (parseInt(effectData.length) - 1) ){
                jQuery("#effect-next").hide();
            }
        }
    });


        jQuery('.pop_container').css("height", windowHeight);
        jQuery('body').css("height", windowHeight);
        jQuery('body').css("overflow", "hidden");
        jQuery('.pop_container').fadeIn('slow');
        jQuery('.pop_overlay').fadeIn('slow');
    });

jQuery(".pop_next").click(function(e){
    e.preventDefault();
    var dataToParse = "";
    var dataToParse = "";
    var type = jQuery(this).attr("data-type");
    if(jQuery(this).attr("data-type") == "effect"){
        dataToParse = window.effectsjson;
        jQuery(".pop_red_title").text("Skanem Effects");
    }
    else
    {
        jQuery(".pop_red_title").text("Skanem Functions");
        dataToParse = window.functionJson;
    }
    var effectData = jQuery.parseJSON(dataToParse);

    var currentId = jQuery(this).attr("data-id");
    jQuery.each(effectData, function(index, value){
        if(value[0] == currentId){
            jQuery("#label-id").html(value[1]);
            jQuery("#image-id").attr("src", value[2]);
            jQuery("#effect-next").attr("data-type",type);
            jQuery("#effect-prev").attr("data-type",type);

            jQuery("#effect-prev").show();
            jQuery("#effect-next").show();

            var next = "id-" + (parseInt(index) + 1);
            var prev = "id-" + (parseInt(index) - 1);
            jQuery("#effect-next").attr("data-id", next);
            jQuery("#effect-prev").attr("data-id", prev);

            if(index == 0){
                jQuery("#effect-prev").hide();
            }
            if (index == (parseInt(effectData.length) - 1) ){
                jQuery("#effect-next").hide();
            }
        }
    });
});

jQuery(".pop_prev").click(function(e){
    e.preventDefault();
    var dataToParse = "";
    var dataToParse = "";
    var type = jQuery(this).attr("data-type");
    if(jQuery(this).attr("data-type") == "effect"){
        dataToParse = window.effectsjson;
        jQuery(".pop_red_title").text("Skanem Effects");
    }
    else
    {
        jQuery(".pop_red_title").text("Skanem Functions");
        dataToParse = window.functionJson;
    }
    var effectData = jQuery.parseJSON(dataToParse);

    var currentId = jQuery(this).attr("data-id");
    jQuery.each(effectData, function(index, value){
        if(value[0] == currentId){
            jQuery("#label-id").html(value[1]);
            jQuery("#image-id").attr("src", value[2]);
            jQuery("#effect-next").attr("data-type",type);
            jQuery("#effect-prev").attr("data-type",type);

            jQuery("#effect-prev").show();
            jQuery("#effect-next").show();

            var next = "id-" + (parseInt(index) + 1);
            var prev = "id-" + (parseInt(index) - 1);
            jQuery("#effect-next").attr("data-id", next);
            jQuery("#effect-prev").attr("data-id", prev);

            if(index == 0){
                jQuery("#effect-prev").hide();
            }
            if (index == (parseInt(effectData.length) - 1) ){
                jQuery("#effect-next").hide();
            }
        }
    });
});

jQuery('a.pop_close').click(function(e){
    jQuery('body').css("overflow", "auto");
    jQuery('body').css("height", "100%");
    jQuery('.pop_container').fadeOut('slow');
    jQuery('.pop_overlay').fadeOut('slow');
});

});

var owl = jQuery("#lab-car");

owl.owlCarousel({
    rewindNav:false,
    slideSpeed : 600,
    items : 4, //10 items above 1000px browser width
    itemsDesktop : [1000,3], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
    itemsTablet: [600,1] //2 items between 600 and 0;
});

// Custom Navigation Events
jQuery(".next1").click(function(){
    owl.trigger('owl.next');
})
jQuery(".prev1").click(function(){
    owl.trigger('owl.prev');
})


jQuery(function () {
    jQuery(".rslides").responsiveSlides({
        speed: 1000,
        timeout: 10000
    });
    jQuery("select").selectBoxIt();

    /*Responsive menu*/
    jQuery('body').addClass('js');
    var jQuerymenu = jQuery('#menup'),
    jQuerymenulink = jQuery('.menu-link'),
    jQuerymenuTrigger = jQuery('.has-subnav > a');

    jQuerymenulink.click(function(e) {
        e.preventDefault();
        jQuerymenulink.toggleClass('active');
        jQuerymenu.toggleClass('active');
    });

    var add_toggle_links = function() {
        if (jQuery('.menu-link').is(":visible")){
            if (jQuery(".toggle-link").length > 0){
            }
            else{
                jQuery('.has-subnav > a').before('<span class="toggle-link"> Open submenu </span>');
                jQuery('.toggle-link').click(function(e) {
                    var jQuerythis = jQuery(this);
                    jQuerythis.toggleClass('active').siblings('ul').toggleClass('active');
                });
            }
        }
        else{
            jQuery('.toggle-link').empty();
        }
    }
    add_toggle_links();
    jQuery(window).bind("resize", add_toggle_links);
    /*Responsive menu*/

    /*Font Resize*/
    /*jQuery('body').flowtype({
     minimum: 500,
     maximum: 1200,
     minFont: 12,
     maxFont: 40,
     fontRatio: 30,
 });*/

/*Right side menu*/


jQuery(".open1").on("click", function() {
    jQuery(".small_box1").slideToggle();
    /*jQuery(this).addClass("act_arrow");*/
    var jQuerythis = jQuery(this);
    if(jQuerythis.hasClass('act_arrow') === true) {
        jQuerythis.removeClass('act_arrow');
    } else if(a.hasClass('act_arrow') === false) {
        jQuerythis.addClass('act_arrow');
    } else {
        a.removeClass('ac_arrow');
        jQuerythis.addClass('act_arrow');
    }
});

jQuery(".open2").on("click", function() {
    jQuery(".small_box2").slideToggle();
    /*jQuery(this).addClass("act_arrow");*/
    var jQuerythis = jQuery(this);
    if(jQuerythis.hasClass('act_arrow') === true) {
        jQuerythis.removeClass('act_arrow');
    } else if(a.hasClass('act_arrow') === false) {
        jQuerythis.addClass('act_arrow');
    } else {
        a.removeClass('ac_arrow');
        jQuerythis.addClass('act_arrow');
    }
});

jQuery(".open3").on("click", function() {
    jQuery(".small_box3").slideToggle();
    /*jQuery(this).addClass("act_arrow");*/
    var jQuerythis = jQuery(this);
    if(jQuerythis.hasClass('act_arrow') === true) {
        jQuerythis.removeClass('act_arrow');
    } else if(a.hasClass('act_arrow') === false) {
        jQuerythis.addClass('act_arrow');
    } else {
        a.removeClass('ac_arrow');
        jQuerythis.addClass('act_arrow');
    }
});

jQuery(".open4").on("click", function() {
    jQuery(".small_box4").slideToggle();
    /*jQuery(this).addClass("act_arrow");*/
    var jQuerythis = jQuery(this);
    if(jQuerythis.hasClass('act_arrow') === true) {
        jQuerythis.removeClass('act_arrow');
    } else if(a.hasClass('act_arrow') === false) {
        jQuerythis.addClass('act_arrow');
    } else {
        a.removeClass('ac_arrow');
        jQuerythis.addClass('act_arrow');
    }
});
});

function showMessage(message){
    jQuery("#MessageContent").html(message);
    jQuery("#MessageBox").show();
}

function closeMessage(message){
    jQuery("#MessageBox").hide();
    var pathname = window.location.pathname;
    if(pathname.indexOf("contact-us") != -1){
     setEnquryError();
     setRegionError();
     setLocationError();
     setCountryError();
     setPhoneError();
     setEmailError();
     setLastNameError();
     setFirstNameError();
 }
}

