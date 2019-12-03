<?php
/**
 * Block Name: Review Block Four
 */
?>
<div class="container-fluid review-background">
    <div class="container review-blockFour-container" align="left">
        <h2 class="review-blockFour-heading"><?php the_field( 'heading' ); ?></h2>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="review-blockFour-containerLeft">
                    <?php the_field( 'body_text' ); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" align="center">
                <div class="review-blockFour-containerRight">
                    <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) { ?>
                        <div class="review-blockFour-image" style="background-image: url('<?php echo $image['url']; ?>')"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
