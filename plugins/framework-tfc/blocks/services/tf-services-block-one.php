<?php
/**
 * Block Name: Services Block One
 */
?>
<div class="home-menuAndBlockOne-background">

    <?php include(dirname(__FILE__)."/../menu-main.php"); ?>

    <div class="container-fluid services-blockOne-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 services-blockOne-containerLeft">
                    <div>
                        <h1 class="services-blockOne-heading services-blockOne-headingOne">
                            <?php the_field( 'heading_line_one' ); ?><br/>
                            <span class="services-blockOne-headingTwo"><?php the_field( 'heading_line_two' ); ?></span>
                        </h1>
                        <h2 class="services-blockOne-subheading"><?php the_field( 'subheading_text' ); ?></h2>
                        <?php $button_link_and_text = get_field( 'button_link_and_text' ); ?>
                        <?php if ( $button_link_and_text ) { ?>
                            <a href="<?php echo $button_link_and_text['url']; ?>" class="btn services-blockOne-button" target="<?php echo $button_link_and_text['target']; ?>"><?php echo $button_link_and_text['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 services-blockOne-containerRight">
                    <div>
                        <?php if ( get_field( 'svg_icon') ) {
                            echo file_get_contents(get_field( 'svg_icon' ));
                         } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>