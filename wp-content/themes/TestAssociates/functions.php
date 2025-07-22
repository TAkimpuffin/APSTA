<?php

ini_set( 'upload_max_size' , '256M' );
ini_set( 'post_max_size', '256M');
ini_set( 'max_execution_time', '300' );
ini_set( 'mysql.trace_mode', 0 );

add_theme_support( 'menus' );
register_nav_menus( array(
    'primary'   => 'Display this menu in header',
    'footerleft'   => 'The left side footer menu',
    'footerright'   => 'The right site footer menu',
) );


?>