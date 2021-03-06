<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

	//dpm($fields);
	$imgarr = explode(",", $fields['field_images']->content);

	$valuesarr = explode(",",$fields['field_values']->content);
?>
<div class="yellow_arrow"></div>
<ul class="rslides">
    <?php foreach($imgarr as $img){  ?>
		<li><?php echo $img; ?></li>
	<?php } ?>
</ul>
<div class="content">
    <div class="container">
        <div class="medium-4 large-3 column small-16"><div class="banner-title title-gray"><?php echo $fields['title']->content; ?></div></div>
        <div class="medium-7 large-8 column message small-16">
            <div class="left desc-1">
               <?php echo $fields['body']->content; ?>
            </div>
        </div>
        <div class="medium-5 large-5 column desc-1 back_arrow small-16">
            <a href="<?php echo drupal_get_path_alias('node/14'); ?>"><span class="icon black-arrow left"></span></a>
        </div>

        <div class="sticker">
           <img src="<?php echo drupal_get_path('theme', 'skanem') .'/img/slide-sticker.png';?>">
        </div>
    </div>
</div>

