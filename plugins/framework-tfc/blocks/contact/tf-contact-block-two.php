<?php
/**
 * Block Name: Contact Block Two
 */
?>

<div class="container-fluid contact-blockTwo-container">
    <div class="container" align="center">
        <?php if (get_field( 'heading') != '' ){ ?>
            <h2 class="contact-blockTwo-heading"><?php the_field( 'heading' ); ?></h2>
        <?php } ?>
        <?php if (get_field( 'subheading') != '' ){ ?>
            <h3 class="contact-blockTwo-subheading"><?php the_field( 'subheading' ); ?></h3>
        <?php } ?>
        <?php if (get_field( 'email_address') != '' ){ ?>
            <h4 class="contact-blockTwo"><strong>Email: </strong><?php the_field( 'email_address' ); ?></h4>
        <?php } ?>
        <?php if (get_field( 'phone_number_one') != '' ){ ?>
            <h4 class="contact-blockTwo"><strong>Illinois: </strong><?php the_field( 'phone_number_one' ); ?></h4>
        <?php } ?>
        <?php if (get_field( 'phone_number_two') != '' ){ ?>
            <h4 class="contact-blockTwo"><strong>Missouri: </strong><?php the_field( 'phone_number_two' ); ?></h4>
        <?php } ?>
        <?php if (get_field( 'business_address') != '' ){ ?>
            <h4 class="contact-blockTwo"><strong>Location: </strong><?php the_field( 'business_address' ); ?></h4>
        <?php } ?>
    </div>
</div>
