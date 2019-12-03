<?php
/**
 * Block Name: Review Block Seven
 */
?>
<div class="container-fluid review-background review-blockSeven-containerMain">
    <div class="container review-blockSeven-container">
        <h2 class="review-blockSeven-heading"><?php the_field( 'heading' ); ?></h2>
        <?php if ( have_rows( 'review_stats' ) ) : ?>
            <?php while ( have_rows( 'review_stats' ) ) : the_row(); ?>
                <div class="review-blockSeven-containers">
                    <h3 class="review-blockSeven-headings"><?php the_sub_field( 'heading' ); ?></h3>
                    <?php $image = get_sub_field( 'image' ); ?>
                    <?php if ( $image ) { ?>
                        <img src="<?php echo $image['url']; ?>" class="review-blockSeven-images" alt="<?php echo $image['alt']; ?>" />
                    <?php } ?>
                    <h4 class="review-blockSeven-subheadings"><?php the_sub_field( 'sub_heading' ); ?></h4>
                    <hr class="review-blockSeven-hrlines" align="center"/>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
