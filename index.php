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
                <section class="col-md-12">
                    <h2>Fanzine En Los Nervios <small><a href="<?php echo get_permalink( get_page_by_path( 'fanzine' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <hr>
                    <?php get_section_content( 'fanzine' ); ?>
                </section>
            </div>
            <div class="row">
                <section class="col-md-12">
                    <h2>Libros y otros fanzines <small><a href="<?php echo get_permalink( get_page_by_path( 'editorial' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <hr>
                    <?php get_section_content( 'book' ); ?>
                </section>
            </div>
            <div class="row">
                <section class="col-md-12">
                    <h2>Ediciones en vinilo, cassette y CD <small><a href="<?php echo get_permalink( get_page_by_path( 'sello' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <hr>
                    <?php get_section_content( 'album' ); ?>
                </section>
            </div>
        </div>
<?php get_footer(); ?>
