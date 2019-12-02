<?php
/**
 * Block Name: Home Block Two
 */
?>

<div class="container-fluid home-blockTwo-container">
    <div class="container">
        <div align="center">
            <?php the_field( 'heading' ); ?>
            <p class="home-blockTwo-bodyText"><?php the_field( 'sub_heading' ); ?></p>
        </div>
        <div class="row ">
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <div align="left">
                    <h3 class="home-blockTwo-serviceHeadingOne"><?php the_field( 'service_heading_one' ); ?></h3>
                    <p class="home-blockTwo-serviceDescOne"><?php the_field( 'service_description_one' ); ?></p>
                    <?php $service_link_one = get_field( 'service_link_one' ); ?>
                    <?php if ( $service_link_one ) { ?>
                        <a href="<?php echo $service_link_one['url']; ?>" class="btn home-blockTwo-serviceButtonOne" target="<?php echo $service_link_one['target']; ?>"><?php echo $service_link_one['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <div align="right">
                    <?php $service_icon_one = get_field( 'service_icon_one' ); ?>
                    <?php if ( $service_icon_one ) { ?>
                        <img src="<?php echo $service_icon_one['url']; ?>" class="home-blockTwo-serviceIconOne" alt="<?php echo $service_icon_one['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <div align="right">
                    <?php $service_icon_two = get_field( 'service_icon_two' ); ?>
                    <?php if ( $service_icon_two ) { ?>
                        <img src="<?php echo $service_icon_two['url']; ?>" class="home-blockTwo-serviceIconTwo" alt="<?php echo $service_icon_two['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <div align="right">
                    <h3 class="home-blockTwo-serviceHeadingTwo"><?php the_field( 'service_heading_two' ); ?></h3>
                    <p class="home-blockTwo-serviceDescTwo"><?php the_field( 'service_description_two' ); ?></p>
                    <?php $service_link_two = get_field( 'service_link_two' ); ?>
                    <?php if ( $service_link_two ) { ?>
                        <a href="<?php echo $service_link_two['url']; ?>" class="btn home-blockTwo-serviceButtonTwo" target="<?php echo $service_link_two['target']; ?>"><?php echo $service_link_two['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <div align="left">
                    <h3 class="home-blockTwo-serviceHeadingThree"><?php the_field( 'service_heading_three' ); ?></h3>
                    <p class="home-blockTwo-serviceDescThree"><?php the_field( 'service_description_three' ); ?></p>
                    <?php $service_link_three = get_field( 'service_link_three' ); ?>
                    <?php if ( $service_link_three ) { ?>
                        <a href="<?php echo $service_link_three['url']; ?>" class="btn home-blockTwo-serviceButtonThree" target="<?php echo $service_link_three['target']; ?>"><?php echo $service_link_three['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <div align="right">
                    <?php $service_icon_three = get_field( 'service_icon_three' ); ?>
                    <?php if ( $service_icon_three ) { ?>
                        <img src="<?php echo $service_icon_three['url']; ?>" class="home-blockTwo-serviceIconThree" alt="<?php echo $service_icon_three['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
        </div>



        <div class="row ">
            <div class="col-lg-6 col-md-6 col-sm-12 d-block d-md-none">
                <div align="left">
                    <?php $service_icon_one = get_field( 'service_icon_one' ); ?>
                    <?php if ( $service_icon_one ) { ?>
                        <img src="<?php echo $service_icon_one['url']; ?>" class="home-blockTwo-serviceIconOne" alt="<?php echo $service_icon_one['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-block d-md-none">
                <div align="left">
                    <h3 class="home-blockTwo-serviceHeadingOne"><?php the_field( 'service_heading_one' ); ?></h3>
                    <p class="home-blockTwo-serviceDescOne"><?php the_field( 'service_description_one' ); ?></p>
                    <?php $service_link_one = get_field( 'service_link_one' ); ?>
                    <?php if ( $service_link_one ) { ?>
                        <a href="<?php echo $service_link_one['url']; ?>" class="btn home-blockTwo-serviceButtonOne" target="<?php echo $service_link_one['target']; ?>"><?php echo $service_link_one['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 d-block d-md-none">
                <div align="right">
                    <?php $service_icon_two = get_field( 'service_icon_two' ); ?>
                    <?php if ( $service_icon_two ) { ?>
                        <img src="<?php echo $service_icon_two['url']; ?>" class="home-blockTwo-serviceIconTwo" alt="<?php echo $service_icon_two['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-block d-md-none">
                <div align="right">
                    <h3 class="home-blockTwo-serviceHeadingTwo"><?php the_field( 'service_heading_two' ); ?></h3>
                    <p class="home-blockTwo-serviceDescTwo"><?php the_field( 'service_description_two' ); ?></p>
                    <?php $service_link_two = get_field( 'service_link_two' ); ?>
                    <?php if ( $service_link_two ) { ?>
                        <a href="<?php echo $service_link_two['url']; ?>" class="btn home-blockTwo-serviceButtonTwo" target="<?php echo $service_link_two['target']; ?>"><?php echo $service_link_two['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 d-block d-md-none">
                <div align="left">
                    <?php $service_icon_three = get_field( 'service_icon_three' ); ?>
                    <?php if ( $service_icon_three ) { ?>
                        <img src="<?php echo $service_icon_three['url']; ?>" class="home-blockTwo-serviceIconThree" alt="<?php echo $service_icon_three['alt']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-block d-md-none">
                <div align="left">
                    <h3 class="home-blockTwo-serviceHeadingThree"><?php the_field( 'service_heading_three' ); ?></h3>
                    <p class="home-blockTwo-serviceDescThree"><?php the_field( 'service_description_three' ); ?></p>
                    <?php $service_link_three = get_field( 'service_link_three' ); ?>
                    <?php if ( $service_link_three ) { ?>
                        <a href="<?php echo $service_link_three['url']; ?>" class="btn home-blockTwo-serviceButtonThree" target="<?php echo $service_link_three['target']; ?>"><?php echo $service_link_three['title']; ?></a>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>