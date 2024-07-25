<?php
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu_first' => __( 'First Footer Menu' ),
        'footer-menu_second' => __( 'Second Footer Menu' ),
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
