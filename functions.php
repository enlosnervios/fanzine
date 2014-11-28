<?php
add_theme_support( 'custom-header' );


function register_main_menu() {
      register_nav_menu('main-menu',__( 'Menu de cabecera' ));
}
add_action( 'init', 'register_main_menu' );

function get_banner_introduction() {
    $about_page = new WP_Query( array( 'pagename' => 'acerca-de' ) );

    while( $about_page->have_posts() ) : $about_page->the_post();
        the_content( 'Conoce más sobre el proyecto »' );
    endwhile;
}

function autop_the_content( $content ) {
    return wpautop( $content );
}
add_filter( 'the_content', 'autop_the_content');
