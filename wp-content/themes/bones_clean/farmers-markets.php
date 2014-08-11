<?php
/*
Template Name: Farmers Markets Template
*/
?>

<?php get_header(); ?>

 	<?php 	get_template_part('/general_partials/site_header_logo'); ?>
	
	<section class="entry-content farmers_markets_content clearfix">
			<div class='article_content_wrap'>
				<?php the_content(); ?>
			</div>
	</section>
	
<?php get_footer(); ?>
