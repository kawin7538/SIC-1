<?php
/*
Template Name: Index Page
*/
?>
<?php get_header(); ?>

<div id="content" class="content content-group content-index">
	<div class="pad append-clear wrap-inner-3">
		<div class="post-group">
			<?php get_template_part('loop','index'); ?>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>