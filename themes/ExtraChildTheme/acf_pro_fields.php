<?php

if (have_rows('optional_content')) :

// Loop through rows.
while (have_rows('optional_content')) : the_row();

	// Case: Title layout.
	if (get_row_layout() == 'title_layout') :
		$title_option = get_sub_field('title_option');
		echo '<h5>' . $title_option . '</h5>';

	// Case: Text layout.
	elseif (get_row_layout() == 'body_layout') :
		$body_option = get_sub_field('body_option');
		echo $body_option . '<br><br>';

	// Case: Image layout.
	elseif (get_row_layout() == 'image_layout') :
		$image_option = get_sub_field('image_option');
		echo wp_get_attachment_image($image_option, 'full') . '<br><br>';

	// Case: Hyperlink layout.
	elseif (get_row_layout() == 'hyperlink_layout') :
		$hyperlink_option = get_sub_field('hyperlink_option');
?><a class="button" href="<?php echo $hyperlink_option['url']; ?>" target="<?php echo $hyperlink_option['target']; ?>"><?php echo $hyperlink_option['title'] ? $hyperlink_option['title'] : "Click Here"; ?></a><br><br><?php

	// Case: Video layout.
	elseif (get_row_layout() == 'video_layout') :
		$video_option = wp_oembed_get(get_sub_field('video_option'));
		echo $video_option . '<br><br>';

	endif;

// End loop.
endwhile;

// Do something...
endif;
