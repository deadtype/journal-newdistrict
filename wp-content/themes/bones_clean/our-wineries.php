<?php
/*
Template Name: Our Wineries Template
*/
?>

<?php get_header(); ?>

 	<?php 	get_template_part('/general_partials/site_header_logo'); ?>
	<div class='content_wrap'>

		<div class="text">
					<?php query_posts("p=150"); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			<?php wp_reset_query(); // reset the query ?>
		</div>
	</div>

<div class='content_wrap'>
	<?php bones_main_nav(); ?>
</div>

<div class='wineries_wrap clearfix'>
	<?php query_posts("orderby=rand&post_type=wineries"); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class='grid_item_container'>
					<a href='<?php echo the_field('winery_link'); ?>' target="_blank">

					<div class='grid_item' style="background-image: url('<?php echo the_field('winery_image'); ?>'); background-size:cover; background-position: center center;">
						<div class="relative_container grid_item_colour_cover">
						</div>
					</div>
					</a>

					<div class='grid_title'><a href='<?php echo the_field('winery_link'); ?>' target="_blank"><?php the_title(); ?></a></div>
					<div class='grid_about'><a href='<?php echo the_field('winery_link'); ?>' target="_blank"><?php the_field('winery_about'); ?></a></div>

				</section>
		<?php endwhile; endif; ?>
	<?php wp_reset_query(); // reset the query ?>
</div>

<?php get_footer(); ?>
