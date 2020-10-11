<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div class="container">
<?php the_content() ; ?>

<?php 
$ime = get_the_author_meta('first_name');
$prezime = get_the_author_meta('last_name');
?>
Author <?php echo $ime . ' ' . $prezime . ' ' . get_the_date('d//m/Y') ?>

<?php
	$tags = get_the_tags();
	if($tags):
	foreach($tags as $tag):?>

			<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-warning">
				<?php echo $tag->name;?>
			</a>

	<?php endforeach; endif;?>


</div>

<?php endwhile; else : endif; ?>