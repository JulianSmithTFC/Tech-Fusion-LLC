<?php
/**
 * Block Name: Home Block Four
 */
?>

<div class="container home-blockFour-container">
    <div align="center">
        <h2 class="home-blockFour-heading"><?php the_field( 'heading' ); ?></h2>
        <h3 class="home-blockFour-subheading"><?php the_field( 'sub_heading' ); ?></h3>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 home-blockFour-containerLeft">
            <div align="right">
                <?php $service_image = get_field( 'service_image' ); ?>
                <?php if ( $service_image ) { ?>
                    <img src="<?php echo $service_image['url']; ?>" class="home-blockFour-image" alt="<?php echo $service_image['alt']; ?>" />
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 home-blockFour-containerRight">
            <div align="left">
                <h4 class="home-blockFour-serviceHeading"><?php the_field( 'service_heading' ); ?></h4>
                <h5 class="home-blockFour-serviceSubheading"><?php the_field( 'service_sub_heading' ); ?></h5>
                <p class="home-blockFour-serviceDes"><?php the_field( 'service_description' ); ?></p>
                <?php $service_link = get_field( 'service_link' ); ?>
                <?php if ( $service_link ) { ?>
                    <a href="<?php echo $service_link['url']; ?>" class="btn home-blockFour-button" target="<?php echo $service_link['target']; ?>"><?php echo $service_link['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>