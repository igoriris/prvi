<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <?php wp_head();?>
       
</head>
<body>
    
<header>


    <div class="container">
    <?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?><img src="<?php echo $image[0]; ?>" alt="">
    <span>               </span>
        <?php
            wp_nav_menu(
                array(   
                
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar',

                )
            ); ?>
            <span>  </span>
            <?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?><img src="<?php echo $image[0]; ?>" alt="">
    </div>
</header>

