<?php

// Esta es la función que activa las imágenes destacadas
add_theme_support( 'post-thumbnails' );


// Esta es la función que nos añade un tamaño extra de imagen
add_image_size('custom', 400, 400);

// Esto e sla función que llama al menú
function register_my_menus() {
    register_nav_menus(
            array(
                'menu-header' => __('Menú del encabezado'),
                'menu-footer' => __('Menú del footer')
                )
        );
}
add_action('init', 'register_my_menus');


// Esta es la función que añade un SIDEBAR

function miplugin_register_sidebar() {
    register_sidebar(
        array (
            'id' => 'sidebar-footer',
            'name' => 'Sidebar del Footer',
            'description' => 'Sidebar donde colocar links del footer',
            'before_widget' => '<div class="sidebar__item">',
            'after_widget' => '</div>',
            'before_title' => '<strong>',
            'after_title' => '</strong>'
            )
        );
}
add_action('widgets_init', 'miplugin_register_sidebar');


function miplugin_register_sidebar2() {
    register_sidebar(
        array (
            'id' => 'sidebar-header',
            'name' => 'Sidebar del header',
            'description' => 'OTRO SIDEBAR',
            'before_widget' => '<div class="sidebar__item">',
            'after_widget' => '</div>',
            'before_title' => '<strong>',
            'after_title' => '</strong>'
            )
        );
}
add_action('widgets_init', 'miplugin_register_sidebar2');


add_filter( 'rwmb_meta_boxes', 'platzi_register_meta_boxes' );

function platzi_register_meta_boxes( $meta_boxes )
{
    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'personal',
        'title'    => 'Personal Information',
        'pages'    => array( 'post', 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Full name',
                'desc'  => 'Format: First Last',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true,
            ),
            array(
                'name'  => 'Description',
                'desc'  => 'Introduce la descripción',
                'id'    => $prefix . 'fdescription',
                'type'  => 'textarea',
                'std'   => 'Descripción',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );

    // 2nd meta box
    $meta_boxes[] = array(
        'title'    => 'Media',
        'pages'    => array( 'movie', 'slider' ),
        'fields' => array(
            array(
                'name' => 'URL',
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );

    return $meta_boxes;
}