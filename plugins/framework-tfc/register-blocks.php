<?php

add_action('acf/init', 'homepage_blocks');

function homepage_blocks() {

    // check function exists
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'				=> 'home-block-one',
            'title'				=> ('Home Block One'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'homepage-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'home-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'home-block-one-css', 'enqueued')) {
                    wp_enqueue_style( 'home-block-one-css' , plugin_dir_url( __FILE__ ) . 'css/home/tf-home-block-one.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'home-block-one-blockJS', 'enqueued')) {
                        wp_enqueue_script('home-block-one-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-home-block-one.js', '', '', true);
                    }
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'home-block-two',
            'title'				=> ('Home Block Two'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'homepage-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'home-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'home-block-two-css', 'enqueued')) {
                    wp_enqueue_style( 'home-block-two-css' , plugin_dir_url( __FILE__ ) . 'css/home/tf-home-block-two.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'home-block-three',
            'title'				=> ('Home Block Three'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'homepage-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'home-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'home-block-three-css', 'enqueued')) {
                    wp_enqueue_style( 'home-block-three-css' , plugin_dir_url( __FILE__ ) . 'css/home/tf-home-block-three.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'home-block-four',
            'title'				=> ('Home Block Four'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'homepage-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'home-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'home-block-four-css', 'enqueued')) {
                    wp_enqueue_style( 'home-block-four-css' , plugin_dir_url( __FILE__ ) . 'css/home/tf-home-block-four.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'home-block-five',
            'title'				=> ('Home Block Five'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'homepage-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'home-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'home-block-five-css', 'enqueued')) {
                    wp_enqueue_style( 'home-block-five-css' , plugin_dir_url( __FILE__ ) . 'css/home/tf-home-block-five.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'home-block-seven',
            'title'				=> ('Home Block Seven'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'homepage-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'home-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'home-block-seven-css', 'enqueued')) {
                    wp_enqueue_style( 'home-block-seven-css' , plugin_dir_url( __FILE__ ) . 'css/home/tf-home-block-seven.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'home-block-seven-blockJS', 'enqueued')) {
                        wp_enqueue_script('home-block-seven-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-home-block-seven.js', '', '', true);
                    }
                }
            },
        ));

    }
}

add_action('acf/init', 'services_blocks');

function services_blocks(){
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'services-block-one',
            'title'				=> ('Services Block One'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'services-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'services-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'services-block-one-css', 'enqueued')) {
                    wp_enqueue_style( 'services-block-one-css' , plugin_dir_url( __FILE__ ) . 'css/services/tf-services-block-one.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'services-block-one-blockJS', 'enqueued')) {
                        wp_enqueue_script('services-block-one-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-services-block-one.js', '', '', true);
                    }
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'services-block-two',
            'title'				=> ('Services Block Two'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'services-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'services-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'services-block-two-css', 'enqueued')) {
                    wp_enqueue_style( 'services-block-two-css' , plugin_dir_url( __FILE__ ) . 'css/services/tf-services-block-two.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'services-block-three',
            'title'				=> ('Services Block Three'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'services-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'services-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'services-block-three-css', 'enqueued')) {
                    wp_enqueue_style( 'services-block-three-css' , plugin_dir_url( __FILE__ ) . 'css/services/tf-services-block-three.css' );
                }
                if (! is_admin()){
                    //if (! wp_style_is( 'aosCSS', 'enqueued')) {
                    //    wp_enqueue_style( 'aosCSS' , 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
                    //}
                    //if (! wp_script_is( 'aosJS', 'enqueued')) {
                    //    wp_enqueue_script( 'aosJS' , 'https://unpkg.com/aos@2.3.1/dist/aos.js', '', '', true);
                    //}
                    if (! wp_script_is( 'services-block-three-blockJS', 'enqueued')) {
                        wp_enqueue_script('services-block-three-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-services-block-three.js', '', '', true);
                    }
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'services-block-four',
            'title'				=> ('Services Block Four'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'services-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'services-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'services-block-four-css', 'enqueued')) {
                    wp_enqueue_style( 'services-block-four-css' , plugin_dir_url( __FILE__ ) . 'css/services/tf-services-block-four.css' );
                }
            },
        ));
    }
}




function solutions_blocks(){
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'solutions-block-one',
            'title'				=> ('Solutions Block One'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'solutions-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'services-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'solutions-block-one-css', 'enqueued')) {
                    wp_enqueue_style( 'solutions-block-one-css' , plugin_dir_url( __FILE__ ) . 'css/solutions/tf-solutions-block-one.css' );
                }
                if (! is_admin()){
                    if (! wp_style_is( 'slickCSSOne', 'enqueued')) {
                        wp_enqueue_style( 'slickCSSOne' , 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
                    }
                    if (! wp_style_is( 'slickCSSTwo', 'enqueued')) {
                        wp_enqueue_style( 'slickCSSTwo' , 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css');
                    }
                    if (! wp_script_is( 'jqueryForSlider', 'enqueued')) {
                        wp_enqueue_script( 'jqueryForSlider' , 'https://code.jquery.com/jquery-2.2.4.min.js', '', '', true);
                    }
                    if (! wp_script_is( 'slickJS', 'enqueued')) {
                        wp_enqueue_script('slickJS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '', '', true);
                    }
                    if (! wp_script_is( 'solutions-block-one-blockJS', 'enqueued')) {
                        wp_enqueue_script('solutions-block-one-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-solutions-block-one.js', '', '', true);
                    }
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'solutions-block-two',
            'title'				=> ('Solutions Block Two'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'solutions-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'services-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'solutions-block-two-css', 'enqueued')) {
                    wp_enqueue_style( 'solutions-block-two-css' , plugin_dir_url( __FILE__ ) . 'css/solutions/tf-solutions-block-two.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'solutions-block-three',
            'title'				=> ('Solutions Block Three'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'solutions-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'services-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'solutions-block-three-css', 'enqueued')) {
                    wp_enqueue_style( 'solutions-block-three-css' , plugin_dir_url( __FILE__ ) . 'css/solutions/tf-solutions-block-three.css' );
                }
                if (! is_admin()){
                    if (! wp_style_is( 'slickCSSOne', 'enqueued')) {
                        wp_enqueue_style( 'slickCSSOne' , 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
                    }
                    if (! wp_style_is( 'slickCSSTwo', 'enqueued')) {
                        wp_enqueue_style( 'slickCSSTwo' , 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css');
                    }
                    if (! wp_script_is( 'jqueryForSlider', 'enqueued')) {
                        wp_enqueue_script( 'jqueryForSlider' , 'https://code.jquery.com/jquery-2.2.4.min.js', '', '', true);
                    }
                    if (! wp_script_is( 'slickJS', 'enqueued')) {
                        wp_enqueue_script('slickJS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '', '', true);
                    }
                    if (! wp_script_is( 'solutions-block-three-blockJS', 'enqueued')) {
                        wp_enqueue_script('solutions-block-three-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-solutions-block-three.js', '', '', true);
                    }
                }
            },
        ));

    }
}

add_action('acf/init', 'solutions_blocks');

function subservices_blocks(){
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'subservices-block-one',
            'title'				=> ('Subservices Block One'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-one-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-one-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-one.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'subservices-block-one-blockJS', 'enqueued')) {
                        wp_enqueue_script('subservices-block-one-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-subservices-block-one.js', '', '', true);
                    }
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'subservices-block-two',
            'title'				=> ('Subservices Block Two'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-two-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-two-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-two.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'subservices-block-three',
            'title'				=> ('Subservices Block Three'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-three-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-three-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-three.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'subservices-block-four',
            'title'				=> ('Subservices Block Four'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-four-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-four-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-four.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'subservices-block-five',
            'title'				=> ('Subservices Block Five'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-five-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-five-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-five.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'subservices-block-six',
            'title'				=> ('Subservices Block Six'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-six-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-six-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-six.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'subservices-block-seven',
            'title'				=> ('Subservices Block Seven'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-seven-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-seven-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-seven.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'subservices-block-seven-blockJS', 'enqueued')) {
                        wp_enqueue_script('subservices-block-seven-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-subservices-block-seven.js', '', '', true);
                    }
                }
            },


        ));

        acf_register_block(array(
            'name'				=> 'subservices-block-eight',
            'title'				=> ('Subservices Block Eight'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'subservices-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'subservices-block-eight', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'subservices-block-eight-css', 'enqueued')) {
                    wp_enqueue_style( 'subservices-block-eight-css' , plugin_dir_url( __FILE__ ) . 'css/subservices/tf-subservices-block-eight.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'subservices-block-eight-blockJS', 'enqueued')) {
                        wp_enqueue_script('subservices-block-eight-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-subservices-block-eight.js', '', '', true);
                    }
                }
            },


        ));

    }
}

add_action('acf/init', 'subservices_blocks');


function about_blocks(){
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'about-block-one',
            'title'				=> ('About Block One'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'about-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'about-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'about-block-one-css', 'enqueued')) {
                    wp_enqueue_style( 'about-block-one-css' , plugin_dir_url( __FILE__ ) . 'css/about/tf-about-block-one.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'about-block-one-blockJS', 'enqueued')) {
                        wp_enqueue_script('about-block-one-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-about-block-one.js', '', '', true);
                    }
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'about-block-two',
            'title'				=> ('About Block Two'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'about-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'about-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'about-block-two-css', 'enqueued')) {
                    wp_enqueue_style( 'about-block-two-css' , plugin_dir_url( __FILE__ ) . 'css/about/tf-about-block-two.css' );
                }
            },
        ));

    }
}

add_action('acf/init', 'about_blocks');


function contact_blocks(){
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'contact-block-one',
            'title'				=> ('Contact Block One'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'contact-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'contact-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'contact-block-one-css', 'enqueued')) {
                    wp_enqueue_style( 'contact-block-one-css' , plugin_dir_url( __FILE__ ) . 'css/contact/tf-contact-block-one.css' );
                }
                if (! is_admin()){
                    if (! wp_script_is( 'contact-block-one-blockJS', 'enqueued')) {
                        wp_enqueue_script('contact-block-one-blockJS' , plugin_dir_url( __FILE__ ) . 'js/tf-contact-block-one.js', '', '', true);
                    }
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'contact-block-two',
            'title'				=> ('Contact Block Two'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'contact-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'contact-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'contact-block-two-css', 'enqueued')) {
                    wp_enqueue_style( 'contact-block-two-css' , plugin_dir_url( __FILE__ ) . 'css/contact/tf-contact-block-two.css' );
                }
            },
        ));

    }
}

add_action('acf/init', 'contact_blocks');

function menu_blocks(){
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'menu-block-one',
            'title'				=> ('Menu Block One'),
            'description'		=> ('Heading Text with a Menu Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'menu-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'menu-block-one', 'menu-Form' ),
        ));

    }
}

add_action('acf/init', 'menu_blocks');

function review_blocks(){
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'review-block-one',
            'title'				=> ('Review Block One'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-one', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-one-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-one-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-one.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-two',
            'title'				=> ('Review Block Two'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-two', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-two-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-two-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-two.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-three',
            'title'				=> ('Review Block Three'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-three', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-three-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-three-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-three.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-four',
            'title'				=> ('Review Block Four'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-four', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-four-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-four-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-four.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-five',
            'title'				=> ('Review Block Five'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-five', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-five-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-five-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-five.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-six',
            'title'				=> ('Review Block Six'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-six', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-six-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-six-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-six.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-seven',
            'title'				=> ('Review Block Seven'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-seven', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-seven-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-seven-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-seven.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-eight',
            'title'				=> ('Review Block Eight'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-eight', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-eight-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-eight-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-eight.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-nine',
            'title'				=> ('Review Block Nine'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-nine', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-nine-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-nine-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-nine.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-ten',
            'title'				=> ('Review Block Ten'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-ten', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-ten-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-ten-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-ten.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-eleven',
            'title'				=> ('Review Block Eleven'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-eleven', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-eleven-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-eleven-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-eleven.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-twelve',
            'title'				=> ('Review Block Twelve'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-twelve', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-twelve-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-twelve-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-twelve.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-thirteen',
            'title'				=> ('Review Block Thirteen'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-thirteen', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-thirteen-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-thirteen-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-thirteen.css' );
                }
            },
        ));

        acf_register_block(array(
            'name'				=> 'review-block-fourteen',
            'title'				=> ('Review Block Fourteen'),
            'description'		=> ('Heading Text with a Contact Form'),
            'render_callback'	=> 'render_blocks',
            'category'			=> 'review-blocks',
            'icon'				=> 'welcome-widgets-menus',
            'keywords'			=> array( 'review-block-fourteen', 'contact-Form' ),
            'enqueue_assets' => function(){
                if (! wp_style_is( 'review-block-fourteen-css', 'enqueued')) {
                    wp_enqueue_style( 'review-block-fourteen-css' , plugin_dir_url( __FILE__ ) . 'css/review/tf-review-block-fourteen.css' );
                }
            },
        ));

    }
}

add_action('acf/init', 'review_blocks');

function render_blocks( $block ) {

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/homepage/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/homepage/tf-{$slug}.php" );
    }

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/services/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/services/tf-{$slug}.php" );
    }

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/solutions/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/solutions/tf-{$slug}.php" );
    }

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/subservices/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/subservices/tf-{$slug}.php" );
    }

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/about/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/about/tf-{$slug}.php" );
    }

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/contact/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/contact/tf-{$slug}.php" );
    }

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/menu/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/menu/tf-{$slug}.php" );
    }

    // include a template part from within the "template-parts/block" folder
    if( file_exists( plugin_dir_path( __FILE__ ) . "blocks/reviewmanagement/tf-{$slug}.php" ) ) {
        include( plugin_dir_path( __FILE__ ) . "blocks/reviewmanagement/tf-{$slug}.php" );
    }
}
