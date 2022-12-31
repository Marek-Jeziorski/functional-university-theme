<?php get_header();?>
<h4>page.php</h4>

<?php
    // THE LOOP
    while (have_posts()) {
    the_post();?>

<h2> <?php the_title();?> </h2>
<?php the_content();
        // END THE LOOP

    get_footer();
}?>