<?php
/**
 * Block Name: Review Block Ten
 */
?>
<div class="container-fluid review-blockTen-container">
    <div class="container">
        <h3 class="review-blockTen-heading"><?php the_field( 'heading' ); ?></h3>
        <?php
        $number = 0;
        ?>
        <?php if ( have_rows( 'block' ) ) : ?>
            <?php while ( have_rows( 'block' ) ) : the_row(); ?>
                <?php
                if($number % 2 == 0){
                    ?>
                    <div class="row review-blockTen-containers">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div align="left">
                                <h4 class="review-blockTen-headings"><?php the_sub_field( 'heading' ); ?></h4>
                                <div class="review-blockTen-bodyTexts">
                                    <?php the_sub_field( 'body_text' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                    <img src="<?php echo $image['url']; ?>" class="review-blockTen-images" alt="<?php echo $image['alt']; ?>" />
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                else{
                    ?>
                    <div class="row review-blockTen-containers">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div>
                                <?php $image = get_sub_field( 'image' ); ?>
                                <?php if ( $image ) { ?>
                                    <img src="<?php echo $image['url']; ?>" class="review-blockTen-images" alt="<?php echo $image['alt']; ?>" />
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div align="left">
                                <h4 class="review-blockTen-headings"><?php the_sub_field( 'heading' ); ?></h4>
                                <div class="review-blockTen-bodyTexts">
                                    <?php the_sub_field( 'body_text' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                $number++;
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
