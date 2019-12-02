<?php
/**
 * Block Name: Review Block Five
 */
?>
<div class="container-fluid review-background review-blockFive-containerMain">
    <div class="container review-blockFive-container">
        <h2 class="review-blockFive-heading"><?php the_field( 'heading' ); ?></h2>
        <div class="review-blockFive-bodyText">
            <?php the_field( 'body_text' ); ?>
        </div>
        <h3 class="review-blockFive-subheading"><?php the_field( 'subheading' ); ?></h3>
        <br/>
        <ul class="fa-ul">
            <?php if ( have_rows( 'list' ) ) : ?>
                <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                    <li class="review-blockFive-listText"><span class="fa-li review-blockFive-icons"><i class="fas  fa-star"></i></span> <?php the_sub_field( 'list_text' ); ?></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>