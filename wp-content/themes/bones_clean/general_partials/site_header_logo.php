<header class='main_header content_aligned '>
    <div class='shared_header_container clearfix'>
    	<div class="logo_container">
			<div class='logo_word'>
				<a href="<?php echo get_settings('home'); ?>"><img src='<?php echo get_template_directory_uri(); ?>/library/images/logo.png'></a>
            </div>
              <div class='logo_meta_info'>
              	<?php query_posts("p=217"); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php echo get_the_content(); ?>
					<?php endwhile; endif; ?>
				<?php wp_reset_query(); // reset the query ?>
              </div>
        </div>
        <!-- <div class='site_wide_nav big_screen'>
            <a href='http://localhost:4200'><span>buy our wines</span></a>
            <a href='http://localhost/journal-newdistrict/' class='active'><span >wine stories</span></a>
          </div>
          <div class='site_wide_nav small_screen'>
            <a class="small_screen active menu-link"><span>menu</span></a>
          </div>-->
    </div>
</header>
