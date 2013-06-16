<?php

global $theme_key, $cosgrove_core;
$theme_key = $GLOBALS['theme_key'];
$cosgrove_core = drupal_get_path('theme', 'cosgrove');

// Preprocess and Overrides
/*include_once($cosgrove_core . '/includes/alter.inc');      // hook_alters
include_once($cosgrove_core . '/includes/preprocess.inc'); // all preprocess functions
include_once($cosgrove_core . '/includes/process.inc');    // all process functions
include_once($cosgrove_core . '/includes/theme.inc');      // theme function overrides
*/


// Alter the default Drupal system styles.
function cosgrove_css_alter(&$css) {
  
  //unset($css[drupal_get_path('module', 'comment') . '/comment.css']);
  //unset($css[drupal_get_path('module', 'system') . '/system.messages.css']);
  //unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
  //unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
  //unset($css[drupal_get_path('module', 'user') . '/user.css']);

}
 
// Costmetic form functionality
function cosgrove_form_alter (&$form, &$form_state, $form_id) {
	//kpr($form_id);

	// Specify form to which costmetic functions apply
	if($form_id == 'webform_client_form_name'){
		//kpr($form);
		
		//Placeholders
		$form ["submitted"]["name"]["#attributes"]["placeholder"] = "Please enter full name";
		$form ["submitted"]["email"]["#attributes"]["placeholder"] = "Please enter valid email";
		$form ["submitted"]["website"]["#attributes"]["placeholder"] = "Please enter valid url";
		$form ["submitted"]["subject"]["#attributes"]["placeholder"] = "Please enter subject";
		$form ["submitted"]["message"]["#attributes"]["placeholder"] = "Please enter message";

    }

}

// Alter the user login form.
function cosgrove_form_user_login_alter(&$form, &$form_state) { 
 
  $form['#prefix'] = '<h1>'.t('Login/Register').'</h1>';
 
  // Add a link above the form to the user account creation page
  $form['name']['#prefix'] = l(t('Register a new account'), 'user/register', array('attributes' => array('class' => 'login-register')));
  
  // Add a link under the form to the forgotten password page
  $form['pass']['#suffix'] = l(t('Forgot password?'), 'user/password', array('attributes' => array('class' => 'login-password')));
  
  // Add the HTML5 PLaceholder attribute into the login and password input and unset the label + description
  unset($form['name']['#title']);
  unset($form['name']['#description']);
  unset($form['pass']['#title']);
  unset($form['pass']['#description']);
  $form['name']['#attributes']['placeholder'] = t('Your login');
  $form['pass']['#attributes']['placeholder'] = t('Your password');  

}

// Alter the primary links.
//function cosgrove_menu_tree__main_menu($variables) {
//
//  return '<nav role="navigation"><ul class="menu">' . $variables['tree'] . '</ul></nav>';
//
//}