<?php
/**
 * Block Name: About Block Two
 */
?>

<?php // number_of_services ( value )
$number_of_services_array = get_field( 'number_of_services' );
?>

<div class="container-fluid about-blockTwo-container">
    <div class="container">
        <div align="center">
            <?php if(get_field( 'heading' ) != ''){ ?>
                <h2 class="about-blockTwo-heading"><?php the_field( 'heading' ); ?></h2>
            <?php }
            if(get_field( 'subheading' ) != ''){ ?>
                <h3 class="about-blockTwo-subheading"><?php the_field( 'subheading' ); ?></h3>
            <?php } ?>
        </div>
        <div class="row justify-content-center display-flex">
            <?php if (in_array('service-one', $number_of_services_array)){ ?>
                <?php if ( have_rows( 'service_one' ) ) : ?>
                    <?php while ( have_rows( 'service_one' ) ) : the_row(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-12" align="center">
                            <div class="featured-fix z-depth-1-half about-blockTwo-indvidualContainers hvr-grow">
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                    <img class="about-blockTwo-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php } ?>
                                <h3 class="about-blockTwo-titles"><?php the_sub_field( 'heading' ); ?></h3>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php }
             if (in_array('service-two', $number_of_services_array)){ ?>
                 <?php if ( have_rows( 'service_two' ) ) : ?>
                     <?php while ( have_rows( 'service_two' ) ) : the_row(); ?>
                         <div class="col-lg-3 col-md-4 col-sm-12" align="center">
                             <div class="featured-fix z-depth-1-half about-blockTwo-indvidualContainers hvr-grow">
                                 <?php $image = get_sub_field( 'image' ); ?>
                                 <?php if ( $image ) { ?>
                                     <img class="about-blockTwo-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                 <?php } ?>
                                 <h3 class="about-blockTwo-titles"><?php the_sub_field( 'heading' ); ?></h3>
                             </div>
                         </div>
                     <?php endwhile; ?>
                 <?php endif; ?>
             <?php }
            if (in_array('service-three', $number_of_services_array)){ ?>
                <?php if ( have_rows( 'service_three' ) ) : ?>
                    <?php while ( have_rows( 'service_three' ) ) : the_row(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-12" align="center">
                            <div class="featured-fix z-depth-1-half about-blockTwo-indvidualContainers hvr-grow">
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                    <img class="about-blockTwo-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php } ?>
                                <h3 class="about-blockTwo-titles"><?php the_sub_field( 'heading' ); ?></h3>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php }
            if (in_array('service-four', $number_of_services_array)){ ?>
                <?php if ( have_rows( 'service_four' ) ) : ?>
                    <?php while ( have_rows( 'service_four' ) ) : the_row(); ?>
                        <div class="col-lg-3 col-md-4 col-sm-12" align="center">
                            <div class="featured-fix z-depth-1-half about-blockTwo-indvidualContainers hvr-grow">
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                    <img class="about-blockTwo-images" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php } ?>
                                <h3 class="about-blockTwo-titles"><?php the_sub_field( 'heading' ); ?></h3>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php } ?>
        </div>
    </div>
</div>