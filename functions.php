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
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies' => array( 'post_tag' )
    );

    register_post_type( 'fanzine', $args );
}
add_action( 'init', 'register_fanzines' );

function register_books() {
    $args = array(
        'public' => true,
        'label'  => "Libros y Zines",
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies' => array( 'category', 'post_tag' )
    );

    register_post_type( 'book', $args );
}
add_action( 'init', 'register_books' );


function register_albums() {
    $args = array(
        'public' => true,
        'label'  => "Discos",
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies' => array( 'category', 'post_tag' )
    );

    register_post_type( 'album', $args );
}
add_action( 'init', 'register_albums' );

function body_id() {
    $id = is_blog_subdomain() ? "blog" : "portal";

    echo "id=\"$id\"";
}

function is_blog_subdomain() {
    $current_site = get_current_site();
    $blog_details = get_blog_details();
    $blog_url     = 'blog.' . $current_site->domain;

    return $blog_details->domain == $blog_url;
}

function get_banner_introduction() {
    $about_page = new WP_Query( array( 'pagename' => 'acerca-de' ) );

    while( $about_page->have_posts() ) : $about_page->the_post();
        the_content( 'Conoce más sobre el proyecto »' );
    endwhile;
}

function get_blog_recent_post() {
    if ( function_exists( 'switch_to_blog' ) ) {
        $site = get_current_site();
        $blog_url = 'blog.' . $site->domain;

        switch_to_blog( get_blog_id_from_url( $blog_url ) );

        $blog_posts = new WP_Query( array( 'post_status' => 'publish', 'posts_per_page' => 1 ) );

        if ( $blog_posts->have_posts() ) :
            while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="col-md-4">
                    <h1><?php the_title(); ?></h1>
                </div>

                <article class="col-md-8">
                    <?php the_content( 'Leer más' ); ?>
                </article><?php
            endwhile;
        endif;

        restore_current_blog();
    }
}

function get_section_content( $post_type ) {
    $fanzines = new WP_Query( array( 'post_type' => $post_type, 'posts_per_page' => 6 ) );

    if ( $fanzines->have_posts() ) :
        while ( $fanzines->have_posts() ) : $fanzines->the_post();
            $post_tag = get_the_tags(); ?>

            <div class="col-xs-5 col-md-2">
                <a href="<?php the_permalink(); ?>" class="thumbnail">
                    <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
                    <div class="caption">
                        <p><strong><?php the_title(); ?></strong></p>
                        <?php
                            if ( $post_tag ) : ?>
                                <p><?php
                                foreach ( $post_tag as $tag ) :
                                    echo $tag->name;
                                endforeach; ?>
                                </p><?php
                            endif;
                        ?>
                    </div>
                </a>
            </div>
        <?php endwhile;
    endif;
}

function autop_the_content( $content ) {
    return wpautop( $content );
}
add_filter( 'the_content', 'autop_the_content');
