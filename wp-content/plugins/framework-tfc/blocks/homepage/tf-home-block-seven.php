<?php
/**
 * Block Name: Home Block Seven
 */
?>

<div class="container-fluid home-blockSeven-container" style="background-image: url('<?php the_field( 'background_image' ); ?>')">
    <div class="container">
        <div align="left">
            <h2 class="home-blockSeven-heading"><?php the_field( 'heading' ); ?></h2>
            <p class="home-blockSeven-desc"><?php the_field( 'description' ); ?></p>
            <?php $button_link_and_text = get_field( 'button_link_and_text' ); ?>
            <?php if ( $button_link_and_text ) { ?>
                <a href="<?php echo $button_link_and_text['url']; ?>" class="btn home-blockSeven-button" target="<?php echo $button_link_and_text['target']; ?>"><?php echo $button_link_and_text['title']; ?></a>
            <?php } ?>
        </div>
    </div>
</div>