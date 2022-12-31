<?php get_header();?>

<h4>index.php</h4>
<?php

    // THE LOOP
    while (have_posts()) {
    the_post();?>

<h2><a href="<?php the_permalink()?>"><?php the_title();?> </a></h2>
<?php the_content();?>
<hr>
<?php }
    // END THE LOOP

get_footer();
?>