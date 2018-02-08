<?php
# Connect to our main-stylesheet in the Theme-root-folder 
function wordpress_ressource(){
    wp_enqueue_style('main-style', get_template_directory_uri().'/style.css' );
}

# The script(s) will be loaded onto your WordPress website
add_action('wp_enqueue_scripts', wordpress_ressource);
?>