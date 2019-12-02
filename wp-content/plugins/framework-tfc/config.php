<?php
/**
 * Plugin Name: Tech Fusion Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description:
 * Version: 1.0
 * Author: Julian Smith
 * Author URI: http://www.mywebsite.com
 */

wp_register_script( 'Google_GTM_CODE', get_site_url() . '/wp-content/plugins/framework-tfc/GTM-code.js', null, null, true );
wp_enqueue_script('Google_GTM_CODE');

wp_register_style( 'Plugin_Styles', (get_site_url() . '/wp-content/plugins/framework-tfc/style.css') );
wp_enqueue_style('Plugin_Styles');

//Font Awesome CDN
wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );
wp_enqueue_style('Font_Awesome');


//Bootstrap CDN
wp_register_style( 'Bootstrap_CSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
wp_enqueue_style('Bootstrap_CSS');

//MD Bootstrap CDN
wp_register_style( 'MD_Bootstrap_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css' );
wp_enqueue_style('MD_Bootstrap_CSS');



//this was what was set before now
if (! is_admin()) {
    wp_register_script( 'jquerytest', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', null, null, true );
    wp_enqueue_script('jquerytest');

      //wp_register_script( 'jquerytest', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, null, true );
      //wp_enqueue_script('jquerytest');

    //wp_register_script( 'jquerytesttwo', 'https://code.jquery.com/ui/1.12.0/jquery-ui.min.js', null, null, true );
    //wp_enqueue_script('jquerytesttwo');
}



wp_register_script( 'Bootstrap_jsOne', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, null, true );
wp_enqueue_script('Bootstrap_jsOne');

wp_register_script( 'Bootstrap_jsTwo', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',null, null, true );
wp_enqueue_script('Bootstrap_jsTwo');


wp_register_script( 'MD_Bootstrap_js', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js', null, null, true);
wp_enqueue_script('MD_Bootstrap_js');


//Google Fonts CDN
wp_register_style( 'Google_Fonts', 'https://fonts.googleapis.com/css?family=Raleway|Srisakdi' );
wp_enqueue_style('Google_Fonts');


function register_acf_customTheme_options_pages() {

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Mailchimp Settings',
            'menu_title'	=> 'Mailchimp Settings',
            'menu_slug' 	=> 'mailchimp-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        //acf_add_options_sub_page(array(
        //    'page_title' 	=> 'Theme Header Settings',
        //    'menu_title'	=> 'Header',
        //    'parent_slug'	=> 'theme-general-settings',
        //));

    }
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_customTheme_options_pages');


require 'register-block-categories.php';
require 'register-blocks.php';


