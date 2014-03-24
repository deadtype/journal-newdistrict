<?php get_header(); ?>

<div class='maincontainer'>
	<div class='content_wrap'>
		<div class='logo'>
			<img src='<?php echo get_template_directory_uri(); ?>/library/images/new_dist_logo_knockout.png'>
		</div>
		<div class="text">
			<?php query_posts("p=4"); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			<?php wp_reset_query(); // reset the query ?>
		</div>
	</div>
</div>

<?php query_posts("post_count=1&post_type=editorial_articles"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

		<div class="full clearfix" style="background-image: url('<?php echo the_field('featured_image'); ?>'); background-size:cover; background-position:<?php echo the_field('featured_image_vertical_position'); ?> <?php echo the_field('featured_image_horizontal_position'); ?>;">

		<?php
		$value = get_field( "featured_image_text_position" );
		?>

			<div class='relative_container' <?php if( get_field('featured_image_background_colour') ): ?>style='<?php echo the_field('featured_image_background_colour'); ?>'<?php endif; ?>>


				<div class='
				<?php
				if ( $value == 'center_aligned' )
				{
					echo "centered_layout";
				}
				if ( $value == 'top_aligned' )
				{
					echo "top_aligned";
				}
				if ( $value == 'bottom_aligned' )
				{
					echo "bottom_aligned";
				}
				if ( $value == 'hide_title' )
				{
					echo "invisible";
				}
				if ( $value == 'custom_alignment' )
				{
					echo "custom_alignment";
				}
				?>'>
					<?php
					if ( $value == 'center_aligned' )
					{
						get_template_part('/header_text_partials/centered_layout');
					}
					if ( $value == 'top_aligned')
					{
						get_template_part('/header_text_partials/aligned');
					}
					if ( $value == 'bottom_aligned')
					{
						get_template_part('/header_text_partials/aligned');
					}
					if ( $value == 'hide_title')
					{
						get_template_part('/header_text_partials/aligned');
					}
					if ( $value == 'custom_alignment' )
					{
						get_template_part('/header_text_partials/custom_aligned');
					}
					?>
				</div>

			</div>

		</div>

	<header class="article-header">

	</header>

	<section class="entry-content clearfix">
		<div class='maincontainer'>
			<div class='content_wrap'>
				<div class='article_abstract'>
					<?php echo the_field('abstract'); ?>
				</div>
				<?php the_content(); ?>
			</div>
		</div>
	</section>

	<footer class="article-footer">
		<div class='maincontainer'>
			<div class='content_wrap'>

				<p class="byline vcard"><?php
					printf( __( 'Published <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span><!-- <span class="amp">&</span> filed under %4$s.-->', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
				?></p>
			</div>
		</div>
	</footer>

	<?php // comments_template(); // uncomment if you want to use them ?>

</article>

<?php endwhile; ?>
<?php wp_reset_query(); // reset the query ?>

		<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
				<?php bones_page_navi(); ?>
		<?php } else { ?>
				<nav class="wp-prev-next">
						<ul class="clearfix">
							<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
							<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
						</ul>
				</nav>
		<?php } ?>

<?php else : ?>

		<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

<?php endif; ?>


<?php get_footer(); ?>
