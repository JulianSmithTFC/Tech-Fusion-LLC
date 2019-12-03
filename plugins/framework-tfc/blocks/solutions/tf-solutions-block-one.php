<?php
/**
 * Block Name: Solutions Block One
 */
?>
<div id="solutions-blockOne-container" class="home-menuAndBlockOne-background">

    <?php include(dirname(__FILE__)."/../menu-main.php"); ?>

    <div class="container-fluid soulutions-blockOne-container">
        <div class="container soulutions-blockOne-containerTop" align="center">
            <h1 class="soulutions-blockOne-heading soulutions-blockOne-heading-desktop"><?php the_field( 'heading' ); ?></h1>
            <p class="soulutions-blockOne-subheading"><?php the_field( 'subheading' ); ?></p>
        </div>

        <div class="solutionsBlockOne-slider">
            <div>
                <div class="container">
                    <?php if ( have_rows( 'solution_one' ) ) : ?>
                        <?php while ( have_rows( 'solution_one' ) ) : the_row(); ?>

                            <div id="slide 1" class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-block d-md-none">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerLeft">
                                    <div>
                                        <h2 class="soulutions-blockOne-serviceHeading"><?php the_sub_field( 'heading' ); ?></h2>
                                        <p class="soulutions-blockOne-serviceDescription"><?php the_sub_field( 'body_text' ); ?></p>
                                        <?php $link = get_sub_field( 'link' ); ?>
                                        <?php if ( $link ) { ?>
                                            <a href="<?php echo $link['url']; ?>" class="btn soulutions-blockOne-buttons" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-none d-md-block">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <div class="container">
                    <?php if ( have_rows( 'solution_two' ) ) : ?>
                        <?php while ( have_rows( 'solution_two' ) ) : the_row(); ?>
                            <div id="slide 1" class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-block d-md-none">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerLeft">
                                    <div>
                                        <h2 class="soulutions-blockOne-serviceHeading"><?php the_sub_field( 'heading' ); ?></h2>
                                        <p class="soulutions-blockOne-serviceDescription"><?php the_sub_field( 'body_text' ); ?></p>
                                        <?php $link = get_sub_field( 'link' ); ?>
                                        <?php if ( $link ) { ?>
                                            <a href="<?php echo $link['url']; ?>" class="btn soulutions-blockOne-buttons" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-none d-md-block">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <div class="container">
                    <?php if ( have_rows( 'solution_three' ) ) : ?>
                        <?php while ( have_rows( 'solution_three' ) ) : the_row(); ?>
                            <div id="slide 1" class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-block d-md-none">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerLeft">
                                    <div>
                                        <h2 class="soulutions-blockOne-serviceHeading"><?php the_sub_field( 'heading' ); ?></h2>
                                        <p class="soulutions-blockOne-serviceDescription"><?php the_sub_field( 'body_text' ); ?></p>
                                        <?php $link = get_sub_field( 'link' ); ?>
                                        <?php if ( $link ) { ?>
                                            <a href="<?php echo $link['url']; ?>" class="btn soulutions-blockOne-buttons" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-none d-md-block">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <div class="container">
                    <?php if ( have_rows( 'solution_four' ) ) : ?>
                        <?php while ( have_rows( 'solution_four' ) ) : the_row(); ?>
                            <div id="slide 1" class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-block d-md-none">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerLeft">
                                    <div>
                                        <h2 class="soulutions-blockOne-serviceHeading"><?php the_sub_field( 'heading' ); ?></h2>
                                        <p class="soulutions-blockOne-serviceDescription"><?php the_sub_field( 'body_text' ); ?></p>
                                        <?php $link = get_sub_field( 'link' ); ?>
                                        <?php if ( $link ) { ?>
                                            <a href="<?php echo $link['url']; ?>" class="btn soulutions-blockOne-buttons" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 soulutions-blockOne-containerRight d-none d-md-block">
                                    <div>
                                        <?php $image = get_sub_field( 'image' ); ?>
                                        <?php if ( $image ) { ?>
                                            <img class="soulutions-blockOne-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container d-block d-md-none">
            <div class="row">
                <div class="col" align="right">
                    <i id="perIcon" class="fas fa-chevron-left fa-2x hvr-grow"></i>
                </div>
                <div class="col" align="left">
                    <i id="nextIcon" class="fas fa-chevron-right fa-2x hvr-grow"></i>
                </div>
            </div>
        </div>

        <div class="container d-none d-md-block" align="center" >
            <svg width="auto" height="auto" viewBox="0 0 4150 500" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                <defs>
                    <style>
                        .solutions-blockOne-line{
                            fill: #74aff7;
                        }
                        .SBO-NavCircle{
                            fill: #fff;
                            stroke: #74aff7;
                            stroke-width: 8.333px;
                        }
                        .SBO-NavCircleActive{
                            fill: #74aff7;
                            stroke: #74aff7;
                            stroke-width: 8.333px;
                        }
                        .SBO-NavText{
                            text-anchor: middle;
                            font-size: 70px;
                            fill: #9e9e9e;
                            font-weight: bold;
                        }
                    </style>
                </defs>
                <g>
                    <title>Layer 1</title>
                    <circle id="SBO-NavOne" class="SBO-NavCircleActive" onclick="goToSlideOne()" r="38.5" cy="72.5" cx="389.0625" fill="black"/>
                    <circle id="SBO-NavTwo" class="SBO-NavCircle" onclick="goToSlideTwo()" r="38.5" cy="72.5" cx="1514.0625"/>
                    <circle id="SBO-NavThree" class="SBO-NavCircle" onclick="goToSlideThree()" r="38.5" cy="72.5" cx="2639.0625"/>
                    <circle id="SBO-NavFour" class="SBO-NavCircle" onclick="goToSlideFour()" r="38.5" cy="72.5" cx="3763.75781"/>

                    <rect id="SBO-lineOne" class="solutions-blockOne-line" fill="black" height="19" width="1048.19289" y="63" x="426.86409" />
                    <rect id="SBO-lineTwo" class="solutions-blockOne-line" fill="black" height="19" width="1048.19289" y="63" x="1552.68485" />
                    <rect id="SBO-lineThree" class="solutions-blockOne-line" fill="black" height="19" width="1048.19289" y="63" x="2676.55976" />

                    <?php if ( have_rows( 'solution_nav_menu' ) ) : ?>
                        <?php while ( have_rows( 'solution_nav_menu' ) ) : the_row(); ?>

                            <text id="SBO-textOne-lineOne" class="SBO-NavText" onclick="goToSlideOne()" xml:space="preserve" y="200" x="389.0625" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_one_line_one' ); ?></text>
                            <text id="SBO-textOne-lineTwo" class="SBO-NavText" onclick="goToSlideOne()" xml:space="preserve" y="286" x="389.0625" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_one_line_two' ); ?></text>

                            <text id="SBO-textTwo-lineOne" class="SBO-NavText" onclick="goToSlideTwo()" xml:space="preserve" y="200" x="1514.0625" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_two_line_one' ); ?></text>
                            <text id="SBO-textTwo-lineTwo" class="SBO-NavText" onclick="goToSlideTwo()" xml:space="preserve" y="286" x="1514.0625" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_two_line_two' ); ?></text>

                            <text id="SBO-textThree-lineOne" class="SBO-NavText" onclick="goToSlideThree()" xml:space="preserve" y="200" x="2639.0625" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_three_line_one' ); ?></text>
                            <text id="SBO-textThree-lineTwo" class="SBO-NavText" onclick="goToSlideThree()" xml:space="preserve" y="286" x="2639.0625" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_three_line_two' ); ?></text>

                            <text id="SBO-textFour-lineOne" class="SBO-NavText" onclick="goToSlideFour()" xml:space="preserve" y="200" x="3763.75781" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_four_line_one' ); ?></text>
                            <text id="SBO-textFour-lineTwo" class="SBO-NavText" onclick="goToSlideFour()" xml:space="preserve" y="286" x="3763.75781" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="0"><?php the_sub_field( 'nav_four_line_two' ); ?></text>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </g>
            </svg>
        </div>
    </div>
</div>

