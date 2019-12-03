<?php
/**
 * Block Name: Subservices Block Five
 */
?>

<div class="container-fluid subservices-blockFive-container">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $link_one = get_field( 'link_one' );
            $link_two = get_field( 'link_two' );
            $link_three = get_field( 'link_three' );

            if ( $link_one ) { ?>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div align="center">
                    <a href="<?php echo $link_one['url']; ?>" class="btn subservices-blockFive-button" target="<?php echo $link_one['target']; ?>"><?php echo $link_one['title']; ?></a>
                </div>
            </div>
            <?php
            }
            if ( $link_two ) { ?>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div align="center">
                    <a href="<?php echo $link_two['url']; ?>" class="btn subservices-blockFive-button" target="<?php echo $link_two['target']; ?>"><?php echo $link_two['title']; ?></a>
                </div>
            </div>
                <?php
            }
            if ( $link_three ) { ?>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div align="center">
                    <a href="<?php echo $link_three['url']; ?>" class="btn subservices-blockFive-button" target="<?php echo $link_three['target']; ?>"><?php echo $link_three['title']; ?></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
