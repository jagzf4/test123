

/**
 * Special Effects AJAX framework command.
 */
Drupal.ajax.prototype.commands.locationchange =  function(ajax, response, status) {
	jQuery(location).attr('href');
    var pathname = window.location.pathname;
    //console.log(pathname);
    if (pathname.toLowerCase().indexOf("locate-us") >= 0){
    	console.log(pathname);
		jQuery( "div.selects" ).removeClass( "selects" ).addClass( "selects1" );
	}
 	jQuery("select").selectBoxIt(); // this will be executed after the ajax call
}
