<footer class="footer contenedor">
    <hr>
    <div class="contenedor contenido-footer footer">
        <?php   //LLAMADA Y LOCALIZACIÓN DE NUESTRO MENÚ FOOTER
            $args = array (
                'theme_location' => 'menu-footer',
                'container' => 'nav',
                'container_class' => 'menu-footer'
            );
            wp_nav_menu($args);
        ?>
        <p class="copyright text-center">Copyright © <?php echo date('Y') ?> <a href="https://github.com/NereaNSC"
                target="_blank"> Nerea Santos.</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>