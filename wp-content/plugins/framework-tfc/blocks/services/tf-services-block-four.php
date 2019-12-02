<?php
/**
 * Block Name: Services Block Four
 */
?>

<div class="container-fluid services-blockFour-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 services-blockFour-containerLeft">
                <div>
                    <h2 class="services-blockFour-heading"><?php the_field( 'heading' ); ?></h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 services-blockFour-containerRight">
                <div>
                    <?php $button_link_text = get_field( 'button_link_text' ); ?>
                    <?php if ( $button_link_text ) { ?>
                        <a href="<?php echo $button_link_text['url']; ?>" class="btn services-blockFour-button" target="<?php echo $button_link_text['target']; ?>"><?php echo $button_link_text['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
