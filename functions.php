<?php

// FUNCIÓN PARA AÑADIR MENÚS A NUESTRA WEB
    function prueba_asdrubal_nerea_santos_menus() {
        register_nav_menus(array(
            'menu-principal' => __('Menú Principal', 'prueba_asdrubal_nerea_santos'),
            'menu-footer' => __('Menú Footer', 'prueba_asdrubal_nerea_santos')
        ));
    }
    add_action('init', 'prueba_asdrubal_nerea_santos_menus');


// FUNCIÓN PARA AGREGAR NUESTRA HOJA DE ESTILOS Y SCRIPTS
    function prueba_asdrubal_nerea_santos_scripts_styles() {
        wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
        
        wp_enqueue_script('script-del-tema', get_template_directory_uri() . '/assets/js/script.js', array(), true);
    }

    add_action('wp_enqueue_scripts', 'prueba_asdrubal_nerea_santos_scripts_styles');
        

// FUNCIÓN PARA AÑADIR IMAGENES DESTACADAS + TITULOS SEO EN NUESTRAS PÁGINAS
    function prueba_asdrubal_nerea_santos_setup() {
        // IMAGENES DESTACADAS
        add_theme_support('post-thumbnails');
        // TITULOS PARA SEO
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'prueba_asdrubal_nerea_santos_setup');
?>