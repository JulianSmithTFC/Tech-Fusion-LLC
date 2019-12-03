<?php
/**
 * Block Name: Review Block Eleven
 */
?>
<div class="container-fluid review-blockEleven-container">
    <div class="container" align="center">
        <p class="review-blockEleven-heading"><?php the_field( 'heading' ); ?></p>
        <p class="review-blockEleven-bodyText"><?php the_field( 'body_text' ); ?></p>
        <?php $link = get_field( 'link' ); ?>
        <?php if ( $link ) { ?>
            <a href="<?php echo $link['url']; ?>" class="btn review-blockEleven-button" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php } ?>
    </div>
</div>
