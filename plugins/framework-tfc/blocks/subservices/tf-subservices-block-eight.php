<?php
/**
 * Block Name: Subservices Block Eight
 */
?>

<div class="container-fluid subservices-blockEight-container" align="center">
    <div class="container">
        <h2 class="subservices-blockEight-heading"><?php the_field( 'heading' ); ?></h2>
        <p class="subservices-blockEight-subheading"><?php the_field( 'subheading' ); ?></p>
        <div class="row justify-content-center">
            <?php if ( have_rows( 'group_one' ) ) : ?>
                <?php while ( have_rows( 'group_one' ) ) : the_row(); ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-12" align="center">
                            <button id="ss-blockEight-btnOne" class="btn subservices-blockEight-btn-active" type="button" data-toggle="collapse" data-target="#ss-blockEight-one" aria-expanded="false" aria-controls="ss-blockEight-one">
                                <?php echo $button['title']; ?>
                            </button>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'group_two' ) ) : ?>
                <?php while ( have_rows( 'group_two' ) ) : the_row(); ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-12" align="center">
                            <button id="ss-blockEight-btnTwo" class="btn subservices-blockEight-btn-normal" type="button" data-toggle="collapse" data-target="#ss-blockEight-two" aria-expanded="false" aria-controls="ss-blockEight-two">
                                <?php echo $button['title']; ?>
                            </button>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'group_three' ) ) : ?>
                <?php while ( have_rows( 'group_three' ) ) : the_row(); ?>
                    <?php $button = get_sub_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-12" align="center">
                            <button id="ss-blockEight-btnThree" class="btn subservices-blockEight-btn-normal" type="button" data-toggle="collapse" data-target="#ss-blockEight-three" aria-expanded="false" aria-controls="ss-blockEight-three">
                                <?php echo $button['title']; ?>
                            </button>
                        </div>
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid subservices-blockEight-containers">
    <div class="container">
        <?php if ( have_rows( 'group_one' ) ) : ?>
            <?php while ( have_rows( 'group_one' ) ) : the_row(); ?>
                <div id="ss-blockEight-one" class="row collapse show">
                    <div class="col-lg-6 col-md-6 col-sm-12" align="left">
                        <div class="subservices-blockEight-containerLeft">
                            <h3 class="subservices-blockEight-headingLeft"><?php the_sub_field( 'heading' ); ?></h3>
                            <h4 class="subservices-blockEight-subheadingLeft"><?php the_sub_field( 'subheading' ); ?></h4>
                            <p class="subservices-blockEight-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                            <?php $button = get_sub_field( 'button_bottom' ); ?>
                            <?php if ( $button ) { ?>
                                <a href="<?php echo $button['url']; ?>" class="btn subservices-blockEight-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" align="center">
                        <div class="subservices-blockEight-containerRight">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) { ?>
                                <img class="subservices-blockEight-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'group_two' ) ) : ?>
            <?php while ( have_rows( 'group_two' ) ) : the_row(); ?>
                <div id="ss-blockEight-two" class="row collapse">
                    <div class="col-lg-6 col-md-6 col-sm-12" align="left">
                        <div class="subservices-blockEight-containerLeft">
                            <h3 class="subservices-blockEight-headingLeft"><?php the_sub_field( 'heading' ); ?></h3>
                            <h4 class="subservices-blockEight-subheadingLeft"><?php the_sub_field( 'subheading' ); ?></h4>
                            <p class="subservices-blockEight-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                            <?php $button = get_sub_field( 'button_bottom' ); ?>
                            <?php if ( $button ) { ?>
                                <a href="<?php echo $button['url']; ?>" class="btn subservices-blockEight-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" align="center">
                        <div class="subservices-blockEight-containerRight">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) { ?>
                                <img class="subservices-blockEight-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'group_three' ) ) : ?>
            <?php while ( have_rows( 'group_three' ) ) : the_row(); ?>
                <div id="ss-blockEight-three" class="row collapse">
                    <div class="col-lg-6 col-md-6 col-sm-12" align="left">
                        <div class="subservices-blockEight-containerLeft">
                            <h3 class="subservices-blockEight-headingLeft"><?php the_sub_field( 'heading' ); ?></h3>
                            <h4 class="subservices-blockEight-subheadingLeft"><?php the_sub_field( 'subheading' ); ?></h4>
                            <p class="subservices-blockEight-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                            <?php $button = get_sub_field( 'button_bottom' ); ?>
                            <?php if ( $button ) { ?>
                                <a href="<?php echo $button['url']; ?>" class="btn subservices-blockEight-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" align="center">
                        <div class="subservices-blockEight-containerRight">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) { ?>
                                <img class="subservices-blockEight-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
