<?php
/**
 * Block Name: Home Block Five
 */
?>

<div class="container-fluid home-blockFive-container">
    <div>
        <div align="center">
            <?php if(get_field( 'heading' ) != ''){ ?>
                <h2 class="home-blockFive-heading"><?php the_field( 'heading' ); ?></h2>
            <?php }
            if (get_field('subheading') != ''){ ?>
                <h3 class="home-blockFive-subheading"><?php the_field( 'subheading' ); ?></h3>
            <?php } ?>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-12 home-blockFive-teamContainers">
                                <div>
                                    <?php $team_member_image_one = get_field( 'team_member_image_one' ); ?>
                                    <?php if ( $team_member_image_one ) { ?>
                                        <img src="<?php echo $team_member_image_one['url']; ?>" class="home-blockFive-teamImage" alt="<?php echo $team_member_image_one['alt']; ?>" />
                                    <?php } ?>
                                    <p class="home-blockFive-teamName"><?php the_field( 'team_member_name_one' ); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 home-blockFive-teamContainers">
                                <div>
                                    <?php $team_member_image_two = get_field( 'team_member_image_two' ); ?>
                                    <?php if ( $team_member_image_two ) { ?>
                                        <img src="<?php echo $team_member_image_two['url']; ?>" class="home-blockFive-teamImage" alt="<?php echo $team_member_image_two['alt']; ?>" />
                                    <?php } ?>
                                    <p class="home-blockFive-teamName"><?php the_field( 'team_member_name_two' ); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 home-blockFive-teamContainers">
                                <div>
                                    <?php $team_member_image_three = get_field( 'team_member_image_three' ); ?>
                                    <?php if ( $team_member_image_three ) { ?>
                                        <img src="<?php echo $team_member_image_three['url']; ?>" class="home-blockFive-teamImage" alt="<?php echo $team_member_image_three['alt']; ?>" />
                                    <?php } ?>
                                    <p class="home-blockFive-teamName"><?php the_field( 'team_member_name_three' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if(get_field( 'heading_left' ) != ''){ ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div align="right">
                            <h3 class="home-blockFive-descHeading"><?php the_field( 'heading_left' ); ?></h3>
                            <p class="home-blockFive-desc"><?php the_field( 'description_left' ); ?></p>
                        </div>
                    </div>
                <?php }
                if(get_field( 'heading_middle' ) != ''){ ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div align="center">
                            <h3 class="home-blockFive-descHeading"><?php the_field( 'heading_middle' ); ?></h3>
                            <p class="home-blockFive-desc"><?php the_field( 'description_middle' ); ?></p>
                        </div>
                    </div>
                <?php }
                if(get_field( 'heading_right' ) != ''){ ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div align="left">
                            <h3 class="home-blockFive-descHeading"><?php the_field( 'heading_right' ); ?></h3>
                            <p class="home-blockFive-desc"><?php the_field( 'description_right' ); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div>
                <?php $button_link_and_text = get_field( 'button_link_and_text' ); ?>
                <?php if ( $button_link_and_text ) { ?>
                    <a href="<?php echo $button_link_and_text['url']; ?>" class="btn home-blockFive-button" target="<?php echo $button_link_and_text['target']; ?>"><?php echo $button_link_and_text['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>