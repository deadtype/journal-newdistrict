			<footer class="main_footer" role="contentinfo">
				<div class="content_wrap">
					<div class='logo_container clearfix'>
						<div class='logo_word social'>
							<a href="<?php echo get_settings('home'); ?>"><img src='<?php echo get_template_directory_uri(); ?>/library/images/logo.png'></a>
						</div>
					</div>
    				<?php bones_footer_links(); ?>
				</div>

			</footer>
		</div>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.8.3.min.js"></script>
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
