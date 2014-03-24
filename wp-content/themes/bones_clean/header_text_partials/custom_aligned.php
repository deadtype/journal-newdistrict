<?php
$vertical_alignment = get_field( "text_position_vertical_alignment" );
$vertical_position = get_field( "text_position_vertical_position" );
$horizontal_alignment = get_field( "text_position_horizontal_alignment" );
$horizontal_position = get_field( "text_position_horizontal_position" );
?>

	<div class='control_box' style='


			<?php
				if ( $vertical_alignment == 'top' )
				{
					echo "top:";
				}
				if ( $vertical_alignment == 'bottom' )
				{
					echo "bottom:";
				}
			?>
			<?php
				echo "$vertical_position;";
			?>


			<?php
				if ( $horizontal_alignment == 'left' )
				{

					echo "left:";
				}
				if ( $horizontal_alignment == 'right' )
				{
					echo "text-align:right; right:";
				}
			?>
			<?php
				echo "$horizontal_position;";
			?>

	'>
		<h1 class="h1" <?php if( get_field('feature_image_text_colour') ): ?>style='color:<?php echo the_field('feature_image_text_colour'); ?>'<?php endif; ?>> <?php echo the_field('editorial_title'); ?></h1>
			<?php if( get_field('subtitle') ): ?>
				<div class='subtitle' <?php if( get_field('feature_image_text_colour') ): ?>style='color:<?php echo the_field('feature_image_text_colour'); ?>'<?php endif; ?>><?php the_field('subtitle'); ?>
				</div>
			<?php endif; ?>
	</div>
