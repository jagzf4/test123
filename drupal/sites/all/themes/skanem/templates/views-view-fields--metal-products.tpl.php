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
$spec_arr = explode('#',$fields['field_specifications']->content);
?>
<div class="large-4 medium-4 one_third column left min_ht_sm">
                                           
    <div class="mp_thumb">
        <?php echo $fields['field_images']->content; ?>
    </div>
    
    <div class="prod_desc_list">
        <div>
            <h2><?php echo $fields['title']->raw; ?></h2>
        </div>
        <div>
            <?php echo $fields['body']->content; ?>
            <ul>
            	<?php foreach($spec_arr as $val){ ?>
                <li><span><?php echo $val; ?></span></li>
                <?php } ?>
            </ul>
        </div>
    </div>    
</div>