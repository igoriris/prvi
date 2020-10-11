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
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.jpg" alt="contact" class="header-image" style="width:70px;height:60px";>
    <span>               </span>
        <?php
            wp_nav_menu(
                array(   
                
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-bar',

                )
            ); ?>
            <span>  </span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.jpg" alt="contact" class="header-image" style="width:70px;height:60px";>
    </div>
</header>