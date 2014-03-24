	<div class='control_box'>
		<h1 class="h1" <?php if( get_field('feature_image_text_colour') ): ?>style='color:<?php echo the_field('feature_image_text_colour'); ?>'<?php endif; ?>> <?php echo the_field('editorial_title'); ?></h1>
			<?php if( get_field('subtitle') ): ?>
				<div class='subtitle' <?php if( get_field('feature_image_text_colour') ): ?>style='color:<?php echo the_field('feature_image_text_colour'); ?>'<?php endif; ?>><?php the_field('subtitle'); ?>
				</div>
			<?php endif; ?>
	</div>
