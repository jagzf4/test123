<?php
	//dpm($content);

?>
<style>
.field-name-field-annual-report span.file img,.field-name-field-annual-report .field-label{
	display:none;
}
</style>
<script>
	jQuery(document).ready(function() {
		jQuery( "span.file span" ).remove();
		jQuery( ".subscribe-btn a" ).addClass('an_report');
		jQuery( ".subscribe-btn a" ).html('<span>View our annual report</span><span class="icon"></span><span class="clearfix"></span>');
	});
</script>
<div class="ftup_whower">
	<div class="container">
        <div class="medium-16 large-16 small-16 columns">
            <div class="subscribe-btn">
    		<?php print render($content['field_annual_report']); ?>
			</div>
       </div>
   </div>
</div>
