<?php



function skanem_form_alter(&$form, &$form_state, $form_id){
//echo "<pre/>"; print_r($form_id); exit; 
}

function skanem_form_newsletter_manage_subscriptions_form_alter(&$form, &$form_state, $form_id) {

  global $user;

  $res = 0;

  if($user->uid){

    $result = db_select('newsletter_subscriber', 'n')
    ->fields('n')
    ->condition('uid', $user->uid,'=')
    ->execute()
    ->fetchAssoc();
    //echo "<pre/>"; print_r($result); exit;
    if(!empty($result)){
      $res=1;
    }
    if($res==0){

      $form['mail']['email']['#title'] = NULL;
      $form['mail']['email']['#disabled'] = TRUE;
      $form['mail']['email']['#attributes']['placeholder']='Enter your Email ID here';
      $form['mail']['email']['#attributes']['class'][] = 'subscribe-email';
      $form['mail']['email']['#prefix']='<div class="medium-9 large-4 columns last large-push-8 email_small">';
      $form['mail']['email']['#suffix']='</div>';

      $form['submit']['#prefix']='<div class="medium-7 large-4 columns subscribe-btn first last fr">';

      $form['submit']['#suffix']='<a class="purple-btn" href="#">Subscribe to newsletter <span class="icon"></span></a></div>';

      $form['submit']['#attributes']['class'][] = ''; 
      $form['#prefix']='<div class="footer_up"><div class="container"><div class="medium-16 large-16 columns">';
      $form['#suffix']='</div></div></div>';

    }

  }
  else{
    $form['mail']['email']['#title'] = NULL;
    $form['mail']['email']['#attributes']['placeholder']='Enter your Email ID here';
    $form['mail']['email']['#attributes']['class'][] = 'subscribe-email';
    $form['mail']['email']['#prefix']='<div class="medium-9 large-4 columns last large-push-8 email_small">';
    $form['mail']['email']['#suffix']='</div>';

    $form['submit']['#prefix']='<div class="medium-7 large-4 columns subscribe-btn first last fr">';

    $form['submit']['#suffix']='<a class="purple-btn" href="#">Subscribe to newsletter <span class="icon"></span></a></div>';

    $form['submit']['#attributes']['class'][] = ''; 
    $form['#prefix']='<div class="footer_up"><div class="container"><div class="medium-16 large-16 columns">';
    $form['#suffix']='</div></div></div>';
  }
}

function skanem_form_dropdown_ajax_dropdown_alter(&$form, &$form_state, $form_id){
  //echo "<pre/>"; print_r($form); exit;
  if(current_path()=='node/39' || current_path()=='node/40' || current_path()=='node/15' || current_path()=="node/56" || current_path()=="node/2")
    $locbanner = 'loc-bann';
  else
    $locbanner = 'locate-banner';

  $pathname = drupal_get_path_alias(current_path()); 
  if(strpos($pathname,'locate-us')!== false){
    $form['#prefix'] = '<div id="locate-banner1" class="locat_bg">
    <div class="container">
      <div class="medium-9 large-6 column">
        <div class="banner-title title-white1">Locate Us</div>
        <div class="desc-2">
          We are closer to your markets around the world
        </div>';
        $form['#suffix'] = '</div></div></div>';
        $form['dropdown_ajax_dropdown']['region']['#prefix'] = '<div class="selects1">';
        $form['dropdown_ajax_dropdown']['region']['#suffix'] = '</div><div class="clearfix"></div>';
        $form['dropdown_ajax_dropdown']['wrapper']['location']['#prefix'] = '<div class="selects1">';
        $form['dropdown_ajax_dropdown']['wrapper']['location']['#suffix'] = '</div><div class="clearfix"></div>';
      }
      else{
        $form['#prefix'] = '<div id="'.$locbanner.'">
        <div class="container">
          <div class="medium-9 large-6 column content large-push-10 medium-push-7">
            <div class="banner-title title-gray">Locate Us</div>
            <div class="desc-1">We are closer to your markets around the world</div>
            <div class="desc-2">
              With 15 production units, the Skanem team encompasses over 1200 employees and is spread
              across 9 countries in Europe, Asia and Africa.
            </div>';
            $form['#suffix'] = '</div></div></div>';
            $form['dropdown_ajax_dropdown']['region']['#prefix'] = '<div class="selects">';
            $form['dropdown_ajax_dropdown']['region']['#suffix'] = '</div><div class="clearfix"></div>';
            $form['dropdown_ajax_dropdown']['wrapper']['location']['#prefix'] = '<div class="selects">';
            $form['dropdown_ajax_dropdown']['wrapper']['location']['#suffix'] = '</div><div class="clearfix"></div>';
          }
        }

        function skanem_preprocess_page(&$vars){
  //$vars['main_menu'] = menu_main_menu();
  //echo "<pre>"; print_r($vars); exit;
  //echo "<pre/>".menu_get_active_menu_name(); exit;
          if(drupal_is_front_page()){
            $subvarform = drupal_get_form('newsletter_manage_subscriptions_form');
            $subscription_form = drupal_render($subvarform);
            $vars['subscription_form'] = $subscription_form;
          }
          else{
            $subvarform = drupal_get_form('newsletter_manage_subscriptions_form');
            $subscription_form = drupal_render($subvarform);
            $vars['subscription_form'] = $subscription_form;
          }

          $header_menu_tree = menu_tree_all_data('menu-header-menu');
          $vars['header_menu_expanded'] = menu_tree_output($header_menu_tree); 

   /* $currentUrl =  current_path();
    if(strpos($currentUrl,'labels/')!== false && strlen($currentUrl) > 10){
        drupal_goto("admin/dashboard");
      }*/


    }

/*function skanem_preprocess_node(&$vars){
  //$vars['main_menu'] = menu_main_menu();
  //echo "<pre>"; print_r($vars); exit;

}*/

function skanem_js_alter(&$javascript) {
  // Swap out jQuery to use an updated version of the library.
  //echo "<pre/>"; print_r($javascript); exit;
  if(isset($javascript['misc/jquery.js'])){   
    $version = '1.10';  
    //$javascript['misc/jquery.js']['data'] = drupal_get_path('module', 'jquery_update') . '/replace/jquery/'.$version.'/jquery.js';

    $path = drupal_get_path('module', 'jquery_update') . '/replace/jquery/'.$version.'/jquery.js';

    // Copy the current jQuery file settings and change

    $javascript[$path] = $javascript['misc/jquery.js'];

    // Update necessary settings
    $javascript[$path]['version'] = 1.10;
    $javascript[$path]['data'] = $path;

    // Finally remove the original jQuery
    unset($javascript['misc/jquery.js']);
  }
}

function skanem_css_alter(&$css) {

  unset($css[drupal_get_path('theme', 'tao') . '/base.css']);
  unset($css[drupal_get_path('theme', 'tao') . '/reset.css']);

}

function skanem_breadcrumb($variables) {

  $breadcrumb = $variables['breadcrumb'];
  //
  if (!empty($breadcrumb)) {

    $menuarr = menu_get_menus();
  //echo "<pre/>"; print_r($menuarr); exit;
    $allmenuarr = array();

    $i=0;
    foreach($menuarr as $k=>$v){ 
    //$allmenuarr[$i] = menu_tree_all_data($v);
      $allmenuarr[$k] = menu_tree_all_data($k);
      $i++;
    }

  //echo "<pre/>"; print_r(menu_tree_all_data('main-menu')); exit;
    $key = arr_search($allmenuarr,'link_path',current_path());
    $mainmenuarr = menu_tree_all_data('main-menu');

    /*if(current_path()=='node/90'){
      $breadcrumb[] = '<a href="'.url('node/90').'">Locate Us</a>';
    }*/
	  if(in_array(current_path(), array("node/90", "node/110", "node/101", "node/99", "node/96", "node/81", "node/130", "node/86", "node/109", "node/88", "node/121", "node/85", "node/82", "node/84", "node/83", "node/103"))){
		  $breadcrumb[] = '<a href="'.url('node/121').'">Locate Us</a>';
	  }
  //echo "<pre/>"; print_r($key); exit;
    if(!empty($key)){
      $menutitlearr = explode("-",$key['0']['menu_name']);
      $shftarr  = array_shift($menutitlearr);
      $linktitle = strtoupper(implode(" ",$menutitlearr));

      $mainmenulink = arr_search($mainmenuarr,'link_title',$linktitle);
    //echo "<pre/>"; print_r($mainmenulink['0']['link_path']); exit;
      if(isset($mainmenulink['0']['link_path'])){
        $breadcrumb[] = '<a href="'.url($mainmenulink['0']['link_path']).'">'.implode(" ",$menutitlearr).'</a>';
      }
    }

    // Adding the title of the current page to the breadcrumb.
    $breadcrumb[] = '<span>'.drupal_get_title().'</span>';
    
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    //$output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    //echo "<pre>".implode(' » ', $breadcrumb); exit; 
    $output = '';
    $output .= '<div class="bread_wrap"><div class="container"><nav class="breadcrumbs"> ' . implode('', $breadcrumb) . '</nav>
  </div>
</div>';
return $output;
}
}

function skanem_links($variables) {

  $links = $variables['links'];
  $attributes = $variables['attributes'];
  $heading = $variables['heading'];

  global $language_url;
  $output = '';

  if (count($links) > 0) {
    $output = '';

    // Treat the heading first if it is present to prepend it to the
    // list of links.

    $output .= '<ul' . drupal_attributes($attributes) . '>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = array($key);

      // Add first, last and active classes to the list of links to help out themers.
      if ($i == 1) {
        $class[] = 'first';
        if (!empty($heading)) {

          if (is_string($heading)) {
          // Prepare the array that will be used when the passed heading
          // is a string.
            $heading = array(
              'text' => $heading,

            // Set the default level of the heading.
              'level' => 'a',
              );
          }
          $output .= '<' . $heading['level'];
          if (!empty($heading['class'])) {
            $output .= drupal_attributes(array('class' => $heading['class']));
          }
          if (!empty($heading['href'])) {
            $output .= drupal_attributes(array('href' => $heading['href']));
          }
          $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
        }

      }
      if ($i == $num_links) {
        $class[] = 'last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page())) && (empty($link['language']) || $link['language']->language == $language_url->language)) {
        $class[] = 'active';
      }
      $output .= '<li' . drupal_attributes(array('class' => $class)) . '>';

      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      elseif (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for adding title and class attributes.
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span' . $span_attributes . '>' . $link['title'] . '</span>';
      }

      $i++;
      $output .= "</li>\n";
    }

    $output .= '</ul>';
  }

 // echo "<pre>"; print_r($output); exit;

  return $output;
}

function skanem_image_style($variables) {
  $style_name = $variables['style_name'];
  $path = $variables['path'];
  

// theme_image() can only honor the $getsize parameter with local file paths.
  // The derivative image is not created until it has been requested so the file
  // may not yet exist, in this case we just fallback to the URL.
  $style_path = image_style_path($style_name, $path);
  if (!file_exists($style_path)) {
    $style_path = image_style_url($style_name, $path);
  }
  $variables['path'] = $style_path;
  if (

    is_file($style_path)) {
    if (list($width, $height, $type, $attributes) = @getimagesize($style_path)) {
      $variables['width'] = $width;
      $variables['height'] = $height;
    }
  }
  
  return theme('image', $variables);
}

function arr_search($array, $key, $value)
{
  $results = array();

  if (is_array($array)) {
    if (isset($array[$key]) && $array[$key] == $value) {
      $results[] = $array;
    }

    foreach ($array as $subarray) {
      $results = array_merge($results, arr_search($subarray, $key, $value));
    }
  }

  return $results;
}

function skanem_form_webform_client_form_2_alter(&$form, &$form_state, $form_id)
{
  $form["submitted"]["first_name"]["#prefix"] = "<div class='form_row row'><div class='medium-8 large-8 small-16 column'><div class='con_input_wrap'>";
  $form["submitted"]["first_name"]["#suffix"] = "</div></div>";
  $form["submitted"]["first_name"]["#attributes"]["placeholder"] = "First Name";
  $form["submitted"]["first_name"]["#title_display"] = "none";

  $form["submitted"]["last_name"]["#prefix"] = '<div class="medium-8 large-8 small-16 column"><div class="con_input_wrap">';
  $form["submitted"]["last_name"]["#suffix"] = '</div></div><div class="clearfix"></div></div>';
  $form["submitted"]["last_name"]["#attributes"]["placeholder"] = "Last Name";
  $form["submitted"]["last_name"]["#title_display"] = "none";

  $form["submitted"]["email"]["#prefix"] = '<div class="form_row row"><div class="medium-8 large-8 small-16 column"><div class="con_input_wrap">';
  $form["submitted"]["email"]["#suffix"] = '</div></div>';
  $form["submitted"]["email"]["#attributes"]["placeholder"] = "E-mail";
  $form["submitted"]["email"]["#title_display"] = "none";

  $form["submitted"]["phone"]["#prefix"] = '<div class="medium-8 large-8 small-16 column"><div class="con_input_wrap">';
  $form["submitted"]["phone"]["#suffix"] = '</div></div><div class="clearfix"></div></div>';
  $form["submitted"]["phone"]["#attributes"]["placeholder"] = "Phone";
  $form["submitted"]["phone"]["#title_display"] = "none";

  $form["submitted"]["country"]["#prefix"] = '<div class="form_row row"><div class="medium-8 large-8 small-16 column"><div class="con_input_wrap">';
  $form["submitted"]["country"]["#suffix"] = '</div></div><div class="clearfix"></div></div>';
  $form["submitted"]["country"]["#attributes"]["placeholder"] = "Country";
  $form["submitted"]["country"]["#title_display"] = "none";

  $form["submitted"]["choose_division"]["#prefix"] = '<div class="form_row row"><div class="medium-8 large-8 small-16 column"><div class="select_style">';
  $form["submitted"]["choose_division"]["#suffix"] = '</div></div>';
  $form["submitted"]["choose_division"]["#attributes"]["placeholder"] = "Regions";
  $form["submitted"]["choose_division"]["#title_display"] = "none";

  $form["submitted"]["choose_location"]["#prefix"] = '<div class="medium-8 large-8 small-16 column"><div class="select_style">';
  $form["submitted"]["choose_location"]["#suffix"] = '</div></div><div class="clearfix"></div></div>';
  $form["submitted"]["choose_location"]["#attributes"]["placeholder"] = "Locations";
  $form["submitted"]["choose_location"]["#title_display"] = "none";

  $form["submitted"]["inquiry"]["#prefix"] = '<div class="form_row row"><div class="medium-16 large-16 small-16 column"><div class="con_input_wrap">';
  $form["submitted"]["inquiry"]["#suffix"] = ' </div></div><div class="clearfix"></div></div>';
  $form["submitted"]["inquiry"]["#attributes"]["placeholder"] = "Enquiry";
  $form["submitted"]["inquiry"]["#title_display"] = "none";

  $form["actions"]["submit"]["#prefix"] ='<div class="form_row row"><div class="medium-16 large-16 small-16 column"><div class="green_submit">';
  $form["actions"]["submit"]["#suffix"]=' </div></div><div class="clearfix"></div></div>';


}

function skanem_form_webform_client_form_131_alter(&$form, &$form_state, $form_id)
{

  $form["submitted"]["first_name"]["#prefix"] = '<div class="frm_wrapper"><div class="container pd_btm"><div class="medium-16 large-16 column small-16"><div class="wcu_para"><div class="pd_btm"><h2>general application</h2></div><div class="pd_btm para_lst"><p>If you have any questions or want to send a general application, please fill in our contact form below</p></div></div></div><div class="medium-16 large-16 column small-16"><div class="row app_form_wrap"><div class="medium-8 large-8 column small-16"><div class="row"><div class="medium-8 large-8 column small-16">';
  $form["submitted"]["first_name"]["#suffix"] = '</div>';
  $form["submitted"]["first_name"]["#attributes"]["placeholder"] = "First Name";
  $form["submitted"]["first_name"]["#title_display"] = "none";

  $form["submitted"]["last_name"]["#prefix"] = '<div class="medium-8 large-8 column small-16">';
  $form["submitted"]["last_name"]["#suffix"] = '</div></div>';
  $form["submitted"]["last_name"]["#attributes"]["placeholder"] = "Last Name";
  $form["submitted"]["last_name"]["#title_display"] = "none";

  $form["submitted"]["email"]["#prefix"] = '<div class="row"><div class="medium-16 large-16 column small-16">';
  $form["submitted"]["email"]["#suffix"] = '</div></div>';
  $form["submitted"]["email"]["#attributes"]["placeholder"] = "E-mail";
  $form["submitted"]["email"]["#title_display"] = "none";

  $form["submitted"]["mobile"]["#prefix"] = '<div class="row"><div class="medium-8 large-8 column small-16">';
  $form["submitted"]["mobile"]["#suffix"] = '</div>';
  $form["submitted"]["mobile"]["#attributes"]["placeholder"] = "Mobile";
  $form["submitted"]["mobile"]["#title_display"] = "none";

  $form["submitted"]["country"]["#prefix"] = '<div class="medium-8 large-8 column small-16">';
  $form["submitted"]["country"]["#suffix"] = '</div></div></div>';
  $form["submitted"]["country"]["#attributes"]["placeholder"] = "Country";
  $form["submitted"]["country"]["#title_display"] = "none";

  $form["submitted"]["enqury"]["#prefix"] = '<div class="medium-8 large-8 column small-16"><div class="row"><div class="medium-16 large-16 column small-16">';
  $form["submitted"]["enqury"]["#suffix"] = '</div></div><div class="row file_ip_wrap"><div class="medium-16 large-16 column small-16">';
  $form["submitted"]["enqury"]["#attributes"]["placeholder"] = "Enquiry";
  $form["submitted"]["enqury"]["#title_display"] = "none";

  $form["submitted"]["attachment"] = array(
    '#type' => 'managed_file',
    '#process' => array('_my_file_element_process'),
    );

  $form["actions"]["submit"]["#prefix"] ='<div class="file_btn_wrap"><a href="javascript:void(0)" id="browse" class="primary file_browse">ATTACH FILE</a><input type="text" id="testfile" class="right_txt"></input></div><div class="clearfix"></div></div></div><div class="row"><div class="medium-16 large-16 column small-16"><div class="mt_tp_btn">';
  $form["actions"]["submit"]["#suffix"]='</div><div class="clearfix"></div></div></div></div></div></div></div></div><div class="container"><div class="border_grey"></div></div></div>';
  $form['actions']['submit']['#attributes'] = array('class' => array('round', 'button', 'radius','txt_upper'));
  $form['submit']['#attributes']['class'][] = 'button radius round txt_upper'; 
  //echo "<pre>";      print_r($form);      exit;

}

function _my_file_element_process($element, &$form_state, $form) {
  $element = file_managed_file_process($element, $form_state, $form);
  $element['upload_button']['#access'] = FALSE;
  return $element;
}