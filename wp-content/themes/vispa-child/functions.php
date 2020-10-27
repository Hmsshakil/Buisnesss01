<?php
/* include parent style */
function vispa_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'vispa_theme_enqueue_styles', 31 );


/* add here your custom function */
