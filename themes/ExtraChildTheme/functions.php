<?php
/* #01 Load Parent Theme style.css file
=============================== */
function extra_enqueue_styles() {
	wp_enqueue_style( 'extra-parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'extra_enqueue_styles' );

/*================================================
#Load the translations from the child theme folder
================================================*/
function wpcninja_translation() {
	load_child_theme_textdomain( 'extra', get_stylesheet_directory() . '/lang/theme/' );
	load_child_theme_textdomain( 'et_builder', get_stylesheet_directory() . '/lang/builder/' );

}
add_action( 'after_setup_theme', 'wpcninja_translation' );

add_action('extra_trending_posts_query',function() {
return array(
'post_type' => 'post',
'post_status' => 'publish',
'category_name' => 'service-standard',
'posts_per_page' => '1',
'orderby' => 'title',
'order' => 'DESC',
);
});

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (current_user_can('subscriber') && !is_admin()) {
    show_admin_bar(false);
  }
}

add_action('wp_enqueue_scripts', 'chenmed_deregister_styles');
function chenmed_deregister_styles()    {
  if (!current_user_can('subscriber')) {
    return;
  }
  wp_deregister_style('dashicons');
}

function searchwp_term_highlight_auto_excerpt( $excerpt ) {
	global $post;

	if ( ! is_search() ) {
		return $excerpt;
	}

	// prevent recursion
	remove_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

	$global_excerpt = searchwp_term_highlight_get_the_excerpt_global( $post->ID, null, get_search_query() );

	add_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

	return wp_kses_post( $global_excerpt );
}

add_filter( 'get_the_excerpt', 'searchwp_term_highlight_auto_excerpt' );

add_filter( 'searchwp_term_highlight_break_on_first_match', '__return_false' );

include('custom-shortcodes.php');

// return username

function show_loggedin_function( $atts ) {

global $current_user, $user_login;
      get_currentuserinfo();
add_filter('widget_text', 'do_shortcode');
if ($user_login)
return 'Hello, ' . $current_user->user_firstname . '.';
else
return '<a href="' . wp_login_url() . ' ">Log in please.</a>';

}
add_shortcode( 'show_loggedin_as', 'show_loggedin_function' );

// Caldera forms
include('caldera-shortcodes.php');

// User locations taxonomy meta
include('inc/user-location-taxonomy.php');

// Logout redirect
add_action('wp_logout','chenmed_redirect_after_logout');
function chenmed_redirect_after_logout() {
	$sloUrl = get_option('onelogin_saml_idp_slo');
	if (!empty($sloUrl)) {
		wp_redirect($sloUrl);
		exit();
	}
}

// Logout URL
add_shortcode('logout_url', 'get_logout_url');
function get_logout_url() {
	return wp_logout_url();
}

// Use SMTP
add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($phpmailer) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = 'relay.chenmed.com';
	$phpmailer->SMTPAuth   = false;
	$phpmailer->Port       = 25;
	$phpmailer->SMTPSecure = false;
	$phpmailer->From       = 'no-reply@chenmed.com';
	$phpmailer->FromName   = 'ChenMed Intranet';
}

// Use html mail
add_filter('wp_mail_content_type', 'chenmed_html_email');
function chenmed_html_email() {
	return 'text/html';
}
/* +++++++++++++++++++++++++++++++sbs develoepr work++++++++++++++++++++++++++++++++++++++++++ */
function get_post_summary($post_type='post',$post_id=0,$content_length = 50){
	$summary = 'not available';
	switch($post_type){
		case 'faqs':{
			$summary = '';
		}break;
		case 'guidelines':{
			$summary = get_field('summary',$post_id);
		}break;
		case 'job_aids':{
			$summary = get_field('job_aid_body',$post_id);
		}break;
		case 'manuals':{
			$summary = get_field('summary',$post_id);
		}break;
		case 'playbooks':{
			$summary = get_field('summary',$post_id);
		}break;
		case 'policies':{
			$summary = '';
		}break;
		case 'sops':{
			$summary = '';
		}break;
		case 'training':{
			$summary = get_field('summary',$post_id);
		}break;
		case 'video_podcast':{
			$summary = '';
		}break;
		default:{
			$summary = wp_strip_all_tags(get_post_meta($post_id,'_post_review_box_summary',true));
		}
	}
	$summary = ($summary!='')?mb_substr($summary,0,$content_length,'utf-8').'...':$summary;
	return $summary;
}
//add();
function done(){
	
}
/* +++++++++++++++++++++++++++++++sbs develoepr work++++++++++++++++++++++++++++++++++++++++++ */