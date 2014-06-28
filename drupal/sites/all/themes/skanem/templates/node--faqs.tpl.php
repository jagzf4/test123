<?php
	//dpm($content);
	$cntVal = count($content['field_question_and_answers']['#items']);
	//echo "<pre>"; print_r($cntVal); exit;
?>
<!-- team tree -->
<div class="container">
    <div class="large-16 medium-16 column">
            <?php for($i=0;$i<$cntVal;$i++){ ?>
            <div class="faq <?php if($i==$cntval) echo "faq_last"; ?>">
            <span><?php echo $content['field_question_and_answers'][$i]['entity']['field_collection_item'][$content['field_question_and_answers']['#items'][$i]['value']]['field_question']['#items'][0]['value'];  ?></span>
            <?php echo $content['field_question_and_answers'][$i]['entity']['field_collection_item'][$content['field_question_and_answers']['#items'][$i]['value']]['field_answer']['#items'][0]['value'];  ?>
            </div>
            <?php } ?>

    </div>
</div>
<!-- team tree -->