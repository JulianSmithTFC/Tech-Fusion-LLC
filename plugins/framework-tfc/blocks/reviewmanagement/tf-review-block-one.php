<?php
/**
 * Block Name: Review Block One
 */
?>
<div class="container-fluid review-blockOne-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 review-blockOne-containerLeft">
                <div class="review-blockOne-heading">
                    <?php the_field( 'heading' ); ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 review-blockOne-containerRight">
                <div>
                    <?php $button = get_field( 'button' ); ?>
                    <?php if ( $button ) { ?>
                        <a href="<?php echo $button['url']; ?>" class="btn review-blockOne-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
