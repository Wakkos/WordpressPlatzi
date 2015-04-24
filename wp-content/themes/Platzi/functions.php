<?php

// Esta es la función que activa las imágenes destacadas
add_theme_support('post-thumbnails');


//Esta es la función que añade un tamaño extra de imagen
add_image_size('my-size', 200, 180, true);

//Esta es la función que llama al menú

function register_my_menus() {
    register_nav_menus(
        array(
            'menu-header' => __('Menú del encabezado'),
            'menu-footer' => __('Menú del footer'),
            'menu-aside' => __('Menú de la barra lateral')
        )
    );
}
add_action('init', 'register_my_menus');

// Activación de Sidbars


function miplugin_register_sidebar() {
    register_sidebar (
        array(
            'id'    => 'footer-sidebar',
            'name'  => 'Espacio después del footer',
            'description' => 'Aquí van los links después del header',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
            )

        );
}
add_action('init', 'miplugin_register_sidebar');

function miplugin_register_sidebar_header() {
    register_sidebar (
        array(
            'id'    => 'header-sidebar',
            'name'  => 'Espacio después del header',
            'description' => 'Aquí van los links después del header',
            'before_widget' => '<div class="widget__header">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6>',
            'after_title'   => '</h6>'
            )

        );
}
add_action('init', 'miplugin_register_sidebar_header');


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
                'name'  => 'Nombre',
                'desc'  => 'Escribe tu nombre',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'std'   => 'Nombre',
                'class' => 'custom-class',
                'clone' => true,
            ),
            array(
                'name'  => 'Descripcion',
                'desc'  => 'Describe el producto',
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