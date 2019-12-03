<?php
/**
 * Plugin Name: Tech Fusion ReviewLead Plugin
 * Plugin URI: https://techfusionconsulting.com/
 * Description:
 * Version: 1.0
 * Author: Julian Smith
 * Author URI: https://techfusionconsulting.com/
 */

wp_register_style( 'ReviewLeadPlugin_Styles', (get_site_url() . '/wp-content/plugins/reviewlead-popup-widget/style.css'));
wp_enqueue_style('ReviewLeadPlugin_Styles');

wp_register_script( 'ReviewLeadPlugin_Scripts', (get_site_url() . '/wp-content/plugins/reviewlead-popup-widget/script.js'), null, null, true );
wp_enqueue_script('ReviewLeadPlugin_Scripts');

function register_acf_reviewlead_options_pages() {

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'ReviewLead Options',
            'menu_title'	=> 'ReviewLead Options',
            'menu_slug' 	=> 'reviewlead-options',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

    }
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_reviewlead_options_pages');



add_action('wp_footer', 'your_function');
function your_function() {
    ?>
    <button id="reviewLeadButton" class="btn rl-button rl-showen" style="background: <?php the_field( 'review_button_background_color', 'option' ); ?> !important; color: <?php the_field( 'review_button_color', 'option' ); ?> !important;">
        <?php the_field( 'review_button_text', 'option' ); ?>
    </button>

    <div id="reviewLeadForm" class="rl-hidden rl-formContainer" align="center">
        <div class="rl-headerContainer" style="background: <?php the_field( 'header_background_color', 'option' ); ?> !important; color: <?php the_field( 'header_text_color', 'option' ); ?> !important;">
            <div align="left">
                <i id="rl-closeButton" class="fas fa-times fa-lg rl-headerIcon"></i>
            </div>
            <div align="center">
                <p class="rl-subheader"><?php the_field( 'subheader', 'option' ); ?></p>
                <h3 class="rl-header"><?php the_field( 'header', 'option' ); ?></h3>
            </div>
        </div>

        <div class="rl-secondContainer">
            <?php $company_logo = get_field( 'company_logo', 'option' ); ?>
            <?php if ( $company_logo ) { ?>
                <img src="<?php echo $company_logo['url']; ?>" class="rl-logoImage" alt="<?php echo $company_logo['alt']; ?>" />
            <?php } ?>

            <div class="rl-bodyText">
                <?php the_field( 'body_text', 'option' ); ?>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <?php $thumbs_up_link = get_field( 'thumbs_up_link', 'option' ); ?>
                        <?php if ( $thumbs_up_link ) { ?>
                            <div class="rl-iconContainers">
                                <a href="<?php echo $thumbs_up_link['url']; ?>" target="<?php echo $thumbs_up_link['target']; ?>" style="color: <?php the_field( 'header_background_color', 'option' ); ?> !important;">
                                    <i class="far fa-thumbs-up fa-3x rl-icons"></i>
                                </a>
                            </div>
                        <?php } ?>
                        <p class="rl-iconCaptions"><?php the_field( 'thumbs_up_caption', 'option' ); ?></p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <?php $thumbs_down_link = get_field( 'thumbs_down_link', 'option' ); ?>
                        <?php if ( $thumbs_down_link ) { ?>
                            <a href="<?php echo $thumbs_down_link['url']; ?>" target="<?php echo $thumbs_down_link['target']; ?>" style="color: <?php the_field( 'header_background_color', 'option' ); ?> !important;">
                                <div class="rl-iconContainers">
                                    <i class="far fa-thumbs-down fa-3x rl-icons" ></i>
                                </div>
                            </a>
                        <?php } ?>
                        <p class="rl-iconCaptions"><?php the_field( 'thumbs_down_caption', 'option' ); ?></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php
}

