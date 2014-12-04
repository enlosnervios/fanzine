<?php get_header(); ?>

    <div id="banner" class="jumbotron">
        <img class="banner-component col-md-6" src="<?php header_image(); ?>" alt="Portada" />
        <aside class="banner-component col-md-5 col-md-offset-1">
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
                    <h2>Ediciones en vinilo, cassette y CD <small class="btn btn-default"><a href="<?php echo get_permalink( get_page_by_path( 'sello' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <?php get_section_content( 'album' ); ?>
                </section>
            </div>
            <div class="row">
                <section class="col-md-12">
                    <h2>Libros y otros fanzines <small class="btn btn-default"><a href="<?php echo get_permalink( get_page_by_path( 'editorial' )->ID ); ?>">Ver catálogo completo</a></small></h2>
                    <?php get_section_content( 'book' ); ?>
                </section>
            </div>
        </div>

        <section id="extras" class="col-md-12">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="info-column col-md-3">
                        <h3>Contacto</h3>
                        <address>
                            <strong>Correo electrónico</strong><br>
                            fanzine@enlosnervios.org
                            <br><br>
                        </address>
                    </div>
                    <div class="info-column col-md-5">
                        <h3>Sellos amigos</h3>
                    </div>
                    <div class="info-column col-md-4">
                        <h3>Copyleft</h3>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>
