<?php
/*
Plugin Name: Real Simple Custom Theme Options
Plugin URI:  https://github.com/sreeram62/RealSimpleThemeOptions
Description: Simple theme optipns to make wordpress more easy !!
Version: 1.0.1
Author: Ram Gupta
Text Domain:
Domain Path:
*/


/*Global Variables */
$plugin_url = WP_PLUGIN_URL .'/real-simple-custom-theme-options';
global $bgImage;
global $defaultLogo;
$bgImage = WP_PLUGIN_URL .'/real-simple-custom-theme-options/inc/images/background.jpg';
$defaultLogo = WP_PLUGIN_URL .'/real-simple-custom-theme-options/inc/images/logo-default.png';
$options = array();
$wp_so_phone;
$wp_so_email;


add_action ( 'admin_enqueue_scripts', function () {
    if (is_admin ())
        wp_enqueue_media ();
} );

global $options;
$options = get_option('wp_so_options'); ;
$GLOBALS['options'] = get_option('wp_so_options');
//Actions for including functions for Media Upload



//Updates the URL of the WP admin page logo to home page of site
function the_url_wpadmin_update( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url_wpadmin_update' );

/*Update for login screen logo and form*/
function custom_loginlogo() {
	global $options;
	global $bgImage;
	global $defaultLogo;
	$options["wp_so_admin_bg"] = trim($options["wp_so_admin_bg"]);
	if($options["wp_so_admin_bg"] == ''){
		$options["wp_so_admin_bg"]= $bgImage;
	}
	
	$options["wp_so_admin_logo_url"] = trim($options["wp_so_admin_logo_url"]);
	if($options["wp_so_admin_logo_url"] == ''){
		$options["wp_so_admin_logo_url"]= $defaultLogo;
	}
	
function change_title_on_logo() {
return "Backend";
}
add_filter("login_headertitle", "change_title_on_logo");
	
echo '<style type="text/css">

h1 a {background-image: url('.$options["wp_so_admin_logo_url"].') !important;
     background-position: center center !important;}

h1 a {background-size: 200px !important;}
h1 a {width: 200px !important;}
h1{border-radius:10px;}
body.login{background-image: url('.$options["wp_so_admin_bg"].') !important;
            background-size: cover;
		background-repeat: no-repeat;

}
.login-action-login #loginform{
   background: #eee;
   border-radius:15px;
}
.login a{color:white !important}
.login input[type="text"]{ border: 1px solid #d2d2d2 !important ;
    height: 50px;
    width: 100%;
    padding: 5px 15px !important;
    color: #545c62 !important;
    font-size: 16px;
    font-weight: 300;
}
.login input[type="submit"]{
    line-height: 50px;
    height: 50px;
    text-align: center;
    color: #fff !important;
    font-size: 16px;
    border-radius: 3px;
}

.login input[type="submit"]{
   text-shadow: none !important;
   box-shadow : none !important;
}

</style>';
}
add_action('login_head', 'custom_loginlogo');
/*Logo Update End */
//Adding Scripts/CSS to Head
  function theme_head_script() {
      global $options;
	  $options = get_option('wp_so_options'); ;
	   $GLOBALS['options'] = get_option('wp_so_options');
	   
	  $options_analytics = $options['wp_so_analytics'];
	    echo (htmlspecialchars_decode($options_analytics));
	  
	     $options_css = $options['wp_so_head_styles'];
	    echo (htmlspecialchars_decode($options_css));
	  
	    $wp_so_other_head = $options['wp_so_other_head'];
	    echo (htmlspecialchars_decode($wp_so_other_head));
?>
<?php								 
 }

add_action('wp_head','theme_head_script');
function wp_real_simple_theme_options_menu(){
  /*page title, menu title,capability,menu slug, function to call */
      add_options_page(
            'Simple Custom Theme Options',
            'Simple Theme Options',
            'manage_options',
            'wp-real-simple-theme-options',
            'wp_real_simple_theme_options_page'
      );
}
add_action('admin_menu','wp_real_simple_theme_options_menu');

function wp_real_simple_theme_options_page(){
  global $plugin_url;
  global $Options;
  if( !current_user_can('manage_options')){
    wp_die('No Permissions');
  }
  if( isset( $_POST['wp_so_submitted'])){
     $hidden_field =esc_html( $_POST['wp_so_submitted'] );
     if($hidden_field == 'Y'){
		   
		  foreach( $_POST as $key => $value ) {
    		  $options[$key] = esc_html($value);
			  
		 }  

	   update_option('wp_so_options',$options);
     }
   }

   $options = get_option('wp_so_options');
   if($options != ''){
	     foreach ($options as $key => $value) {
	     $$key = $value;
	 }
	   	
   }

   $options = get_option('wp_so_options');
  if($options != ''){
	     foreach ($options as $key => $value) {
	     $$key = $value;
	 }
	   	
   }
//wp_so_image_url
  require('inc/options-page-wrapper.php');
    }

    function wp_so_styles(){
  	   wp_enqueue_style('wp_so_styles',plugins_url('real-simple-custom-theme-options/wp_so_style.css'));
      }

   add_action('admin_head','wp_so_styles'); 
?>
