<?php
/**
 * Block Name: Subservices Block Four
 */
?>

<div class="container-fluid subservices-blockFour-container">
    <div class="container" align="center">
        <h3 class="subservices-blockFour-heading"><?php the_field( 'heading' ); ?></h3>
        <?php $link = get_field( 'link' ); ?>
        <?php if ( $link ) { ?>
            <a href="<?php echo $link['url']; ?>" class="btn subservices-blockFour-button" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php } ?>
    </div>
</div>
