<?php

// Service Standard Cron
function getSSLPage($url)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

// Load SS from BI into DB of Home
function importServiceStandard(){
	$url = 'https://cse-service-standard.chenmed.local/service_standard';
	$standard = str_replace('?', '', json_decode(getSSLPage($url)));
	update_option('daily_service_standard', $standard);
	update_option('service_standard_timestamp', time());
}

// Get SS from DB of Home
function getServiceStandard()
{
	$timestamp = get_option('service_standard_timestamp');
	if((time() - $timestamp) > 3600){
		importServiceStandard();
	}
	return get_option('daily_service_standard');
}
add_shortcode('serviceStandard', 'getServiceStandard');

function loadCrosswordAssets()
{
	wp_enqueue_script('crossword', get_stylesheet_directory_uri() . '/crossword/dsCrossword.js', array('jquery'), '1.0.3', true);
	wp_enqueue_style('crossword', get_stylesheet_directory_uri() . '/crossword/dsCrossword.css');
}
add_action('wp_enqueue_scripts', 'loadCrosswordAssets');

function loadCrossword()
{
	return file_get_contents(get_stylesheet_directory_uri() . '/crossword/crossword.html');
}


add_shortcode('testCrossword', 'loadCrossword');
