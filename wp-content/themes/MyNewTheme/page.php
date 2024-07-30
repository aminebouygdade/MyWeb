<?php
get_header();
while(have_posts()){
    the_post(); ?>
    <h1> THIS IS THE PAGE</h1>
    <h2><?php the_title();?></a></h2>
    <?php the_content(); ?>
    <!-- <hr> -->
    <?php
    }
    get_footer();

?>