<?php 
		//dpm($content);	
        //echo "<pre/>"; print_r($content['field_organisation']); exit;
	if(!empty($content['field_organisation']['#items']))
		$orgcount = count($content['field_organisation']['#items']); 
	else
		$orgcount=0;

	if(!empty($content['body']['#items']['0']['value']))
     echo $content['body']['#items']['0']['value']; 
?>

<!-- supply chain -->
            <div id="ss-chain" class="container">
                <div class="medium-16 large-16 column">
                    <div class="sc_head">
	                    <?php
	                      //echo $content['field_organisation']['#object']->title;
	                      echo $node->title;
	                    ?>
                    </div>
                    <div class="row">
                    <?php if(!empty($content['field_contact']['0']['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#items']['0']['value'])){
                        ?>
                        <div class="large-5 medium-8 column lc_wrap">
                            <div class="">
                                <div class="locate-contact"><p>Contact</p></div>
                                <div class="locate-contact-left span_fix">
                                    <span><?php echo $content['field_contact']['0']['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#items']['0']['value']; ?></span>
                                    <?php $addr = $content['field_contact']['0']['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_address']['#items']['0']['value'];
                                    	  $fulladdr = explode(',',$addr);
                                    	  if(count($fulladdr)>1){
                                    	  	foreach($fulladdr as $k=>$v){
                                    	  		echo "<span>".$v."</span>";
                                    	  	}
                                    	  }
                                    	  else{
                                    	  	echo $addr;
                                    	  }	
                                     ?>
                                </div>
                            
                                <div class="locate-contact-right">
                                    <ul>
                                        <?php if(!empty($content['field_contact'][0]['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_tel']['#items']['0']['value'])) { ?>
                                        <li>Tel:   <?php echo $content['field_contact'][0]['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_tel']['#items']['0']['value']; ?></li>
                                        <?php } ?>
                                        <?php if(!empty($content['field_contact'][0]['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#object']->field_fax['und'][0]['value'])){ ?>    
                                        <li>Fax:  <?php echo $content['field_contact'][0]['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#object']->field_fax['und'][0]['value']; ?></li>
                                        <?php } ?>
                                        <?php if(!empty($content['field_contact'][0]['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#object']->field_mailid['und'][0]['value'])){ ?>
                                        <li>E-mail: <?php  echo $content['field_contact'][0]['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#object']->field_mailid['und'][0]['value'];?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class=" clearfix"></div>
                                <div class="hide_border "></div>
                            </div>    
                        </div>
                        <?php } ?>
                        <?php if(!empty($content['field_about_us']['#items']['0']['value'])){ ?>
                         <div class="<?php if(!empty($content['field_contact']['0']['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#items']['0']['value'])){
                        echo "large-11 medium-8"; } else { echo "large-16 medium-16"; }?> column">
                            <div class="<?php if(!empty($content['field_contact']['0']['entity']['field_collection_item'][$content['field_contact']['#items'][0]['value']]['field_organisation_name']['#items']['0']['value'])){
                        echo "locate-about"; } else { echo "locate-about1"; }?>">
                            <div class="locate-contact"><p>About Us</p></div>
                                <div class="locate-about-txt">
                                <?php echo $content['field_about_us']['#items']['0']['value']; ?>
                                </div>
                            </div>
                         </div>
                         <div class="clearfix"></div>
                         <?php } ?>
                    </div>
                    <div class="brdr pad_btm_fix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- #supply chain -->

<?php
     if($orgcount>0){
     	//echo $orgcount; exit;
?>
<!-- why choose us place -->
            <div class="container">
                    <div class="medium-6 large-5 column">
                        <div class="locate-Organisation">Organisation</div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class=" medium-16 large-16 column">
                       		<?php 
                       		$j=1;
                       		$cnt = 0;
                       		for($i=0;$i<$orgcount;$i++){ 
                       		$cnt++;
                       		//echo $content['field_organisation'][$i]['entity']['field_collection_item'][$j]['field_employee_image']['#items']['0']['value']; exit;
                       		?>
                            <div class="left medium-4 large-4 column org_list">
                                <div class="locate-Organisation-img"><img src="<?php echo file_create_url($content['field_organisation'][$i]['entity']['field_collection_item'][$content['field_organisation']['#items'][$i]['value']]['field_employee_image']['#items']['0']['uri']); ?>" /></div>
                                <div class="locate-Organisation-txt">
                                    
                                    <?php echo "<span>".$content['field_organisation'][$i]['entity']['field_collection_item'][$content['field_organisation']['#items'][$i]['value']]['field_employee_name']['#items']['0']['value']."</span><br/>"; ?>
                                    <?php 
                                    $position = $content['field_organisation'][$i]['entity']['field_collection_item'][$content['field_organisation']['#items'][$i]['value']]['field_employee_position']['#items']['0']['value']; 
                                    if(!empty($position)){
                                    ?>
                                    <span>
                                    <?php $posarr = explode(' ',$position);
                                    if(count($posarr)>=4){
                                    	foreach($posarr as $k=>$v){
                                    		if($k==2)
                                    			echo $v."<br/>";
                                    		else
                                    			echo $v." ";
                                    	}
                                    }
                                    else{
                                    	echo $position;	
                                    }
                                    ?>
                                     </span><br/>
                                    <?php
                                    }
                                    //echo count($posarr); exit;
                                    ?>
                                   
                                    <span>
                                    <?php echo $content['field_organisation'][$i]['entity']['field_collection_item'][$content['field_organisation']['#items'][$i]['value']]['field_telephone_no']['#items']['0']['value']; ?>
                                    </span>
                                    <p class="Organisation-clr"><a href="mailto:<?php echo $content['field_organisation'][$i]['entity']['field_collection_item'][$content['field_organisation']['#items'][$i]['value']]['field_employee_mail']['#items']['0']['value']; ?>" target="_top" class="Organisation-clr">Send e-mail</a></p>
                                </div>
                            </div>
							<?php if($cnt==4) { 
								$cnt = 0;
							?>
								<div class="clearfix"></div>
                            <?php }
                            $j++;
                             } ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            
            <!-- #why choose us place -->
<?php } ?>