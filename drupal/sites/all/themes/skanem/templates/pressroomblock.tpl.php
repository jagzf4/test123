<?php
	//echo "Hello <pre/>"; print_r($locations); exit;	
?>
<!-- news section -->
                <div>
                    <div class="container news_wrap">
                        <div class="medium-16 large-16 small-16 columns medium-push-0 large-push-0">
                                <div class="left"><h2 class="h2_mar_bot">news</h2></div>
                                <div class="right icon_arrow hide-for-small-only">								
									<div class="selects">
										<select id="locations" name="locations">
											<option value="0" selected="selected">Locations</option>
											<?php foreach($locations as $loc){ 
											?>
											<option value="<?php echo $loc->node_created_year; ?>"><?php echo $loc->node_created_year; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="clearfix"></div>
								</div>
                                <div class="clearfix"></div>

                           </div>     
                            <div class="news_section_wrap">
                                <div class="" id="content_inf">
                                	<?php
                                		foreach ($data as $node) {
									      $options = array('absolute' => TRUE);
									      $url = url('node/' . $node->nid, $options);
                                    ?>
                                    <div class="medium-4 large-4 one_third columns">
                                        <div class="news_thumbnil">
										
										<img data-src="<?php echo file_create_url($node->field_images['und'][0]['uri']); ?>" src="img/loader.gif" />
                                        </div>
                                        <div class="news_para_listing">
											<span class="date_news"><?php echo date("F j, Y",$node->created); ?></span>
                                            <h2 class="news_title"><a href="<?php echo $url; ?>"><?php echo  $node->title; ?></a></h2>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
								<a id="next" href="news/news2.html"></a>
                            </div>
                        
                    </div>
                   <!-- <div class="container"><div class="border_grey"></div></div>  -->
                </div>
               <!-- news section -->

<?php
	drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/jquery.infinitescroll.min.js', array('type' => 'file','scope' => 'footer'));
	drupal_add_js(drupal_get_path('theme', 'skanem') .'/js/jquery.unveil.js', array('type' => 'file','scope' => 'footer'));
?>
<script>
        jQuery(function () {
        	jQuery( "#locations" ).change(function() {
        		var locval = jQuery(this).val();
        		 //alert(locval);
        		 if(locval!=0){
        		 	jQuery.ajax({
		            url:"<?php echo url('pressroom/ajax'); ?>",
		            type: 'POST',
		            data:{ yearid: locval},
		            beforeSend: function() {
		                //$('#'+id+' .contentarea').html('<img src="/function-demos/functions/ajax/images/loading.gif" />');
		            },
		            success: function(data, textStatus, xhr) {
		            	jQuery('#content_inf').html(data);
		            },
		            error: function(xhr, textStatus, errorThrown) {
		            	alert('Error');
		            }
		        });
        		}	
        	});
        	
			jQuery('#content_inf').infinitescroll({
			navSelector  	: "#next:last",
			nextSelector 	: "a#next:last",
			itemSelector 	: "div.one_third",
			dataType	 	: 'html',
			loading: {
				img: "img/ajax-loader.gif",
				finishedMsg: "<em>Congratulations, you've reached the end of the Page.</em>",
				msgText: "",
				speed: 'slow'
			},
			path: function(index) {
				var locval2 = jQuery('#locations').val();
				var ajaxpath = "<?php echo url('pressroom/ajax/location'); ?>";
				if(locval2==0){
					return  ajaxpath+"/?index="+index;
				} else {
					return ajaxpath+"/?index="+index+"&location="+ locval2;
				}
			}
			}, function(newElements, data, url){
				jQuery(".news_thumbnil img").unveil(400, function() {
				  jQuery(this).load(function() {
					this.style.opacity = 1;
				  });
				});
			});
			
			
			
			jQuery(".news_thumbnil img").unveil(400, function() {
			  jQuery(this).load(function() {
				this.style.opacity = 1;
			  });
			});
			
        });
    </script>