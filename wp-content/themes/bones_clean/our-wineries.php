<?php
/*
Template Name: Our Wineries Template
*/
?>

<?php get_header(); ?>

	<div class='content_wrap'>
 		<?php 	get_template_part('/general_partials/site_header_logo'); ?>

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

<div class='clearfix'>
<?php query_posts("orderby=rand&post_type=wineries"); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<a href='<?php echo the_field('winery_link'); ?>' target="_blank">
			<div class=''>
				<div class='grid_item' style="background-image: url('<?php echo the_field('winery_image'); ?>'); background-size:cover; background-position: center center;">
					<div class="relative_container grid_item_colour_cover">
						<div class="perfect_centered_layout">
							<div class="control_box">
								<div class='grid_title'><?php the_title(); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
	<?php endwhile; endif; ?>
<?php wp_reset_query(); // reset the query ?>
</div>

<?php get_footer(); ?>
