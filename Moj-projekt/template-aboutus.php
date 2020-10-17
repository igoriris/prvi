<?php
/*
Template Name: About us
*/ ?>
<?php get_header();?>
<div class="container">
<div class="center">
<?php the_content();?>

<p><?php the_field('first_name'); ?></p>
<p><?php the_field('last_name'); ?></p>
<?php $image = wp_get_attachment_image_src(get_field('image'), 'blog-large'); ?>
<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image')) ?>" />

</div>
</div>

<?php get_footer();?>