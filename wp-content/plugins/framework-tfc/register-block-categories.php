<?php

function block_category_homepage( $categories) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'homepage-blocks',
                'title' => __( 'HomePage Blocks', 'homepage-blocks' ),
            ),
            array(
                'slug' => 'services-blocks',
                'title' => __( 'Services Page Blocks', 'services-blocks' ),
            ),
            array(
                'slug' => 'solutions-blocks',
                'title' => __( 'Solutions Page Blocks', 'solutions-blocks' ),
            ),
            array(
                'slug' => 'subservices-blocks',
                'title' => __( 'Subservices Page Blocks', 'subservices-blocks' ),
            ),
            array(
                'slug' => 'about-blocks',
                'title' => __( 'About Page Blocks', 'about-blocks' ),
            ),
            array(
                'slug' => 'contact-blocks',
                'title' => __( 'Contact Page Blocks', 'contact-blocks' ),
            ),
            array(
                'slug' => 'menu-blocks',
                'title' => __( 'Menu Page Blocks', 'menu-blocks' ),
            ),
            array(
                'slug' => 'review-blocks',
                'title' => __( 'Review Management Page Blocks', 'review-blocks' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'block_category_homepage', 10, 2);
