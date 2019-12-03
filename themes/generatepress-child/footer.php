<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

</div><!-- #content -->
</div><!-- #page -->

<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action( 'generate_before_footer' );
?>

<div <?php generate_do_element_classes( 'footer' ); ?>>
    <?php
    /**
     * generate_before_footer_content hook.
     *
     * @since 0.1
     */
    do_action( 'generate_before_footer_content' );

    ?>

    <?php
    $display_areas_array = get_field( 'display_areas', 'option' );
    ?>
    <div class="container-fluid footer-container ">
        <div class="container" align="center">
            <div class="row justify-content-center">
                <?php
                if (in_array('display_area_one', $display_areas_array)) {
                    ?>
                    <?php if ( have_rows( 'area_one', 'option' ) ) :
                        while ( have_rows( 'area_one', 'option' ) ) : the_row(); ?>
                            <div class="col-md-4" align="left">
                                <div class="footer-containers">
                                    <h4 class="footer-headings"><?php the_sub_field( 'heading' ); ?></h4>
                                    <?php $logo = get_sub_field( 'logo' ); ?>
                                    <?php if ( $logo ) { ?>
                                        <img class="footer-areaOne-image" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                                    <?php } ?>
                                    <p class="footer-areaOne-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                                    <?php $link = get_sub_field( 'link' ); ?>
                                    <?php if ( $link ) { ?>
                                        <a class="footer-areaOne-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                            <?php echo $link['title']; ?> <i class="fas fa-arrow-right footer-areaOne-icon"></i>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                }
                if (in_array('display_area_two', $display_areas_array)) {
                    if ( have_rows( 'area_two', 'option' ) ) :
                        while ( have_rows( 'area_two', 'option' ) ) : the_row(); ?>
                            <div class="col-md-4" align="left">
                                <div class="footer-containers">
                                    <h4 class="footer-headings"><?php the_sub_field( 'heading' ); ?></h4>
                                    <p class="footer-areaTwo-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                                    <p class="footer-areaTwo-contactInfo"><i class="fas fa-map-marker-alt footer-areaTwo-icons"></i> <?php the_sub_field( 'address' ); ?></p>
                                    <p class="footer-areaTwo-contactInfo"><i class="fas fa-mobile-alt footer-areaTwo-icons"></i> <?php the_sub_field( 'phone_number_one' ); ?></p>
                                    <p class="footer-areaTwo-contactInfo"><i class="fas fa-mobile-alt footer-areaTwo-icons"></i> <?php the_sub_field( 'phone_number_two' ); ?></p>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;
                }
                if (in_array('display_area_three', $display_areas_array)) {
                    ?>
                    <div class="col-md-4" align="left">
                        <div class="footer-containers">
                            <?php
                            if ( have_rows( 'area_three', 'option' ) ) :
                                while ( have_rows( 'area_three', 'option' ) ) : the_row(); ?>

                                    <h4 class="footer-headings"><?php the_sub_field( 'heading' ); ?></h4>
                                    <p class="footer-areaThree-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                                    <?php the_sub_field( 'subscriber_form' ); ?>
                                <?php endwhile;
                            endif;?>
                            <ul class="nav justify-content-end nav-ul">
                                <?php $facebook_link = get_field( 'facebook_link', 'option' ); ?>
                                <?php if ( $facebook_link ) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $facebook_link['url']; ?>" target="<?php echo $facebook_link['target']; ?>">
                                            <i class="fab fa-facebook-f footer-areaThree-icons"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                                <?php $twitter_link = get_field( 'twitter_link', 'option' ); ?>
                                <?php if ( $twitter_link ) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $twitter_link['url']; ?>" target="<?php echo $twitter_link['target']; ?>">
                                            <i class="fab fa-twitter footer-areaThree-icons"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                                <?php $instagram_link = get_field( 'instagram_link', 'option' ); ?>
                                <?php if ( $instagram_link ) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $instagram_link['url']; ?>" target="<?php echo $instagram_link['target']; ?>">
                                            <i class="fab fa-instagram footer-areaThree-icons"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                                <?php $google_plus_link = get_field( 'google_plus_link', 'option' ); ?>
                                <?php if ( $google_plus_link ) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $google_plus_link['url']; ?>" target="<?php echo $google_plus_link['target']; ?>">
                                            <i class="fab fa-google-plus-g footer-areaThree-icons"></i>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid footer-second-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div align="left footer-second-containers">
                        <p class="footer-second-copyrightText">
                            <?php echo ('<i class="far fa-copyright footer-second-icon"></i> ' . date("Y") . ' ' . get_bloginfo( 'name' ) . '<span> . All rights reserved</span>'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-sm-block">
                    <div align="right footer-second-containers">
                        <ul class="nav justify-content-end footer-second-nav">
                            <?php
                            $menuLocations = get_nav_menu_locations();
                            $menuID = $menuLocations['footer-menu'];
                            $primaryNav = wp_get_nav_menu_items($menuID);

                            foreach ( $primaryNav as $navItem ) {
                                echo '<li class="nav-item"><a class="footer-second-links" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 d-block d-sm-none">
                    <ul class="nav justify-content-center footer-second-nav">
                        <?php
                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['footer-menu'];
                        $primaryNav = wp_get_nav_menu_items($menuID);

                        foreach ( $primaryNav as $navItem ) {
                            echo '<li class="nav-item"><a class="footer-second-links" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php

    /**
     * generate_after_footer_content hook.
     *
     * @since 0.1
     */
    do_action( 'generate_after_footer_content' );
    ?>
</div><!-- .site-footer -->

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action( 'generate_after_footer' );

wp_footer();
?>

</body>
</html>

