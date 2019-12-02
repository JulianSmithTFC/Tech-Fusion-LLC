<?php
/**
 * Block Name: Review Block Eight
 */
?>
<div class="container-fluid review-background review-blockEight-containerMain">
    <div class="container review-blockEight-container">
        <h3 class="review-blockEight-heading"><?php the_field( 'heading' ); ?></h3>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 review-blockEight-containerLeft">
                <div>
                    <?php $image = get_field( 'image' ); ?>
                    <?php if ( $image ) { ?>
                        <img src="<?php echo $image['url']; ?>" class="review-blockEight-image" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 review-blockEight-containerRight">
                <div class="review-blockEight-bodyText">
                    <?php the_field( 'body_text' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
