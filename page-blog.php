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
                      <h1><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h1>

                      <?php get_blog_post_aside(); ?>

                      <?php global $more; $more = 0; the_content( 'Seguir leyendo »' ); ?>
                  </article><?php
              endwhile;
            endif; ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>

