<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="profile" href="https://gmpg.org/xfn/11">



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLSWJJX"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="col-md-12 d-block d-md-none home-headerMobile-container fixed-top">
    <div align="right">
        <button class="navbar-toggler home-headerMobile-dropdownButton" type="button" data-toggle="collapse" data-target="#mobileNavBar" aria-controls="mobileNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fa-1x home-headerMobile-dropdownIcon"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="mobileNavBar">
        <ul class="nav flex-column nav-ul">
            <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['primary'];
            $menuNav = wp_get_nav_menu_items($menuID);
            $menuCount = 0;
            $submenu = false;
            foreach ( $menuNav as $navItem ) {
            $link = $navItem->url;
            $title = $navItem->title;
            if ( !$navItem->menu_item_parent ){
            $parent_id = $navItem->ID;
            if (!empty($menuNav[$menuCount + 1]) && $menuNav[$menuCount + 1]->menu_item_parent == $parent_id ){
            ?>
            <li class="nav-item home-headerMobile-links">
                <ul class="nav flex-column nav-ul">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-9" align="left">
                                <a class="nav-link home-headerMobile-linkText" href="<?php echo $link ?>" title="<?php echo $title ?>"><?php echo $title ?></a>
                            </div>
                            <div class="col-xs-3 ml-auto" align="right">
                                <a data-toggle="collapse" data-target="#subNavBar<?php echo $parent_id ?>"  aria-controls="subNavBar<?php echo $parent_id ?>" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-chevron-down fa-lg home-headerMobile-linkIcons"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }else{
                    ?>
                    <li class="nav-item home-headerMobile-links">
                        <a class="nav-link home-headerMobile-linkText" href="<?php echo $link ?>" title="<?php echo $title ?>"><?php echo $title ?></a>
                        <?php
                        }
                        ?>
                        <?php
                        }
                        if ( $parent_id == $navItem->menu_item_parent ) {
                        if ( !$submenu ) {
                        $submenu = true;
                        ?>
                        <div class="collapse navbar-collapse" id="subNavBar<?php echo $parent_id ?>">
                            <?php
                            }
                            ?>
                    <li class="nav-item home-headerMobile-sublinks">
                        <a class="dropdown-item home-headerMobile-sublinkText" href="<?php echo $link ?>"><?php echo $title ?></a>
                    </li>
                    <?php
                    if(empty($menuNav[$menuCount + 1]) || $menuNav[ $menuCount + 1 ]->menu_item_parent != $parent_id && $submenu){
                    ?>
    </div>
    </ul>
    <?php
    $submenu = false;
    }
    }
    if (empty($menuNav[$menuCount + 1]) || $menuNav[ $menuCount + 1 ]->menu_item_parent != $parent_id ) {
        ?>
        </li>
        <?php
        $submenu = false;
    }
    $menuCount++;
    }
    ?>
    <?php $main_nav_menu_button = get_field( 'main_nav_menu_button', 'option' ); ?>
    <?php if ( $main_nav_menu_button ) { ?>
        <li class="nav-item">
            <a class="btn home-header-bottomBtn btn-block" href="<?php echo $main_nav_menu_button['url']; ?>" target="<?php echo $main_nav_menu_button['target']; ?>"><?php echo $main_nav_menu_button['title']; ?></a>
        </li>
    <?php } ?>
    </ul>

    <ul class="nav justify-content-center nav-ul home-headerMobile-socialContainer">
        <?php $facebook_link = get_field( 'facebook_link', 'option' );
        if ( $facebook_link ) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $facebook_link['url']; ?>" target="<?php echo $facebook_link['target']; ?>">
                    <i class="fab fa-facebook-f home-header-topIcons"></i>
                </a>
            </li>
        <?php }
        $twitter_link = get_field( 'twitter_link', 'option' );
        if ( $twitter_link ) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $twitter_link['url']; ?>" target="<?php echo $twitter_link['target']; ?>">
                    <i class="fab fa-twitter home-header-topIcons"></i>
                </a>
            </li>
        <?php }
        $instagram_link = get_field( 'instagram_link', 'option' );
        if ( $instagram_link ) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $instagram_link['url']; ?>" target="<?php echo $instagram_link['target']; ?>">
                    <i class="fab fa-instagram home-header-topIcons"></i>
                </a>
            </li>
        <?php }
        $google_plus_link = get_field( 'google_plus_link', 'option' );
        if ( $google_plus_link ) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $google_plus_link['url']; ?>" target="<?php echo $google_plus_link['target']; ?>">
                    <i class="fab fa-google-plus-g home-header-topIcons"></i>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>

</div>
</div>

<div class="container-fluid home-header-topBackground d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <ul class="nav justify-content-end nav-ul">
                    <li class="nav-item home-header-topLink">
                        <?php echo (the_field( 'phone_number_one_lable', 'option' ) . '<a href="tel:' . get_field( 'phone_number_one', 'option' ) . '">' . get_field( 'phone_number_one', 'option' ) . '</a>')?>
                    </li>
                    <li class="nav-item home-header-topLink">
                        <?php echo (the_field( 'phone_number_two_label', 'option' ) . '<a href="tel:' . get_field( 'phone_number_two', 'option' ) . '">' . get_field( 'phone_number_two', 'option' ) . '</a>')?>
                    </li>
                    <?php $facebook_link = get_field( 'facebook_link', 'option' );
                    if ( $facebook_link ) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $facebook_link['url']; ?>" target="<?php echo $facebook_link['target']; ?>">
                                <i class="fab fa-facebook-f home-header-topIcons"></i>
                            </a>
                        </li>
                    <?php }
                    $twitter_link = get_field( 'twitter_link', 'option' );
                    if ( $twitter_link ) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $twitter_link['url']; ?>" target="<?php echo $twitter_link['target']; ?>">
                                <i class="fab fa-twitter home-header-topIcons"></i>
                            </a>
                        </li>
                    <?php }
                    $instagram_link = get_field( 'instagram_link', 'option' );
                    if ( $instagram_link ) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $instagram_link['url']; ?>" target="<?php echo $instagram_link['target']; ?>">
                                <i class="fab fa-instagram home-header-topIcons"></i>
                            </a>
                        </li>
                    <?php }
                    $google_plus_link = get_field( 'google_plus_link', 'option' );
                    if ( $google_plus_link ) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $google_plus_link['url']; ?>" target="<?php echo $google_plus_link['target']; ?>">
                                <i class="fab fa-google-plus-g home-header-topIcons"></i>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

    </div>
</div>