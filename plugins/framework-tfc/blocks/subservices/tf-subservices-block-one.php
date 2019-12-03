<?php
/**
 * Block Name: Subservices Block One
 */
?>
<div class="subservices-menuAndBlockOne-background">

    <?php include(dirname(__FILE__)."/../menu-main.php"); ?>

    <div class="container-fluid subservices-blockOne-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 subservices-blockOne-containerLeft">
                    <div>
                        <h1 class="subservices-blockOne-heading subservices-blockOne-headingOne"><?php the_field( 'heading_line_one' ); ?></h1>
                        <h2 class="subservices-blockOne-subheading"><?php the_field( 'subheading_text' ); ?></h2>
                        <?php $button_link_and_text = get_field( 'button_link_and_text' ); ?>
                        <?php if ( $button_link_and_text ) { ?>
                            <a href="<?php echo $button_link_and_text['url']; ?>" class="btn subservices-blockOne-button" target="<?php echo $button_link_and_text['target']; ?>"><?php echo $button_link_and_text['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 subservices-blockOne-containerRight">
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