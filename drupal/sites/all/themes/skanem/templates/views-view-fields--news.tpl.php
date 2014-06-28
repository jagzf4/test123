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
?>
<div class="medium-4 large-4 columns small-4  medium-push-0 large-push-0">
    <div class="nw_thumb">
        <?php echo $fields['field_images']->content; ?>
    </div>
    <div class="news_para">
        <p><?php echo $fields['title']->raw; ?><!-- <a href="<?php echo $fields['path']->content; ?>"><span class="og_arrow_sm"></span></a> --></p>
        <div class="clearfix"></div>
    </div>
</div>

