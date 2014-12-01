<?php get_header(); ?>

    <div id="banner" class="jumbotron">
        <img src="<?php header_image(); ?>" alt="Portada" />
        <aside>
            <?php get_banner_introduction(); ?>
        </aside>
    </div>

    <div id="main">
        <div class="container">
            <div class="row">
                <section class="col-md-12 recent-posts">
                    <h3>Última entrada del <strong>Blog</strong></h3>
                    <?php get_blog_recent_post(); ?>
                </section>
            </div>
            <div class="row row-fanzines">
                <section class="col-md-12">
                    <h2>Fanzine En Los Nervios <small class="btn btn-default"><a href="<?php echo get_permalink( get_page_by_path( 'fanzine' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <?php get_section_content( 'fanzine' ); ?>
                </section>
            </div>
            <div class="row">
                <section class="col-md-12">
                    <h2>Libros y otros fanzines <small class="btn btn-default"><a href="<?php echo get_permalink( get_page_by_path( 'editorial' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <?php get_section_content( 'book' ); ?>
                </section>
            </div>
            <div class="row">
                <section class="col-md-12">
                    <h2>Ediciones en vinilo, cassette y CD <small class="btn btn-default"><a href="<?php echo get_permalink( get_page_by_path( 'sello' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <?php get_section_content( 'album' ); ?>
                </section>
            </div>
        </div>
<?php get_footer(); ?>
