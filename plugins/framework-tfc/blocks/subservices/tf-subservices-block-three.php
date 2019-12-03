<?php
/**
 * Block Name: Subservices Block Three
 */
?>

<div class="container-fluid subservices-blockThree-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="subservices-blockThree-individualContainers" align="center">
                    <?php if ( get_field( 'left_icon') ) {
                        echo file_get_contents(get_field( 'left_icon' ));
                    } ?>
                    <p class="subservices-blockThree-bodyText"><?php the_field( 'left_text' ); ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="subservices-blockThree-individualContainers" align="center">
                    <?php if ( get_field( 'right_icon') ) {
                        echo file_get_contents(get_field( 'right_icon' ));
                    } ?>
                    <p class="subservices-blockThree-bodyText"><?php the_field( 'right_text' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>