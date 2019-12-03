<?php
/**
 * Block Name: Review Block Nine
 */
?>
<div class="container-fluid review-background review-blockNine-containerMain">
    <div class="container review-blockNine-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 review-blockNine-containerLeft">
                <div align="center">
                    <?php the_field( 'video_embed_code' ); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 review-blockNine-containerRight">
                <div>
                    <h3 class="review-blockNine-heading"><?php the_field( 'heading' ); ?></h3>
                    <div class="review-blockNine-bodyText">
                        <?php the_field( 'body_text' ); ?>
                    </div>
                    <?php $link = get_field( 'link' ); ?>
                    <?php if ( $link ) { ?>
                        <a href="<?php echo $link['url']; ?>" class="btn review-blockNine-button" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
