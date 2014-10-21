<html lang="en">
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    </a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" height="80" width="80" alt="">
                    </a>
                </div>
            </div>
            <?php wp_nav_menu( array(
                'theme_location'    => 'main-menu',
                'container_class'   => 'navbar-collapse collapse',
                'menu_class'        => 'nav navbar-nav navbar-right'
            ) ); ?>
        </div>
    </nav>
    <div id="banner" class="jumbotron">
        <img src="<?php header_image(); ?>" alt="" />
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

        <div class="footer">
            <div class="container">
                <p class="text-muted">En Los Nervios &copy; 2014</p>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.min.js"></script>
  </body>
</html>
