<?php

function blog_assets(){
    wp_enqueue_style('blog-style', get_template_directory_uri() . "./style/style.css", microtime());
    wp_enqueue_style('blog-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", 1.0);
    wp_enqueue_script('blog-script', get_template_directory_uri() . "./script/script.js", microtime(), [], true);
}

add_action('wp_enqueue_scripts', 'blog_assets');