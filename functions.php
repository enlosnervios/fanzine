<?php
function register_main_menu() {
      register_nav_menu('main-menu',__( 'Menu de cabecera' ));
}
add_action( 'init', 'register_main_menu' );

add_theme_support( 'custom-header' );
