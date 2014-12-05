<?php get_header(); ?>

    <div id="main">
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) :

              while ( have_posts() ) : the_post(); ?>
                  <article class="col-md-8 col-md-offset-2">
                      <h1><?php the_title(); ?></h1>

                      <?php get_blog_post_aside(); ?>

                      <?php the_content(); ?>

                      <section id="comments">
                        <?php
                          if ( comments_open() || get_comments_number() ) {
                            comments_template();
                          }
                        ?>
                      </section>
                  </article>
              <?php endwhile;
            endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
