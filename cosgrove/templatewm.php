<?php

// function watermark_preprocess_block( &$vars ) {}

function watermark_preprocess_html(&$variables){
	if (_is_ajax()) {
		$variables['theme_hook_suggestions'][] = 'html__ajax';
	}	//dpm($variables['theme_hook_suggestions']);
}

function watermark_preprocess_page(&$variables){
	if (_is_ajax()) {
		$variables['theme_hook_suggestions'][] = 'page__ajax';
	}
}

function _is_ajax() {
	return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
}

function watermark_preprocess_node(&$variables){

	// if( $variables['nid'] == 21){
	// 	dpm( $variables );
	// }

	$variables['theme_hook_suggestions'][] = 'node__real_estate_lot';
	// dpm($variables['theme_hook_suggestions']);
}


// function watermar_preprocess_node_webform(&$variables)
// {
// 	dpm($variables);
// }
// 



// function watermark_preprocess_form_element(&$variables)
// {
// 	dpm($variables);
// }