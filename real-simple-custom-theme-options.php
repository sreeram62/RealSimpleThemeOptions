<?php
/*
Plugin Name: Real Simple Custom Theme Options - rscto
Plugin URI:  https://github.com/sreeram62/RealSimpleThemeOptions
Description: Simple theme optipns to make wordpress more easy !!
Version: 1.0
Author: Ram Gupta
Author URI: https://github.com/sreeram62/RealSimpleThemeOptions
Text Domain:
Domain Path:
*/


/*Global Variables */
$plugin_url = plugins_url( '/', __FILE__ );

global $bgImage;
global $defaultLogo;
$bgImage = plugins_url('/inc/images/background.jpg', __FILE__ );

$defaultLogo = plugins_url( '/inc/images/logo-default.png', __FILE__ );
$options = array();
$rscto_phone;
$rscto_email;


add_action ( 'admin_enqueue_scripts', function () {
    if (is_admin ())
        wp_enqueue_media ();
} );

global $options;
$options = get_option('rscto_options'); ;
$GLOBALS['options'] = get_option('rscto_options');
//Actions for including functions for Media Upload



//Updates the URL of the WP admin page logo to home page of site
function rscto_the_url_wpadmin_update( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'rscto_the_url_wpadmin_update' );

/*Update for login screen logo and form*/
function rscto_custom_loginlogo() {
	global $options;
	global $bgImage;
	global $defaultLogo;
	$options["rscto_admin_bg"] = trim($options["rscto_admin_bg"]);
	if($options["rscto_admin_bg"] == ''){
		$options["rscto_admin_bg"]= $bgImage;
	}
	
	$options["rscto_admin_logo_url"] = trim($options["rscto_admin_logo_url"]);
	if($options["rscto_admin_logo_url"] == ''){
		$options["rscto_admin_logo_url"]= $defaultLogo;
	}
	
function change_title_on_logo() {
return "Backend";
}
add_filter("login_headertitle", "change_title_on_logo");
	
echo '<style type="text/css">

.wp-core-ui h1 a {background-image: url('.$options["rscto_admin_logo_url"].') !important;
.wp-core-ui background-position: center center !important;}
.wp-core-ui h1 a {background-size: 200px !important;}
.wp-core-ui h1 a {width: 200px !important;}
.wp-core-ui h1{border-radius:10px;}
 body.wp-core-ui{background-image: url('.$options["rscto_admin_bg"].') !important;
                 background-size: cover;
		         background-repeat: no-repeat;

}
.wp-core-ui #loginform{
   background: #eee;
   border-radius:15px;
}
.wp-core-ui #login a{color:white !important}
.wp-core-ui #login input[type="text"]{ border: 1px solid #d2d2d2 !important ;
    height: 50px;
    width: 100%;
    padding: 5px 15px !important;
    color: #545c62 !important;
    font-size: 16px;
    font-weight: 300;
}
.wp-core-ui .login input[type="submit"]{
    line-height: 50px;
    height: 50px;
    text-align: center;
    color: #fff !important;
    font-size: 16px;
    border-radius: 3px;
}

.wp-core-ui .login input[type="submit"]{
   text-shadow: none !important;
   box-shadow : none !important;
}

</style>';
}
add_action('login_head', 'rscto_custom_loginlogo');
/*Logo Update End */
//Adding Scripts/CSS to Head
  function theme_head_script() {
      global $options;
	  $options = get_option('rscto_options'); ;
	   $GLOBALS['options'] = get_option('rscto_options');
	   
	  $options_analytics = $options['rscto_analytics'];
	    echo (htmlspecialchars_decode($options_analytics));
	  
	     $options_css = $options['rscto_head_styles'];
	    echo (htmlspecialchars_decode($options_css));
	  
	    $rscto_other_head = $options['rscto_other_head'];
	    echo (htmlspecialchars_decode($rscto_other_head));
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
	
	
   if( isset( $_POST['rscto_submitted'])){
     $hidden_field =esc_html( $_POST['rscto_submitted'] );
     if($hidden_field == 'Y'){
		 
	 function rscto_script_textarea( $script_textarea )
    {
        $allowed_html = array(
            'script' => array(
                'async' => array(),
                'src' => array()
            )
        );
        return wp_kses($script_textarea, $allowed_html);
    }
		 

		 
		 
		 
	   /*HeaderOptions*/
	   $rscto_header_logo_url  = sanitize_text_field(esc_url_raw($_POST['rscto_header_logo_url']));
       $rscto_header_bg_color  = sanitize_text_field(esc_url_raw($_POST['rscto_header_bg_color']));
		 
	   /*Contact Options */
	   $rscto_phone = sanitize_text_field(esc_html($_POST['rscto_phone']));
       $rscto_email  = sanitize_email($_POST['rscto_email']);
		 
	   /*Styles / Analytics / Other Scripts */	 
	   $rscto_head_styles = sanitize_text_field(esc_html($_POST['rscto_head_styles']));	 
	   $rscto_analytics  = rscto_script_textarea($_POST['rscto_analytics']);
	   $rscto_other_head  = sanitize_text_field(esc_html($_POST['rscto_other_head']));
		 
	   /*Footer Options */
	   $rscto_footer_logo  = sanitize_text_field(esc_url_raw($_POST['rscto_footer_logo']));
	   $rscto_copyright  = sanitize_text_field(esc_html($_POST['rscto_copyright']));
		 
	   /*Social Icons */

       $rscto_twitter_url  = sanitize_text_field(esc_url_raw($_POST['rscto_twitter_url']));
       $rscto_facebook_url = sanitize_text_field(esc_url_raw($_POST['rscto_facebook_url']));
       $rscto_linkdin_url  = sanitize_text_field(esc_url_raw($_POST['rscto_linkdin_url']));
       $rscto_youtube_url  = sanitize_text_field(esc_url_raw($_POST['rscto_youtube_url']));
		 
	   /*Header Options 
       $rscto_header_logo_url  = sanitize_text_field(esc_url_raw($_POST['rscto_header_logo_url']));
       $rscto_header_bg_color  = sanitize_text_field(esc_url_raw($_POST['rscto_header_bg_color']));*/
       
      
       /*Admin Options */      	   
	   $rscto_admin_logo_url  = esc_url_raw($_POST['rscto_admin_logo_url']);
       $rscto_admin_bg  = esc_html($_POST['rscto_admin_bg']);
	   
		 

       $options['rscto_twitter_url'] = $rscto_twitter_url;
       $options['rscto_facebook_url'] = $rscto_facebook_url;
       $options['rscto_linkdin_url'] = $rscto_linkdin_url;
       $options['rscto_youtube_url'] = $rscto_youtube_url;
       $options['rscto_header_logo_url'] = $rscto_header_logo_url;
       $options['rscto_header_bg_color'] = $rscto_header_bg_color;
       $options['rscto_phone'] = $rscto_phone;
       $options['rscto_email'] = $rscto_email;
       $options['rscto_footer_logo'] = $rscto_footer_logo;
	   $options['rscto_copyright'] = $rscto_copyright;
       $options['rscto_head_styles'] = wp_unslash($rscto_head_styles);
       $options['rscto_analytics'] = wp_unslash($rscto_analytics);
	   $options['rscto_other_head'] = wp_unslash($rscto_other_head);
	   $options['rscto_admin_logo_url'] = $rscto_admin_logo_url;
       $options['rscto_admin_bg'] = $rscto_admin_bg;
	
    	 add_filter( 'login_headerurl', 'the_url_wpadmin' );
       update_option('rscto_options',$options);
     }
   }

    $options = get_option('rscto_options');
   if($options != ''){

	     foreach ($options as $key => $value) {
	     $$key = $value;
	 }
	   	
   }
//rscto_image_url
  require('inc/options-page-wrapper.php');
    }

    function rscto_styles(){
  	    wp_enqueue_style('rscto_styles',plugins_url( '/rscto_style.css', __FILE__ ));
      }

   add_action('admin_head','rscto_styles'); 
?>
