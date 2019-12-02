<?php

/* Template Name: Services Page */

get_header();


while ( have_posts() ) : the_post(); ?>
    <div class="entry-content-page">
        <?php the_content(); ?>
    </div>

<?php
endwhile;



get_footer(); ?>