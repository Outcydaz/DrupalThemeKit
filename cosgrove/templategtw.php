<?php


function gateway_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);

  // Replace text line breaks with html line breaks. 
  $output = str_replace("&lt;br&gt;", "<br/>", $output); 
  $output = str_replace("&lt;br/&gt;", "<br/>", $output);
  $output = str_replace("&lt;br /&gt;", "<br/>", $output);
  
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
/* #LINE BREAK IN TAXONOMY TERMS */


// 
// function gateway_preprocess_node($variables)
// {
// 	dpm($variables);
// }