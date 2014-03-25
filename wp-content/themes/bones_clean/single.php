<?php get_header(); ?>


	<div class='content_wrap'>
		<div class='logo_word'>
			<a href="<?php echo get_settings('home'); ?>"><img src='<?php echo get_template_directory_uri(); ?>/library/images/logo.png'></a>
		</div>
	</div>

	<div class='single_article'>
		<div class='content_wrap'>
			<?php bones_main_nav(); ?>
		</div>
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix featured_article' ); ?> role="article">

		<div class="full clearfix" style="background-image: url('<?php echo the_field('featured_image'); ?>'); background-size:cover; background-position:<?php echo the_field('featured_image_vertical_position'); ?> <?php echo the_field('featured_image_horizontal_position'); ?>;">

		<?php
		$value = get_field( "featured_image_text_position" );
		?>

			<div class='relative_container' <?php if( get_field('featured_image_background_colour') ): ?>style='<?php echo the_field('featured_image_background_colour'); ?>'<?php endif; ?>>


				<div class='
				<?php
				if ( $value == 'center_aligned' )
				{
					echo "centered_aligned";
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
					echo "custom_title";
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

					<?php get_template_part('/general_partials/published_date'); ?>
				</div>

			</div>

		</div>

	<header class="article-header">

	</header>

	<section class="entry-content clearfix">
			<div class='content_wrap'>
				<div class='article_abstract'>
					<?php echo the_field('abstract'); ?>
				</div>
				<?php the_content(); ?>
			</div>
	</section>

</article>

	<footer class="article-footer">
	<?php get_template_part('/general_partials/social_links'); ?>
	</footer>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>



<?php get_footer(); ?>
