<?php
/**
 * Block Name: Review Block Two
 */
?>
<div class="container-fluid review-background">
    <div class="container-fluid">
        <div class="container">
            <h1 class="review-blockTwo-heading"><?php the_field( 'heading' ); ?></h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="z-depth-1-half review-blockTwo-container" align="center">
                <p class="review-blockTwo-bodyText"><?php the_field( 'body_text' ); ?></p>
                <p><span class="review-blockTwo-subheading"><?php the_field( 'video_header' ); ?></span> <i class="fas fa-hand-point-down review-blockTwo-icon fa-lg"></i></p>
                <div align="center">
                    <?php the_field( 'video_embed_link' ); ?>
                </div>
                <?php $button = get_field( 'button' ); ?>
                <?php if ( $button ) { ?>
                    <a href="<?php echo $button['url']; ?>" class="btn review-blockTwo-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>

</div>