<?php get_header(); ?>

<main class="contenedor seccion">
    <ul class="listado-secciones">
        <li class="card"><?php include get_template_directory() . '/template-parts/seccion-1.php'; ?></li>
        <li class="card"><?php include get_template_directory() . '/template-parts/seccion-2.php'; ?></li>

        <li class="card"><?php
        // Esta seccion solo se incluye solo si el usuario está logueado
            if ( is_user_logged_in() ) {
                include get_template_directory() . '/template-parts/seccion-3.php';
            }
        ?></li>
</main>

<?php get_footer(); ?>