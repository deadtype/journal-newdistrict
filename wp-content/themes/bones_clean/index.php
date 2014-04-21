<?php get_header(); ?>

 <?php 	get_template_part('/general_partials/site_header_logo'); ?>

 	<div class='content_wrap'>

		<div class="text">
			<?php query_posts("p=4"); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			<?php wp_reset_query(); // reset the query ?>
		</div>
	</div>

<div class='content_wrap'>
	<?php bones_main_nav(); ?>
</div>


<?php query_posts("posts_per_page=1&post_count=1&post_type=editorial_articles"); ?>
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




<?php $the_query = new WP_Query( "posts_per_page=1&offset=1&post_type=editorial_articles" ); ?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix archive_article' ); ?> role="article">
			<a href='<?php the_permalink() ?>'>
				<div class=" clearfix" style="background-image: url('<?php echo the_field('featured_image'); ?>'); background-size:cover; background-position: center center;">
					<div class='relative_container archive_image'>
						<div class="published_on">
							<div class="content_wrap">

							<p class="byline vcard">Read Next Article</p>
							</div>
						</div>
						<div class='content_aligned'>
							<div class="archive_text">
								<div class='archive_title'>
									<?php the_title(); ?>
								</div>
								<div class='archive_subtitle'>
									<?php the_field('subtitle'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</article>

  <?php endwhile; ?>


<?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer();

