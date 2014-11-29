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
                    <h2>Fanzine En Los Nervios</h2>
                    <hr>
                    <?php get_section_content( 'fanzine' ); ?>
                </section>
            </div>
            <div class="row">
                <section class="col-md-12">
                    <h2>Libros y otros fanzines</h2>
                    <hr>
                    <?php get_section_content( 'book' ); ?>
                </section>
            </div>
            <div class="row">
                <section class="col-md-12">
                    <h2>Ediciones en vinilo, cassette y CD</h2>
                    <hr>
                    <?php get_section_content( 'album' ); ?>
                </section>
            </div>
        </div>
<?php get_footer(); ?>
