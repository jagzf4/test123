<?php
    global $base_url;
	//echo "<pre/>"; print_r($data); exit;
?>

<div class="history_title_wrap1" id="locate-us-tree">
                <div class="container">
                    <div class="large-9 medium-11 column large-centered medium-centered">
                        <h2>Skanem Locations</h2>
                    </div>
                </div>
                <div class="history_arrow"></div>
            </div>
            <!-- Our history title -->
            <!-- team tree -->
            <div class="container btm_mr">
                <div class="large-16 medium-16 column team_wrap">
                    <div class="locate_tree_wrap">
                        <div class="team_level_3">
                        	<?php 
                                $i=1;
                                $j=1;
                                foreach($data as $k=>$v){
                        	?> 
                            <div class="level3_col<?php echo $i; ?>">
                                <ul class="team_collist<?php echo $i; ?>">
                                    <li class="first_list">
                                    <?php    
                                        if(!empty($v['locations'])){
                                    ?>
                                        <span><?php echo $k; ?></span>
                                        <span class="<?php echo "list_blue_arrow";  ?>"></span>
                                    <?php } else { ?>
                                        <a href="#"><?php echo $k; ?></a>
                                    <?php } ?>
                                    </li>
                                    <?php  if(!empty($v['locations'])){ 
                                            //echo "<pre/>"; print_r($v['locations']); exit; 
                                            foreach($v['locations'] as $key=>$value){
                                    ?>
                                    <li><a href="<?php echo url('node/'.$key); ?>"><?php echo $value; ?></a></li>
                                    <?php } } ?>
                                </ul>
                            </div>
                            <?php $i++; $j++;} ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="large-16 small-16 column team_wrap640">
                    <div class="locate_tree_wrap640">
                        <div class="small_sky_blue">
                            <span>Skanem Locations</span>
                        </div>
                        <div class="small_level3_wrap">
                            <div>
                                <ul id="small_team_acc">
                                    <?php 
                                    		$color = array();
                                    		$color[1] = 'orange';
                                    		$color[2] = 'sky_blue';
                                    		$color[3] = 'red';
                                    		$color[4] = 'purple';
                                            $color[5] = 'pink';

                                    		$j=1;

                                            $i=1;
                                            foreach($data as $k=>$v){

                                            	if($j==6)
                                            		$j=1;

                                            	if($j==1){
                                            		$colorval = $color[$j]; 
                                            	}
                                            	elseif($j==2){
                                            		$colorval = $color[$j]; 
                                            	}
                                            	elseif($j==3){
                                            		$colorval = $color[$j]; 
                                            	}
                                            	elseif($j==4){
                                            		$colorval = $color[$j]; 
                                            	}
                                                elseif($j==5){
                                                    $colorval = $color[$j];
                                                }

                                            //$numberToWord = new Numbers_Words();
                                    ?>  
                                    <li id="<?php echo readNumber($i); ?>">
                                        <a href="javascript:;" class="<?php if(!empty($v['locations'])) { echo 'open1'; } else { echo 'open11'; } ?>"><span class="small_<?php echo $colorval; ?>_box"><?php echo $k; ?></span></a>
                                        <div class="active small_box">
                                            <div>
                                                <ul class="small_team_<?php echo $colorval; ?>_list">
                                                    <?php if(!empty($v['locations'])){ 
                                                        //echo "<pre/>"; print_r($v['locations']); exit; 
                                                        foreach($v['locations'] as $key=>$value){
                                                    ?>
                                                    <li><a href="<?php echo url('node/'.$key); ?>"><?php echo $value; ?></a></li>
                                                    <?php } } ?>
                                                </ul>
                                            </div>
                                        </div>        
                                    </li>
                                    <?php $i++; $j++; } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- team tree -->
<script>

    jQuery(function() {
            /*Responsive accordian for our team*/
            var open1 = jQuery('.open1'),
                a = jQuery('#small_team_acc').find('a');

            console.log(a.hasClass('active'));

            open1.click(function(e){
                jQuery( ".small_box" ).slideUp();
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

</script>
<?php
function readNumber($num, $depth=0)
{
    $num = (int)$num;
    $retval ="";
    if ($num < 0) // if it's any other negative, just flip it and call again
        return "negative " + readNumber(-$num, 0);
    if ($num > 99) // 100 and above
    {
        if ($num > 999) // 1000 and higher
            $retval .= readNumber($num/1000, $depth+3);

        $num %= 1000; // now we just need the last three digits
        if ($num > 99) // as long as the first digit is not zero
            $retval .= readNumber($num/100, 2)." hundred\n";
        $retval .=readNumber($num%100, 1); // our last two digits                       
    }
    else // from 0 to 99
    {
        $mod = floor($num / 10);
        if ($mod == 0) // ones place
        {
            if ($num == 1) $retval.="one";
            else if ($num == 2) $retval.="two";
            else if ($num == 3) $retval.="three";
            else if ($num == 4) $retval.="four";
            else if ($num == 5) $retval.="five";
            else if ($num == 6) $retval.="six";
            else if ($num == 7) $retval.="seven";
            else if ($num == 8) $retval.="eight";
            else if ($num == 9) $retval.="nine";
        }
        else if ($mod == 1) // if there's a one in the ten's place
        {
            if ($num == 10) $retval.="ten";
            else if ($num == 11) $retval.="eleven";
            else if ($num == 12) $retval.="twelve";
            else if ($num == 13) $retval.="thirteen";
            else if ($num == 14) $retval.="fourteen";
            else if ($num == 15) $retval.="fifteen";
            else if ($num == 16) $retval.="sixteen";
            else if ($num == 17) $retval.="seventeen";
            else if ($num == 18) $retval.="eighteen";
            else if ($num == 19) $retval.="nineteen";
        }
        else // if there's a different number in the ten's place
        {
            if ($mod == 2) $retval.="twenty ";
            else if ($mod == 3) $retval.="thirty ";
            else if ($mod == 4) $retval.="forty ";
            else if ($mod == 5) $retval.="fifty ";
            else if ($mod == 6) $retval.="sixty ";
            else if ($mod == 7) $retval.="seventy ";
            else if ($mod == 8) $retval.="eighty ";
            else if ($mod == 9) $retval.="ninety ";
            if (($num % 10) != 0)
            {
                $retval = rtrim($retval); //get rid of space at end
                $retval .= "-";
            }
            $retval.=readNumber($num % 10, 0);
        }
    }

    if ($num != 0)
    {
        if ($depth == 3)
            $retval.=" thousand\n";
        else if ($depth == 6)
            $retval.=" million\n";
        if ($depth == 9)
            $retval.=" billion\n";
    }
    return $retval;
}


?>