<?php

function styles()
{
    wp_enqueue_style('main.css', get_stylesheet_uri('./css/main.css'));
}

add_action('wp_enqueue_styles', 'styles')

?>