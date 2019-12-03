<?php
/**
 * Block Name: Review Block Six
 */
?>
<div class="container-fluid review-blockSix-container">
    <div class="container" align="center">
        <div class="review-blockSix-heading"><?php the_field( 'heading' ); ?></div>
        <?php $button = get_field( 'button' ); ?>
        <?php if ( $button ) { ?>
            <a href="<?php echo $button['url']; ?>" class="btn review-blockSix-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
        <?php } ?>
    </div>
</div>
