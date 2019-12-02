<?php
/**
 * Block Name: Solutions Block Two
 */
?>

<div class="container-fluid soulutions-blockTwo-container">
    <div class="container">
        <div class="row">
            <?php if ( have_rows( 'service_left' ) ) : ?>
                <?php while ( have_rows( 'service_left' ) ) : the_row(); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockTwo-containerLeft">
                        <div align="center">
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) { ?>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                    <?php if ( get_sub_field( 'svg_image') ) {
                                        echo file_get_contents(get_sub_field( 'svg_image'));
                                    } ?>
                                    <?php $normal_image = get_sub_field( 'normal_image' ); ?>
                                    <?php if ( $normal_image ) { ?>
                                        <img class="soulutions-blockTwo-images" src="<?php echo $normal_image['url']; ?>" alt="<?php echo $normal_image['alt']; ?>" />
                                    <?php } ?>
                                </a>
                            <?php } ?>
                            <h3 class="soulutions-blockTwo-headings"><?php the_sub_field( 'heading' ); ?></h3>
                            <p class="soulutions-blockTwo-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) { ?>
                                <a href="<?php echo $link['url']; ?>" class="btn soulutions-blockTwo-buttons" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if ( have_rows( 'service_right' ) ) : ?>
                <?php while ( have_rows( 'service_right' ) ) : the_row(); ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockTwo-containerRight">
                        <div align="center">
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) { ?>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                    <?php if ( get_sub_field( 'svg_image') ) {
                                        echo file_get_contents(get_sub_field( 'svg_image'));
                                    } ?>
                                    <?php $normal_image = get_sub_field( 'normal_image' ); ?>
                                    <?php if ( $normal_image ) { ?>
                                        <img class="soulutions-blockTwo-images" src="<?php echo $normal_image['url']; ?>" alt="<?php echo $normal_image['alt']; ?>" />
                                    <?php } ?>
                                </a>
                            <?php } ?>
                            <h3 class="soulutions-blockTwo-headings"><?php the_sub_field( 'heading' ); ?></h3>
                            <p class="soulutions-blockTwo-bodyText"><?php the_sub_field( 'body_text' ); ?></p>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) { ?>
                                <a href="<?php echo $link['url']; ?>" class="btn soulutions-blockTwo-buttons" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
