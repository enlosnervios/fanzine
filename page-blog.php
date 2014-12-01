<?php
/*
 * Template Name: Blog
 */
?>
<?php get_header(); ?>

    <div id="main">
        <div class="container">
            <div class="row">
            <?php
            $blog_posts = new WP_Query( array( 'post_status' => 'publish', 'paged' => $paged ) );

            if ( $blog_posts->have_posts() ) :

              while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                  <article class="col-md-8 col-md-offset-2">
                      <h1><?php the_title(); ?></h1>
                      <?php the_content( 'Seguir leyendo »' ); ?>
                  </article><?php
              endwhile;
            endif; ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>

