<?php
/*
Plugin Name: Real Simple Custom Theme Options
Plugin URI:
Description: Simple theme optipns to make wordpress more easy !!
Version: 1.0.0
Author:
Author URI:
Text Domain:
Domain Path:
*/

/*Global Variables */
 global $options;
 $options  = array();

$plugin_url = WP_PLUGIN_URL .'/real-simple-custom-theme-options';

$wp_so_phone;
$wp_so_email;

 







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
  global $options;
  if( !current_user_can('manage_options')){
    wp_die('No Permissions');
  }
   if( isset( $_POST['wp_so_submitted'])){
     $hidden_field =esc_html( $_POST['wp_so_submitted'] );
     if($hidden_field == 'Y'){

       $wp_so_twitter_url  = esc_html($_POST['wp_so_twitter_url']);
       $wp_so_facebook_url = esc_html($_POST['wp_so_facebook_url']);
       $wp_so_linkdin_url  = esc_html($_POST['wp_so_linkdin_url']);
       $wp_so_youtube_url  = esc_html($_POST['wp_so_youtube_url']);
       $wp_so_header_logo_url  = esc_html($_POST['wp_so_header_logo_url']);
       $wp_so_header_bg_color  = esc_html($_POST['wp_so_header_bg_color']);
       $wp_so_phone = esc_html($_POST['wp_so_phone']);
       $wp_so_email  = esc_html($_POST['wp_so_email']);
       $wp_so_footer_logo  = esc_html($_POST['wp_so_footer_logo']);
       $wp_so_copyright = esc_html($_POST['wp_so_copyright']);
       $wp_so_analytics  = esc_html($_POST['wp_so_analytics']);

       $options['wp_so_twitter_url'] = $wp_so_twitter_url;
       $options['wp_so_facebook_url'] = $wp_so_facebook_url;
       $options['wp_so_linkdin_url'] = $wp_so_linkdin_url;
       $options['wp_so_youtube_url'] = $wp_so_youtube_url;
       $options['wp_so_header_logo_url'] = $wp_so_header_logo_url;
       $options['wp_so_header_bg_color'] = $wp_so_header_bg_color;
       $options['wp_so_phone'] = $wp_so_phone;
       $options['wp_so_email'] = $wp_so_email;
       $options['wp_so_footer_logo'] = $wp_so_footer_logo;
       $options['wp_so_copyright'] = $wp_so_copyright;
       $options['wp_so_analytics'] = $wp_so_analytics;

       update_option('wp_so_options',$options);
     }
   }

   $options = get_option('wp_so_options');
   if($options != ''){

         if (isset($options['wp_so_facebook_url'])){
            $wp_so_facebook_url = $options['wp_so_facebook_url'];
         }else{
           $wp_so_facebook_url = "http://www.facebook.com";
         }

         if (isset($options['wp_so_twitter_url'])){
              $wp_so_twitter_url = $options['wp_so_twitter_url'];
         }else{
           $wp_so_twitter_url = "http://www.twitter.com";
         }

         if (isset($options['wp_so_linkdin_url'])){
              $wp_so_linkdin_url = $options['wp_so_linkdin_url'];
         }else{
              $wp_so_linkdin_url = "http://www.linkdin.com";
         }

         if (isset($options['wp_so_youtube_url'])){
            $wp_so_youtube_url = $options['wp_so_youtube_url'];
         }else{
              $wp_so_youtube_url = "http://www.YouTube.com";
         }

         if (isset($options['wp_so_header_logo_url'])){
            $wp_so_header_logo_url = $options['wp_so_header_logo_url'];
         }else{
              $wp_so_header_logo_url = "";
         }

         if (isset($options['wp_so_header_bg_color'])){
            $wp_so_header_bg_color = $options['wp_so_header_bg_color'];
         }else{
            $wp_so_header_bg_color = "#000";
         }

        if (isset($options['wp_so_phone'])){
           $wp_so_phone = $options['wp_so_phone'];
        }else{
          $wp_so_phone = "00-00-000";
        }

        if (isset($options['wp_so_email'])){
           $wp_so_email = $options['wp_so_email'];
        }else{
           $wp_so_email = "someone@something.com";
        }

        if (isset($options['wp_so_footer_logo'])){
           $wp_so_footer_logo = $options['wp_so_footer_logo'];
        }else{
           $wp_so_footer_logo = "";
        }

        if (isset($options['wp_so_copyright'])){
           $wp_so_copyright = $options['wp_so_copyright'];
        }else{
           $wp_so_copyright = "Copy right info";
        }

        if (isset($options['wp_so_analytics'])){
           $wp_so_analytics = $options['wp_so_analytics'];
        }else{
           $wp_so_analytics = "Add your analytics here";
        }

   }

  require('inc/options-page-wrapper.php');
    }

    function wp_so_styles(){
  	   wp_enqueue_style('wp_so_styles',plugins_url('real-simple-custom-theme-options/wp_so_style.css'));
       wp_enqueue_script('media-upload');
       wp_enqueue_script('thickbox');
       wp_register_script('my-upload', WP_PLUGIN_URL.'/wp_so_script.js', array('jquery','media-upload','thickbox'));
       wp_enqueue_script('my-upload');
       wp_enqueue_style('thickbox');
      }

      function wp_so_scripts(){
    	   wp_enqueue_script('media-upload');
         wp_enqueue_script('thickbox');
         wp_register_script('my-upload', 'mystagingweb.com/UnderProgress/new-wp/wp-content/real-simple-custom-theme-options/wp_so_script.js', array('jquery','media-upload','thickbox'));
         wp_enqueue_script('my-upload');
        }

   add_action('admin_head','wp_so_styles');
   add_action('admin_head','wp_so_scripts');
   
  function  wp_real_simple_theme_options_page_activate() {

   global $options;
   $options = get_option('wp_so_options');
   echo var_dump($options); // this will be 'whatever'
  }
register_activation_hook( real-simple-custom-theme-options/real-simple-custom-theme-options.php, ' wp_real_simple_theme_options_page_activate' );
  

