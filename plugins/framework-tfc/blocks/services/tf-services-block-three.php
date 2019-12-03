<?php
/**
 * Block Name: Services Block Three
 */
?>

<div class="container-fluid services-blockThree-container">
    <div class="container-fluid" align="center">
        <div class="">
            <h2 class="services-blockThree-heading"><?php the_field( 'heading' ); ?></h2>
            <p class="services-blockThree-bodyText"><?php the_field( 'body_text' ); ?></p>
        </div>
    </div>
    <div class="services-blockThree-timeline">
        <?php if ( have_rows( 'service_one' ) ) : ?>
            <?php while ( have_rows( 'service_one' ) ) : the_row(); ?>
                <?php $service_image = get_sub_field( 'service_image' );
                if ($service_image != '') :
                    ?>
                    <div class="services-blockThree-timelineContainer services-blockThree-left">
                        <div class="services-blockThree-content">
                            <div class="services-blockThree-innerContainer z-depth-1" >
                                <div class="" align="right">
                                    <?php if ( $service_image ) { ?>
                                        <img src="<?php echo $service_image['url']; ?>" class="services-blockThree-image" alt="<?php echo $service_image['alt']; ?>" />
                                    <?php } ?>
                                </div>
                                <h3 class="services-blockThree-headingBlock services-blockThree-headingBlock-desktop">
                                    <?php the_sub_field( 'service_name' ); ?>
                                </h3>
                                <p class="services-blockThree-subheading"><?php the_sub_field( 'service_heading' ); ?></p>
                                <p class="services-blockThree-description"><?php the_sub_field( 'service_description' ); ?></p>
                            </div>
                            <?php $service_link = get_sub_field( 'service_link' ); ?>
                            <?php if ( $service_link ) { ?>
                                <a href="<?php echo $service_link['url']; ?>" class="btn btn-block services-blockThree-button" target="<?php echo $service_link['target']; ?>"><?php echo $service_link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'service_two' ) ) : ?>
            <?php while ( have_rows( 'service_two' ) ) : the_row(); ?>
                <?php $service_image = get_sub_field( 'service_image' );
                if ($service_image != '') :
                    ?>
                    <div class="services-blockThree-timelineContainer services-blockThree-right">
                        <div class="services-blockThree-content">
                            <div class="services-blockThree-innerContainer z-depth-1">
                                <div class="" align="right">
                                    <?php if ( $service_image ) { ?>
                                        <img src="<?php echo $service_image['url']; ?>" class="services-blockThree-image" alt="<?php echo $service_image['alt']; ?>" />
                                    <?php } ?>
                                </div>
                                <h3 class="services-blockThree-headingBlock services-blockThree-headingBlock-desktop">
                                    <?php the_sub_field( 'service_name' ); ?>
                                </h3>
                                <p class="services-blockThree-subheading"><?php the_sub_field( 'service_heading' ); ?></p>
                                <p class="services-blockThree-description"><?php the_sub_field( 'service_description' ); ?></p>
                            </div>
                            <?php $service_link = get_sub_field( 'service_link' ); ?>
                            <?php if ( $service_link ) { ?>
                                <a href="<?php echo $service_link['url']; ?>" class="btn btn-block services-blockThree-button" target="<?php echo $service_link['target']; ?>"><?php echo $service_link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'service_three' ) ) : ?>
            <?php while ( have_rows( 'service_three' ) ) : the_row(); ?>
                <?php $service_image = get_sub_field( 'service_image' );
                if ($service_image != '') :
                    ?>
                    <div class="services-blockThree-timelineContainer services-blockThree-left">
                        <div class="services-blockThree-content">
                            <div class="services-blockThree-innerContainer z-depth-1">
                                <div class="" align="right">
                                    <?php if ( $service_image ) { ?>
                                        <img src="<?php echo $service_image['url']; ?>" class="services-blockThree-image" alt="<?php echo $service_image['alt']; ?>" />
                                    <?php } ?>
                                </div>
                                <h3 class="services-blockThree-headingBlock services-blockThree-headingBlock-desktop">
                                    <?php the_sub_field( 'service_name' ); ?>
                                </h3>
                                <p class="services-blockThree-subheading"><?php the_sub_field( 'service_heading' ); ?></p>
                                <p class="services-blockThree-description"><?php the_sub_field( 'service_description' ); ?></p>
                            </div>
                            <?php $service_link = get_sub_field( 'service_link' ); ?>
                            <?php if ( $service_link ) { ?>
                                <a href="<?php echo $service_link['url']; ?>" class="btn btn-block services-blockThree-button" target="<?php echo $service_link['target']; ?>"><?php echo $service_link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'service_four' ) ) : ?>
            <?php while ( have_rows( 'service_four' ) ) : the_row(); ?>
                <?php $service_image = get_sub_field( 'service_image' );
                if ($service_image != '') :
                    ?>
                    <div class="services-blockThree-timelineContainer services-blockThree-right">
                        <div class="services-blockThree-content">
                            <div class="services-blockThree-innerContainer z-depth-1">
                                <div class="" align="right">
                                    <?php if ( $service_image ) { ?>
                                        <img src="<?php echo $service_image['url']; ?>" class="services-blockThree-image" alt="<?php echo $service_image['alt']; ?>" />
                                    <?php } ?>
                                </div>
                                <h3 class="services-blockThree-headingBlock services-blockThree-headingBlock-desktop">
                                    <?php the_sub_field( 'service_name' ); ?>
                                </h3>
                                <p class="services-blockThree-subheading"><?php the_sub_field( 'service_heading' ); ?></p>
                                <p class="services-blockThree-description"><?php the_sub_field( 'service_description' ); ?></p>
                            </div>
                            <?php $service_link = get_sub_field( 'service_link' ); ?>
                            <?php if ( $service_link ) { ?>
                                <a href="<?php echo $service_link['url']; ?>" class="btn btn-block services-blockThree-button" target="<?php echo $service_link['target']; ?>"><?php echo $service_link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'service_five' ) ) : ?>
            <?php while ( have_rows( 'service_five' ) ) : the_row(); ?>
                <?php $service_image = get_sub_field( 'service_image' );
                if ($service_image != '') :
                    ?>
                    <div class="services-blockThree-timelineContainer services-blockThree-left">
                        <div class="services-blockThree-content">
                            <div class="services-blockThree-innerContainer z-depth-1">
                                <div class="" align="right">
                                    <?php if ( $service_image ) { ?>
                                        <img src="<?php echo $service_image['url']; ?>" class="services-blockThree-image" alt="<?php echo $service_image['alt']; ?>" />
                                    <?php } ?>
                                </div>
                                <h3 class="services-blockThree-headingBlock services-blockThree-headingBlock-desktop">
                                    <?php the_sub_field( 'service_name' ); ?>
                                </h3>
                                <p class="services-blockThree-subheading"><?php the_sub_field( 'service_heading' ); ?></p>
                                <p class="services-blockThree-description"><?php the_sub_field( 'service_description' ); ?></p>
                            </div>
                            <?php $service_link = get_sub_field( 'service_link' ); ?>
                            <?php if ( $service_link ) { ?>
                                <a href="<?php echo $service_link['url']; ?>" class="btn btn-block services-blockThree-button" target="<?php echo $service_link['target']; ?>"><?php echo $service_link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'service_six' ) ) : ?>
            <?php while ( have_rows( 'service_six' ) ) : the_row(); ?>
                <?php $service_image = get_sub_field( 'service_image' );
                if ($service_image != '') :
                    ?>
                    <div class="services-blockThree-timelineContainer services-blockThree-right">
                        <div class="services-blockThree-content">
                            <div class="services-blockThree-innerContainer z-depth-1">
                                <div class="" align="right">
                                    <?php if ( $service_image ) { ?>
                                        <img src="<?php echo $service_image['url']; ?>" class="services-blockThree-image" alt="<?php echo $service_image['alt']; ?>" />
                                    <?php } ?>
                                </div>
                                <h3 class="services-blockThree-headingBlock services-blockThree-headingBlock-desktop">
                                    <?php the_sub_field( 'service_name' ); ?>
                                </h3>
                                <p class="services-blockThree-subheading"><?php the_sub_field( 'service_heading' ); ?></p>
                                <p class="services-blockThree-description"><?php the_sub_field( 'service_description' ); ?></p>
                            </div>
                            <?php $service_link = get_sub_field( 'service_link' ); ?>
                            <?php if ( $service_link ) { ?>
                                <a href="<?php echo $service_link['url']; ?>" class="btn btn-block services-blockThree-button" target="<?php echo $service_link['target']; ?>"><?php echo $service_link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
