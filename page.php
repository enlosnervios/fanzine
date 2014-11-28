<?php get_header(); ?>

    <div id="main">
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) :

              while ( have_posts() ) : the_post(); ?>
                  <article class="col-md-10">
                      <?php the_content(); ?>
                  </article>
              <?php endwhile;

            endif; ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
