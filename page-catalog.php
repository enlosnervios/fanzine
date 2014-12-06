<?php
/*
 * Template Name: Catalog
 */
?>
<?php get_header(); ?>

    <div id="main">
        <div class="container">
            <div class="row">
              <article class="col-md-12 clearfix">
                <?php
                if ( have_posts() ) :
                  while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>

                    <?php
                    the_content();
                  endwhile;
                endif;
                ?>

                <?php get_section_content( get_post_type_by_page_name() ); ?>
              </article>
            </div>
        </div>
    </div>


<?php get_footer(); ?>

