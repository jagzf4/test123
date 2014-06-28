<?php
	//echo "<pre/>"; print_r($data); exit;
?>
<!-- History timeline -->
<div class="container">
    <div class="large-16 medium-16 column">
        <div class="history_wrap">
        <?php 
        	$bool = true;
        	$bool2 = true;
        	$cntdata = count($data)-1;
        	for ($i = 0; $i < count($data); $i++) {
        		
			    /*echo $data[$i]['title']."<br/>";
			    echo $data[$i]['body']."<br/>";
			    echo $data[$i]['image_url']."<br/>";*/

        if($i%2==0){
			if($bool==true){ 
			if($i==0 && $i!=$cntdata) { $frstclass = "first_history"; }	
			?>
			<div class="<?php if($i==$cntdata) { echo 'last_row'; } else { echo "row_gap"; } ?>">
			<div class="large-8 medium-8 column first res_pad <?php echo $frstclass; ?>">
			    <div id="year<?php echo $data[$i]['title']; ?>" class="year_txt_left"><?php echo $data[$i]['title']; ?><span class="year_left_arr"></span></div>
			    <div class="clearfix"></div>
			    <div class="<?php echo $data[$i]['color_class']; ?>">     
			        <div class="large-8 medium-8 small-16 column first res_pad left_img">
			            <div class="hist_thumb ">
			                <img src="<?php print image_style_url("history_timeline_300_155", $data[$i]['image_url']); ?>">
			            </div>    
			        </div>
			        <div class="small-16 res_pad">
			            <div class="his_desc">
			                <p><?php echo $data[$i]['body']; ?></p>
			            </div>
			        </div>
			        <div class="clearfix"></div>
			    </div> 
			</div>
			<?php if($i==$cntdata) { echo "<div class='clearfix'></div>"; } 
				//echo "Val1";	
				$bool=false;	
			}
			else{
		?>
		<div class="<?php if($i==$cntdata) { echo 'last_row'; } else { echo "row_gap"; } ?>">
		 <div class="large-8 medium-8 column first res_pad">
		    <div id="year<?php echo $data[$i]['title']; ?>" class="year_txt_left"><?php echo $data[$i]['title']; ?><span class="year_left_arr"></span></div>
		    <div class="clearfix"></div>
		    <div class="<?php echo $data[$i]['color_class']; ?>"> 
		        <div class="large-8 medium-8 small-16 column last res_pad right right_img">
		            <div class="hist_thumb">
		                <img src="<?php print image_style_url("history_timeline_300_155", $data[$i]['image_url']); ?>">
		            </div>    
		        </div>    
		        <div class="small-16 res_pad">
		            <div>
		                <p><?php echo $data[$i]['body']; ?></p>
		            </div>
		        </div>                                        
		        <div class="clearfix"></div>
		    </div> 
		</div>
		<?php if($i==$cntdata) { echo "<div class='clearfix'></div>"; } 
				//echo "Val2";	
				$bool=true;
			}

			//echo "Even Numbers 0,2,4";
		}
		else{
			if($bool2==true){

		?>
		<div class="large-8 medium-8 column last second_col res_pad">
		    <div id="year<?php echo $data[$i]['title']; ?>" class="year_txt_right"><?php echo $data[$i]['title']; ?><span class="year_right_arr"></span></div>
		    <div class="clearfix"></div>
		    <div class="<?php echo $data[$i]['color_class']; ?>">     
		        <div class="large-8 medium-8 small-16 column first res_pad left_img">
		            <div class="hist_thumb">
		                <img src="<?php print image_style_url("history_timeline_300_155", $data[$i]['image_url']); ?>">
		            </div>    
		        </div>
		        <div class="small-16 res_pad">
		            <div>
		                <p><?php echo $data[$i]['body']; ?></p>
		            </div>
		        </div>
		        <div class="clearfix"></div>
		    </div>
		</div>
		<div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
		<?php
			//echo "Val3";	
			$bool2=false;	
			}
			else{
		?>
		<div class="large-8 medium-8 column last second_col res_pad">
		    <div id="year<?php echo $data[$i]['title']; ?>" class="year_txt_right"><?php echo $data[$i]['title']; ?><span class="year_right_arr"></span></div>
		    <div class="clearfix"></div>
		    <div class="<?php echo $data[$i]['color_class']; ?>"> 
		        <div class="large-8 medium-8 small-16 column last res_pad right right_img">
		            <div class="hist_thumb">
		                <img src="<?php print image_style_url("history_timeline_300_155", $data[$i]['image_url']); ?>">
		            </div>    
		        </div>    
		        <div class="small-16 res_pad">
		            <div class="his_desc">
		                <p><?php echo $data[$i]['body']; ?></p>
		            </div>
		        </div>
		        <div class="clearfix"></div>
		    </div>
		</div>
		<div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
		<?php
			//echo "Val4";	
			$bool2=true;
			}
			//echo "Odd Numbers 1,3,5";
		}

    	} // End of For Loop
        ?>
        </div>
    </div>
</div>
<!-- History timeline -->