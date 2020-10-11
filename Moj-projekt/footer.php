<footer>

    <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.jpg" alt="contact" class="header-image" style="width:70px;height:60px";>
    <span></span>
      <?php

            wp_nav_menu(
                array(   
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-bar'
                )
            ); ?>
            <span></span>
            <a href="http://localhost/wordpress/about-us/">Made by: Igor Iris</a>
             

    </div>
</footer>

<?php wp_footer();?>
</body>
</html>