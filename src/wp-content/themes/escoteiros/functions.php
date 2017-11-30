<?php

function widgets_init() {
register_sidebar( array(
'name' => __( 'Scrisoft Sidebar', 'scrisoft' ),
'id' => 'sidebar-1',
'before_title' => '

',
'after_title' => '
',
));
}
add_action('widgets_init', 'widgets_init');

//Imagemm destacada
add_theme_support('post-thumbnails', array('post'));

add_theme_support('post-thumbnails', array('page'));

//pegar arquivo marca header
require get_template_directory() . '/inc/marca.php';
//Deu merda

require get_template_directory() . '/inc/metabox.php';

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'escoteiros' ),
) );



if ( function_exists('register_sidebar') )
{
    register_sidebar(array(
        'name' => __( 'Sidebar'),
        'id' => 'sidebar-internas',
        'description' => __( 'Breve descrição sobre esta SIDEBAR.'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}              

?>