<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-with, initial-scale=1">
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <div class="texto-logo"><?php echo get_bloginfo('name'); ?></div>
                <!--<img src="<?php //echo get_template_directory_uri() ; ?> /img/logo.svg" atl="logotivo de nuestra web" />-->
            </div>

            <!-- MENÚ PRINCIPAL -->
            <?php   //LLAMADA Y LOCALIZACIÓN DE NUESTRO MENÚ 
                $args = array (
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </header>