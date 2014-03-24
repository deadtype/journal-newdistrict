<div class='published_on'>
	<div class='content_wrap'>

	<p class="byline vcard"><?php
		printf( __( '<!--Published--><time class="updated" datetime="%1$s" pubdate>%2$s</time><!-- by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.-->', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
	?></p>
	</div>
</div>
