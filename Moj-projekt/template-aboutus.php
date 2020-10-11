<?php
/*
Template Name: About us
*/ ?>
<?php get_header();?>


<section class="page-wrap">
<div class="container">


<div class="about-section">
  <h1>About Us</h1>
  <p>I am doing this website as my job application</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="container">
  
    
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/igor.jpg" alt="igor" class="center" style="width:400px;height:500px">
      <div class="container">
          <div class="card">
        <h2>Igor Iris</h2>
        <p class="title">Wordpress developer</p>
        <p> Želio bih jako puno naučiti od vas, te da usavršim svoje znanje vezano za programiranje.
            Zato bih molio da mi date priliku, jer sam uvjeren da ću opravdati vaše povjerenje.
        </p>
        <p><a href="http://localhost/wordpress/contact-us/">Contact us </a></p>
        <p>You can follow us on:
             <a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/assets//img/facebook.png" alt="facebook" class="center" style="width:50px;height:50px"> </a><span></span>
        <a href="https://www.instagram.com"><img src="<?php echo get_template_directory_uri(); ?>/assets//img/instagram.png" alt="instagram" class="center" style="width:50px;height:50px"> </a>
        <span></span><a href="https://www.twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/assets//img/twitter.png" alt="twitter" class="center" style="width:50px;height:50px"> </a>
          </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer();?>