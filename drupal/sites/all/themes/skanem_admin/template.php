<?php



function skanem_admin_breadcrumb($variables) {
  global $base_url;
  $breadcrumb = $variables['breadcrumb'];
  //echo "<pre/>"; print_r($breadcrumb); exit;
  $dashboard_url = $base_url."/admin/dashboard";
  if (!empty($breadcrumb)) {
    // Adding the title of the current page to the breadcrumb.
    $strfnd = 'node/add';
    if (strpos(current_path(), $strfnd) !== false) 
    $breadcrumb[1] = "<a href=".$dashboard_url.">Dashboard</a>";

    $breadcrumb[] = '<a href="#">'.drupal_get_title().'</a>';
    //echo current_path(); exit;
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    //$output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    //echo "<pre>".implode(' » ', $breadcrumb); exit; 
    $output = '';
    $output .= '<div class="bread_wrap"><div class="container"><nav class="breadcrumbs"> ' . implode(' » ', $breadcrumb) . '</nav>
                    </div>
                </div>';
    return $output;
  }
}


                