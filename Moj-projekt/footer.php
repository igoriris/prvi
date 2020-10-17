
<footer>

    <div class="container">
    <?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?><img src="<?php echo $image[0]; ?>" alt="">
    <span></span>
      <?php

            wp_nav_menu(
                array(   
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-bar'
                )
            ); ?>
            <span></span>
            <?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?><img src="<?php echo $image[0]; ?>" alt="">
             

    </div>
</footer>

<?php wp_footer();?>
</body>
</html>