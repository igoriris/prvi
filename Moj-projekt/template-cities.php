<?php
/*
Template Name: Cities
*/ ?>
<?php get_header(); ?>
 
<div class="container">
		
		<div class="center">         
          <main id="main" class="site-main" role="main">
     <?php
     $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
     $args = array(
         'post_type' => 'post',
         'post_status' => 'publish',
         'category_name' => 'cities',
         'orderby'        => 'name',
          'order'          => 'ASC',
          'hide_empty'     => 1,
          'depth'          => 1,
         'posts_per_page' => '-1',
         'paged' => $paged,
     );
     $arr_posts = new WP_Query( $args );
  
     if ( $arr_posts->have_posts() ) :
  
         while ( $arr_posts->have_posts() ) :
             $arr_posts->the_post();
             ?>
             <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                 <?php
                 if ( has_post_thumbnail()) :?>
                 <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">;
                 <php endif;
                 ?>
                 <header class="entry-header">
                     <h1 class="entry-title"><?php the_title(); ?></h1>
                 </header>
                 <div class="entry-content">
                     <?php the_excerpt(); ?>
                     <a href="<?php the_permalink();?>" class="btn btn-success">Read more</a>
                 </div>
             </article>
             
              
              <?php
         endif;endwhile;
        
     endif;
     ?>

    
  
     </main><!-- .site-main -->
 </div><!-- .content-area -->
</div>
  
 <?php get_footer(); ?>