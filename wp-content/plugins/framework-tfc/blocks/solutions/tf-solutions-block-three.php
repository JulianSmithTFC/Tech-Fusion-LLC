<?php
/**
 * Block Name: Solutions Block Three
 */
?>

<div class="container-fluid soulutions-blockThree-container">
    <div class="container" align="center">
        <h2 class="soulutions-blockThree-heading"><?php the_field( 'heading' ); ?></h2>
        <div class="solutionsBlockThree-sliderRegular d-none d-md-block">
            <?php
            $args = array(
                'post_type'   => 'past_clients',
                'post_status' => 'publish',
                'orderby' => 'id',
                'order' => 'ASC',

            );

            $pastClients = new WP_Query( $args );
            if( $pastClients->have_posts() ){
                while( $pastClients->have_posts() ) : $pastClients->the_post();

                    //$pastClients = get_the_title();

                    ?>
                    <div class="soulutions-blockThree-sideContainer" >
                        <?php $client_logo = get_field( 'client_logo', get_the_ID()); ?>
                        <?php if ( $client_logo ) { ?>
                            <img class="soulutions-blockThree-logos" src="<?php echo $client_logo['url']; ?>" height="100px" alt="<?php echo $client_logo['alt']; ?>" />
                            <?php
                        }
                        ?>
                    </div>
                <?php
                endwhile;
            }
            wp_reset_query();
            wp_reset_postdata();
            ?>
        </div>
        <div class="solutionsBlockThree-sliderMobile d-block d-md-none">
            <?php
            $args = array(
                'post_type'   => 'past_clients',
                'post_status' => 'publish',
                'orderby' => 'id',
                'order' => 'ASC',

            );

            $pastClients = new WP_Query( $args );
            if( $pastClients->have_posts() ){
                while( $pastClients->have_posts() ) : $pastClients->the_post();

                    //$pastClients = get_the_title();

                    ?>
                    <div class="soulutions-blockThree-sideContainer" >
                        <?php $client_logo = get_field( 'client_logo', get_the_ID()); ?>
                        <?php if ( $client_logo ) { ?>
                            <img class="soulutions-blockThree-logos" src="<?php echo $client_logo['url']; ?>" height="100px" alt="<?php echo $client_logo['alt']; ?>" />
                            <?php
                        }
                        ?>
                    </div>
                <?php
                endwhile;
            }
            wp_reset_query();
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

