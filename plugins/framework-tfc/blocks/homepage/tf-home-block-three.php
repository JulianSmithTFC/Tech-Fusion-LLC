<?php
/**
 * Block Name: Home Block Three
 */
?>

<div class="container-fluid home-blockThree-container" style="background-image: url('<?php the_field( 'background_image' ); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 home-blockThree-containerLeft">
                <div>
                    <h2 class="home-blockThree-heading"><?php the_field( 'heading' ); ?></h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 home-blockThree-containerRight">
                <div>
                    <?php $button_link_text = get_field( 'button_link_text' ); ?>
                    <?php if ( $button_link_text ) { ?>
                        <a href="<?php echo $button_link_text['url']; ?>" class="btn home-blockThree-button" target="<?php echo $button_link_text['target']; ?>"><?php echo $button_link_text['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>