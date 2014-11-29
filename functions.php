<?php
add_theme_support( 'custom-header' );

add_theme_support( 'post-thumbnails' );


function register_main_menu() {
      register_nav_menu('main-menu',__( 'Menu de cabecera' ));
}
add_action( 'init', 'register_main_menu' );

function register_fanzines() {
    $args = array(
        'public' => true,
        'label'  => "Fanzines",
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' )
    );

    register_post_type( 'fanzine', $args );
}
add_action( 'init', 'register_fanzines' );

function register_books() {
    $args = array(
        'public' => true,
        'label'  => "Libros y Zines",
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' )
    );

    register_post_type( 'book', $args );
}
add_action( 'init', 'register_books' );


function register_albums() {
    $args = array(
        'public' => true,
        'label'  => "Discos",
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' )
    );

    register_post_type( 'album', $args );
}
add_action( 'init', 'register_albums' );

function get_banner_introduction() {
    $about_page = new WP_Query( array( 'pagename' => 'acerca-de' ) );

    while( $about_page->have_posts() ) : $about_page->the_post();
        the_content( 'Conoce más sobre el proyecto »' );
    endwhile;
}

function get_section_content( $post_type ) {
    $fanzines = new WP_Query( array( 'post_type' => $post_type ) );

    if ( $fanzines->have_posts() ) :
        while ( $fanzines->have_posts() ) : $fanzines->the_post(); ?>
            <div class="col-xs-5 col-md-2">
                <a href="<?php the_permalink(); ?>" class="thumbnail">
                    <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                </a>
            </div>
        <?php endwhile;
    endif;
}

function autop_the_content( $content ) {
    return wpautop( $content );
}
add_filter( 'the_content', 'autop_the_content');
