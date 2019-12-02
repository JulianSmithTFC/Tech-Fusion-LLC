<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 d-none d-md-block home-header-bottomContainer">
            <ul class="nav justify-content-end">
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
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo $link ?>" title="<?php echo $title ?>" role="button" aria-haspopup="true" aria-expanded="false"><span onclick="location.href='<?php echo $link ?>'"><?php echo $title ?></span></a>
                            <?php
                        }else{
                            ?>
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo $link ?>" title="<?php echo $title ?>"><?php echo $title ?></a>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    if ( $parent_id == $navItem->menu_item_parent ) {
                        if ( !$submenu ) {
                            $submenu = true;
                            ?>
                            <div class="dropdown-menu">
                            <?php
                        }
                        ?>
                        <a class="dropdown-item" href="<?php echo $link ?>"><?php echo $title ?></a>
                        <?php
                        if(empty($menuNav[$menuCount + 1]) || $menuNav[ $menuCount + 1 ]->menu_item_parent != $parent_id && $submenu){
                            ?>
                            </div>
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
                        <a class="btn home-header-bottomBtn" href="<?php echo $main_nav_menu_button['url']; ?>" target="<?php echo $main_nav_menu_button['target']; ?>"><?php echo $main_nav_menu_button['title']; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

