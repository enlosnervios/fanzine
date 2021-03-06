<?php
add_theme_support( 'custom-header' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

function register_main_menu()
{
      register_nav_menu( 'main-menu',__( 'Menu de cabecera' ) );
}
add_action( 'init', 'register_main_menu' );

function register_fanzines()
{
    $args = array(
        'public'     => true,
        'label'      => "Fanzines",
        'supports'   => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies' => array( 'post_tag' )
    );

    register_post_type( 'fanzine', $args );
}
add_action( 'init', 'register_fanzines' );

function register_books()
{
    $args = array(
        'public'     => true,
        'label'      => "Libros y Zines",
        'supports'   => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies' => array( 'category', 'post_tag' )
    );

    register_post_type( 'book', $args );
}
add_action( 'init', 'register_books' );


function register_albums()
{
    $args = array(
        'public'     => true,
        'label'      => "Discos",
        'supports'   => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
        'taxonomies' => array( 'category', 'post_tag' )
    );

    register_post_type( 'album', $args );
}
add_action( 'init', 'register_albums' );

function get_javascript_dependencies()
{
    wp_enqueue_script( 'jquery-masonry' );
}
//add_action( 'wp_enqueue_scripts', 'get_javascript_dependencies' );

function get_post_type_by_page_name()
{
    global $post;

    $post_type = '';

    switch ( $post->post_name )
    {
        case 'fanzine':
            $post_type = 'fanzine';
            break;
        case 'editorial':
            $post_type = 'book';
            break;
        case 'sello':
            $post_type = 'album';
            break;
        default:
            $post_type = $post->post_name;
            break;
    }

    return $post_type;
}

function body_id()
{
    $id = is_blog_subdomain() ? "blog" : "portal";

    echo "id=\"$id\"";
}

function is_blog_subdomain()
{
    $current_site = get_current_site();
    $blog_details = get_blog_details();
    $blog_url     = 'blog.' . $current_site->domain;

    return $blog_details->domain == $blog_url;
}

function get_banner_introduction()
{
    $about_page = new WP_Query( array( 'pagename' => 'acerca-de' ) );

    while( $about_page->have_posts() ) : $about_page->the_post();
        the_content( 'Conoce más sobre el proyecto »' );
    endwhile;
}

function get_blog_recent_post()
{
    if ( function_exists( 'switch_to_blog' ) )
    {
        $site = get_current_site();
        $blog_url = 'blog.' . $site->domain;

        switch_to_blog( get_blog_id_from_url( $blog_url ) );

        $blog_posts = new WP_Query( array( 'post_status' => 'publish', 'posts_per_page' => 1 ) );

        if ( $blog_posts->have_posts() ) :
            while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="col-md-4">
                    <h1><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h1>
                </div>

                <article class="col-md-8">
                    <?php the_content( 'Leer más »' ); ?>
                </article><?php
            endwhile;
        endif;

        restore_current_blog();
    }
}

function get_blog_post_aside()
{ ?>
    <aside>
        <ul class="list-inline">
            <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Publicado el <?php the_date(); ?></li>
            <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php the_category( ' ' ); ?></li>
        </ul>
    </aside>

<?php
}

function get_section_content( $post_type )
{
    $fanzines = new WP_Query( array(
        'post_type'      => $post_type,
        'posts_per_page' => is_home() ? 6 : -1,
        'post_status'    => 'publish'
    ) );
    $column_class = is_home() ? 'col-md-2' : 'col-md-3';

    if ( $fanzines->have_posts() ) :
        while ( $fanzines->have_posts() ) : $fanzines->the_post(); ?>

            <div class="<?php echo $column_class; ?>">
                <a href="<?php the_permalink(); ?>" class="thumbnail">
                    <?php the_post_thumbnail(); ?>
                    <div class="caption">
                        <p><strong><?php the_title(); ?></strong></p>
                        <?php get_authored_by(); ?>
                    </div>
                </a>
            </div>
        <?php endwhile;
    endif;
}

function get_authored_by()
{
    $post_tag    = get_the_tags();
    $authored_by = '';
    $last_author = end( $post_tag );

    foreach ( $post_tag as $key => $author )
    {
        $authored_by .= $author->name;

        if ( sizeof( $post_tag ) > 1 && $key != $last_author->term_id )
        {
            $authored_by .= ' / ';
        }
    }

    echo $authored_by;
}

function autop_the_content( $content )
{
    return wpautop( $content );
}
add_filter( 'the_content', 'autop_the_content');
