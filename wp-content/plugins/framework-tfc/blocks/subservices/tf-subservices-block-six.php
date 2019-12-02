<?php
/**
 * Block Name: Subservices Block Six
 */
?>

<div class="container-fluid subservices-blockSix-container">
    <div class="container">
        <?php if(get_field( 'heading' ) != ''){ ?>
            <div align="center">
                <h2 class="subservices-blockSix-heading"><?php the_field( 'heading' ); ?></h2>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 subservices-blockSix-containerLeft">
                <div>
                    <?php if(get_field( 'subheading' ) != ''){ ?>
                        <h3 class="subservices-blockSix-subheading"><?php the_field( 'subheading' ); ?></h3>
                    <?php } ?>
                    <p class="subservices-blockSix-bodyText"><?php the_field( 'body_text' ); ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 subservices-blockSix-containerRight">
                <div>
                    <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) { ?>
                        <img src="<?php echo $image['url']; ?>" class="subservices-blockSix-image" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
