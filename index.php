<?php get_header(); ?>

    <div id="banner" class="jumbotron">
        <img class="banner-component col-md-7" src="<?php header_image(); ?>" alt="Portada" />
        <aside class="banner-component col-md-4">
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
                    <h2>Fanzine <strong>En Los Nervios</strong> <small class="btn btn-default"><a href="<?php echo get_permalink( get_page_by_path( 'fanzine' )->ID ); ?>">Ver catálogo completo</a></small></h2>
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
                            <p>Otras direcciones de correo están disponibles en la página de Contacto.</p>
                        </address>
                    </div>
                    <div class="info-column col-md-5">
                        <h3>Proyectos amigos</h3>
                    </div>
                    <div class="legal info-column col-md-4">
                        <p>Algunos derechos reservados 2014.
                        <p>Todos los textos de enlosnervios.org son publicados bajo los términos de la licencia
                        <strong>Creative Commons CC-Atribución 4.0 Internacional</strong>.</p>
                        <p><i class="openwebicons-cc"></i> <i class="openwebicons-cc-by"></i> </p>
                        <ul class="list-inline">
                            <li><a href="http://github.com/enlosnervios/fanzine">Código fuente de este sitio</a></li>
                            <li><a href="#">Paquete de difusión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>
