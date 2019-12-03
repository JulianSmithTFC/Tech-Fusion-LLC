<?php
/**
 * Block Name: Subservices Block Seven
 */
?>

<div class="container-fluid subservices-blockSeven-container">
    <div class="container" align="center">
        <div class="">
            <h2 class="subservices-blockSeven-heading"><?php the_field( 'heading' ); ?></h2>
            <p class="subservices-blockSeven-bodyText"><?php the_field( 'body_text' ); ?></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 subservices-blockSeven-containerLeft">
                <?php
                if( have_rows('service_blocks') ):
                    $count = 0;
                    $imageArray = array();

                    while ( have_rows('service_blocks') ) : the_row(); ?>
                        <?php $image = get_sub_field( 'image' );
                        if ($count == 0){ ?>
                            <div id="subservices-blockSeven-image-<?php echo $count?>" class="collapse show">
                                <img src="<?php echo $image['url']; ?>" class="subservices-blockSeven-image" alt="<?php echo $image['alt']; ?>" />
                            </div>
                            <?php
                        } if ($count > 0){ ?>
                            <div id="subservices-blockSeven-image-<?php echo $count?>" class="collapse ">
                                <img src="<?php echo $image['url']; ?>" class="subservices-blockSeven-image" alt="<?php echo $image['alt']; ?>" />
                            </div>
                            <?php
                        }
                        $imageArray[$count] = 'subservices-blockSeven-image-' . $count;
                        $count++;
                    endwhile;
                endif;

                ?>

                <div>
                    <img id="leftImage" src="<?php echo $image_one['url']; ?>" class="subservices-blockSeven-image" alt="<?php echo $image_one['alt']; ?>" />
                </div>
                <div>
                    <img id="leftImage" src="<?php echo $image_one['url']; ?>" class="subservices-blockSeven-image" alt="<?php echo $image_one['alt']; ?>" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 subservices-blockSeven-containerRight">
                <div>

                    <div class="accordion" id="accordionExample">
                        <?php
                        if( have_rows('service_blocks') ):
                            $count = 0;
                            while ( have_rows('service_blocks') ) : the_row(); ?>
                                <?php
                                if ($count == 0){ ?>
                                    <div id="subservices-blockSeven-accordian-<?php echo $count ?>" class="subservices-blockSeven-accordianOne-shown subservices-blockSeven-accordian subservices-blockSeven-accordianContainer">
                                        <a data-toggle="collapse" data-target="#collapseRight-<?php echo $count ?>" aria-expanded="true" aria-controls="collapseRight-<?php echo $count ?>">
                                            <h4 class="subservices-blockSeven-accordianHeading"><?php the_sub_field( 'heading' ); ?></h4>
                                        </a>
                                        <div id="collapseRight-<?php echo $count ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <p class="subservices-blockSeven-accordianBodyText"><?php the_sub_field( 'body_text' ); ?></p>
                                        </div>
                                    </div>
                                    <?php
                                } if ($count > 0){ ?>
                                    <div id="subservices-blockSeven-accordian-<?php echo $count ?>" class=" subservices-blockSeven-accordianContainer">
                                        <a data-toggle="collapse" data-target="#collapseRight-<?php echo $count ?>" aria-expanded="true" aria-controls="collapseRight-<?php echo $count ?>">
                                            <h4 class="subservices-blockSeven-accordianHeading"><?php the_sub_field( 'heading' ); ?></h4>
                                        </a>
                                        <div id="collapseRight-<?php echo $count ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <p class="subservices-blockSeven-accordianBodyText"><?php the_sub_field( 'body_text' ); ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $count++;
                            endwhile;
                        endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container" align="center">
        <?php $button = get_field( 'button' ); ?>
        <?php if ( $button ) { ?>
            <a href="<?php echo $button['url']; ?>" class="btn subservices-blockSeven-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
        <?php } ?>
    </div>
</div>
