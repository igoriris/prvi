<?php get_header();?>

<section class="page-wrap">
<div class="container">
<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
<body>

<div class="content">
  <!-- Page content -->
</div>

</body> 

<h1><?php the_title();?></h1>



            <?php if(has_post_thumbnail()):?>

<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">

<?php endif;?>

            <?php get_template_part( 'includes/section', 'content' );?>


          
            

</div>
</section>



<?php get_footer();?>