<?php
/*
Template Name: Article Archive
*/
?>

<?php get_header(); ?>

 		<?php 	get_template_part('/general_partials/site_header_logo'); ?>
 			<div class='content_wrap'>

		<div class="text">
			<?php query_posts("p=172"); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			<?php wp_reset_query(); // reset the query ?>
		</div>
	</div>

<div class='content_wrap'>
	<?php bones_main_nav(); ?>
</div>


<?php query_posts("&post_type=editorial_articles"); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix archive_article' ); ?> role="article">
	<a href='<?php the_permalink() ?>'>
		<div class=" clearfix" style="background-image: url('<?php echo the_field('featured_image'); ?>'); background-size:cover; background-position: center center;">
			<div class='relative_container archive_image'>

				<div class='published_on'>
					<div class='content_wrap'>

					<p class="byline vcard"><?php
						printf( __( '<!--Published--><time class="updated" datetime="%1$s" pubdate>%2$s</time><!-- by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.-->', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
					?></p>
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
