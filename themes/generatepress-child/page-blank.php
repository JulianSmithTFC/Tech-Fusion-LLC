<?php

/* Template Name: Blank Page */

get_header('blank');

while ( have_posts() ) : the_post(); ?>
    <div class="entry-content-page">
        <?php the_content(); ?>
    </div>

<?php
endwhile;

get_footer('blank'); ?>