<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>	<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php wp_head(); ?>
		<link rel="stylesheet" href="http://deadtype.ca/search_interface/stylesheets/style.css">

<script type="text/javascript" src="//use.typekit.net/joz1nzz.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>

	<body <?php body_class(); ?>>

      <!--<div class='content_aligned'>
        <nav class="major_nav clearfix" role='navigation'>
          <div class=' mobile_menu clearfix'>
            <div class='mobile_logo_container'>
               <div class='logo'>
               	<img src='<?php echo get_template_directory_uri(); ?>/library/images/new_dist_logo_white.png'>
              </div>
            </div>
              <div class='mobile_link'><a href='http://localhost:4200' class='active'><span>buy our wines</span></a></div>
              <div class='mobile_link'><a href='http://localhost/journal-newdistrict/'><span>Wine Stories</span></a></div>
          </div>
        </nav>
      </div>-->


		<div class='site_wrapper clearfix'>




