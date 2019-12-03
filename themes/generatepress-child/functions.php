<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'generate-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION



function register_acf_options_pages() {

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Settings',
            'menu_title'	=> 'Footer',
            'menu_slug' => 'footer-options',
            'parent_slug'	=> 'theme-general-settings',
        ));

    }
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

function register_my_menus() {
    register_nav_menus(
        array(
            'footer-menu' => __( 'Footer Menu' ),
            'topheader-menu' => __( 'Top Header Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

