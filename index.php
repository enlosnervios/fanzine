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
                <div class="col-md-4">
                    <h2>En Los Nervios #6</h2>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-md-4">
                    <h2>Catálogo de álbumes</h2>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-md-4">
                    <h2>Catálogo de la editorial</h2>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
