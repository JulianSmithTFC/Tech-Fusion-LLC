<?php
/**
 * Block Name: Services Block Two
 */
?>
<div class="container-fluid services-blockTwo-container d-none d-lg-block">
    <div class="row services-blockTwo-rows justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-10">
            <div align="right">
                <?php if ( have_rows( 'service_one' ) ) : ?>
                    <?php while ( have_rows( 'service_one' ) ) : the_row(); ?>
                        <svg class="services-blockTwo-svgHex hvr-grow" viewBox="0 0 424 344" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="#74aff7" d="m400.556,171.613l-94.467,-163.624l-188.934,0l-94.468,163.624l94.468,163.624l188.935,0l94.466,-163.624z"/>
                                <text class="services-blockTwo-hexText" y="137" x="212"><?php the_sub_field( 'line_one' ); ?></text>
                                <text class="services-blockTwo-hexText" y="184" x="212"><?php the_sub_field( 'line_two' ); ?></text>
                                <text class="services-blockTwo-hexText" y="232" x="212"><?php the_sub_field( 'line_three' ); ?></text>
                            </g>
                        </svg>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-1 col-md-12">
            <div>

            </div>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-10">
            <div align="left">
                <?php if ( have_rows( 'service_two' ) ) : ?>
                    <?php while ( have_rows( 'service_two' ) ) : the_row(); ?>
                        <svg class="services-blockTwo-svgHex hvr-grow" viewBox="0 0 424 344" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="#5190dd" d="m400.556,171.613l-94.467,-163.624l-188.934,0l-94.468,163.624l94.468,163.624l188.935,0l94.466,-163.624z"/>
                                <text class="services-blockTwo-hexText" y="137" x="212"><?php the_sub_field( 'line_one' ); ?></text>
                                <text class="services-blockTwo-hexText" y="184" x="212"><?php the_sub_field( 'line_two' ); ?></text>
                                <text class="services-blockTwo-hexText" y="232" x="212"><?php the_sub_field( 'line_three' ); ?></text>
                            </g>
                        </svg>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row services-blockTwo-rows justify-content-center">
        <div class="col-lg-4 col-md-7 col-sm-10">
            <div align="right">
                <?php if ( have_rows( 'service_three' ) ) : ?>
                    <?php while ( have_rows( 'service_three' ) ) : the_row(); ?>
                        <svg class="services-blockTwo-svgHex hvr-grow" viewBox="0 0 424 344" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="#3e7ecb" d="m400.556,171.613l-94.467,-163.624l-188.934,0l-94.468,163.624l94.468,163.624l188.935,0l94.466,-163.624z"/>
                                <text class="services-blockTwo-hexText" y="137" x="212"><?php the_sub_field( 'line_one' ); ?></text>
                                <text class="services-blockTwo-hexText" y="184" x="212"><?php the_sub_field( 'line_two' ); ?></text>
                                <text class="services-blockTwo-hexText" y="232" x="212"><?php the_sub_field( 'line_three' ); ?></text>
                            </g>
                        </svg>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div>
                <p class="services-blockTwo-middleText"><?php the_field( 'middle_text' ); ?></p>
            </div>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-10">
            <div align="left">
                <?php if ( have_rows( 'service_four' ) ) : ?>
                    <?php while ( have_rows( 'service_four' ) ) : the_row(); ?>
                        <svg class="services-blockTwo-svgHex hvr-grow" viewBox="0 0 424 344" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="#2d6bb5" d="m400.556,171.613l-94.467,-163.624l-188.934,0l-94.468,163.624l94.468,163.624l188.935,0l94.466,-163.624z"/>
                                <text class="services-blockTwo-hexText" y="137" x="212"><?php the_sub_field( 'line_one' ); ?></text>
                                <text class="services-blockTwo-hexText" y="184" x="212"><?php the_sub_field( 'line_two' ); ?></text>
                                <text class="services-blockTwo-hexText" y="232" x="212"><?php the_sub_field( 'line_three' ); ?></text>
                            </g>
                        </svg>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row services-blockTwo-rows justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-10">
            <div align="right">
                <?php if ( have_rows( 'service_five' ) ) : ?>
                    <?php while ( have_rows( 'service_five' ) ) : the_row(); ?>
                        <svg class="services-blockTwo-svgHex hvr-grow" viewBox="0 0 424 344" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="#1f589d" d="m400.556,171.613l-94.467,-163.624l-188.934,0l-94.468,163.624l94.468,163.624l188.935,0l94.466,-163.624z"/>
                                <text class="services-blockTwo-hexText" y="137" x="212"><?php the_sub_field( 'line_one' ); ?></text>
                                <text class="services-blockTwo-hexText" y="184" x="212"><?php the_sub_field( 'line_two' ); ?></text>
                                <text class="services-blockTwo-hexText" y="232" x="212"><?php the_sub_field( 'line_three' ); ?></text>
                            </g>
                        </svg>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-1 col-md-12">
            <div>

            </div>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-10">
            <div align="left">
                <?php if ( have_rows( 'service_six' ) ) : ?>
                    <?php while ( have_rows( 'service_six' ) ) : the_row(); ?>
                        <svg class="services-blockTwo-svgHex hvr-grow" viewBox="0 0 424 344" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="#13498b" d="m400.556,171.613l-94.467,-163.624l-188.934,0l-94.468,163.624l94.468,163.624l188.935,0l94.466,-163.624z"/>
                                <text class="services-blockTwo-hexText" y="137" x="212"><?php the_sub_field( 'line_one' ); ?></text>
                                <text class="services-blockTwo-hexText" y="184" x="212"><?php the_sub_field( 'line_two' ); ?></text>
                                <text class="services-blockTwo-hexText" y="232" x="212"><?php the_sub_field( 'line_three' ); ?></text>
                            </g>
                        </svg>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>