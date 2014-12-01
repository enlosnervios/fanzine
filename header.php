<html <?php language_attributes(); ?>>
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_current_site()->site_name; ?> <?php wp_title( '|', true, 'left' ); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body <?php body_id(); ?> <?php body_class(); ?>>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="<?php echo home_url(); ?>">
                        <img class="pull-left img-rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-square.jpg" height="40" width="40" alt="...">
                        <h1 class="pull-left">
                        <?php
                        echo get_current_site()->site_name;

                        if ( is_blog_subdomain() ) : ?>
                            <small>Blog</small><?php
                        endif; ?>
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

