<?php get_header(); ?>

    <div id="main">
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) :

              while ( have_posts() ) : the_post(); ?>
                <?php if ( get_post_type( get_the_ID() ) != 'post' ) : ?>
                  <article class="col-md-10">
                    <div class="col-md-5 thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <h1><?php the_title(); ?></h1>
                        <h2><?php get_authored_by(); ?></h2>
                        <hr>

                        <section id="details">
                          <?php the_content(); ?>
                        </section>
                    </div>
                  </article>
                <?php else : ?>
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
                <?php endif; ?>
              <?php endwhile;
            endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
