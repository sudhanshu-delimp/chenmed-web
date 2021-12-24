<?php get_header(); ?>
<div id="main-content">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<?php
	$date_approved = get_field('date_approved');
	$date_revised = get_field('date_revised');
	$file = '/wp-json/knowledge-base/secure-document/' . $post->ID . '.pdf';
	$checkbox = get_field('disallow');
	$summary = get_field('summary');
	$approved_by = get_field('approved_by');
	$keyword1_1 = get_field('keyword1_1');
	$keyword2_1 = get_field('keyword2_1');
	$keyword3_1 = get_field('keyword3_1');
	?>

</div> <!-- .entry-content -->

<!-- .et_pb_post -->


<div class="container">
	<div id="content-area" class="clearfix">
		<div class="et_pb_extra_column_main">
			<?php
			do_action('et_before_post');
			if (have_posts()) :
				while (have_posts()) : the_post(); ?>
					<?php
					$post_category_color = extra_get_post_category_color();
					?>
					<?php if ($checkbox && in_array('disallow', $checkbox)) : ?>
						<div onmousedown="return false;" onselectstart="return false;">
							<script>
								$(document).bind("contextmenu", function(e) {
									return false;
								});
							</script>
						<?php endif ?>
						<div class="post-footer" <?php if ($checkbox && in_array('disallow', $checkbox)) {
														echo 'style="display:none;"';
													} ?>>
							<div class="social-icons ed-social-share-icons">
								<p class="share-title"><?php esc_html_e('Share:', 'extra'); ?></p>
								<?php extra_post_share_links(); ?>
							</div>
						</div>
						<article id="post-<?php the_ID(); ?>" <?php post_class('module single-post-module'); ?>>
							<?php if (is_post_extra_title_meta_enabled()) { ?>
								<div class="post-header">
									<h1 class="entry-title"><?php the_title(); ?></h1>
									<div class="post-meta vcard">
										<p><?php echo extra_display_single_post_meta(); ?></p>
									</div>
								</div>
							<?php } ?>

							<?php if ((et_has_post_format() && et_has_format_content()) || (has_post_thumbnail() && is_post_extra_featured_image_enabled())) { ?>
								<div class="post-thumbnail header">
									<?php
									$score_bar = extra_get_the_post_score_bar();
									$thumb_args = array('size' => 'extra-image-single-post', 'link_wrapped' => false);
									require locate_template('post-top-content.php');
									?>
								</div>
							<?php } ?>

							<?php $post_above_ad = extra_display_ad('post_above', false); ?>
							<?php if (!empty($post_above_ad)) { ?>
								<div class="et_pb_extra_row etad post_above">
									<?php echo $post_above_ad; ?>
								</div>
							<?php } ?>

							<div class="post-wrap">
								<?php if (!extra_is_builder_built()) { ?>
									<div class="post-content entry-content">
										<?php
										if ($date_approved || $date_revised || $approved_by) {
											echo '<table style="width: 100%;" border="1" cellpadding="6">
									<tbody>
									<tr>
									<td><h5>Date Approved:</h5> ' . ($date_approved ? $date_approved : "") . '</td>
									<td><h5>Date Revised:</h5> ' . ($date_revised ? $date_revised : "") . '</td>
									</tr>
									<tr>
									<td><h5>Approved By</h5> ' . ($approved_by ? $approved_by : "") . '</td>
									</tr>
									</tbody>
									</table>';
										}
										echo '<br><br>';
										echo '<h3>Summary: </h3>';
										echo $summary ? $summary : "";
										echo "<br><br>";

										// Includes ACF repeater fields
										include('acf_pro_fields.php');

										if (get_post_field('secure_document', $post)) {
											if ($checkbox && in_array('disallow', $checkbox)) {
												echo do_shortcode('[pdfjs-viewer url="' . esc_html($file) . '" viewer_width=900px viewer_height=900px fullscreen=false download=false print=false]');
												echo "<br><br><br>";
											}
											if (!$checkbox && !in_array('disallow', $checkbox)) {
												echo do_shortcode('[pdfjs-viewer url="' . esc_html($file) . '" viewer_width=900px viewer_height=900px fullscreen=true download=true print=true]');
												echo "<br><br><br>";
											}
										} else {
											echo "<br><br><br>";
										}

										echo do_shortcode("[was_this_article_helpful]");
										echo "<br>";


										wp_link_pages(array(
											'before' => '<div class="page-links">' . esc_html__('Pages:', 'extra'),
											'after'  => '</div>',
										));
										?>
										<?php if ($checkbox && in_array('disallow', $checkbox)) : ?>
									</div>
								<?php endif ?>
							</div>
						<?php } ?>
						</div>
						<?php if ($review = extra_post_review()) { ?>
							<div class="post-wrap post-wrap-review">
								<div class="review">
									<div class="review-title">
										<h3><?php echo esc_html($review['title']); ?></h3>
									</div>
									<div class="review-content">
										<div class="review-summary clearfix">
											<div class="review-summary-score-box" style="background-color:<?php echo esc_attr($post_category_color); ?>">
												<h4><?php printf(et_get_safe_localization(__('%d%%', 'extra')), absint($review['score'])); ?></h4>
											</div>
											<div class="review-summary-content">
												<?php if (!empty($review['summary'])) { ?>
													<p>
														<?php if (!empty($review['summary_title'])) { ?>
															<strong><?php echo esc_html($review['summary_title']); ?></strong>
														<?php } ?>
														<?php echo $review['summary']; ?>
													</p>
												<?php } ?>
											</div>
										</div>
										<div class="review-breakdowns">
											<?php foreach ($review['breakdowns'] as $breakdown) { ?>
												<div class="review-breakdown">
													<h5 class="review-breakdown-title"><?php echo esc_html($breakdown['title']); ?></h5>
													<div class="score-bar-bg">
														<span class="score-bar" style="background-color:<?php echo esc_attr($post_category_color); ?>; width:<?php printf('%d%%', max(4, absint($breakdown['rating'])));  ?>">
															<span class="score-text"><?php printf(et_get_safe_localization(__('%d%%', 'extra')), absint($breakdown['rating'])); ?></span>
														</span>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						<div class="post-footer" <?php if ($checkbox && in_array('disallow', $checkbox)) {
														echo 'style="display:none;"';
													} ?>>
							<div class="social-icons ed-social-share-icons">
								<p class="share-title"><?php esc_html_e('Share:', 'extra'); ?></p>
								<?php extra_post_share_links(); ?>
							</div>

						</div>

						<?php $post_below_ad = extra_display_ad('post_below', false); ?>
						<?php if (!empty($post_below_ad)) { ?>
							<div class="et_pb_extra_row etad post_below">
								<?php echo $post_below_ad; ?>
							</div>
						<?php } ?>
						</article>

						<nav class="post-nav">
							<div class="nav-links clearfix">
								<div class="nav-link nav-link-prev">
									<?php previous_post_link('%link', et_get_safe_localization(__('<span class="button">Previous</span><span class="title">%title</span>', 'extra'))); ?>
								</div>
								<div class="nav-link nav-link-next">
									<?php next_post_link('%link', et_get_safe_localization(__('<span class="button">Next</span><span class="title">%title</span>', 'extra'))); ?>
								</div>
							</div>
						</nav>
						<?php
						if (extra_is_post_author_box()) { ?>
							<div class="et_extra_other_module author-box vcard">
								<div class="author-box-header">
									<h3><?php esc_html_e('About The Author', 'extra'); ?></h3>
								</div>
								<div class="author-box-content clearfix">
									<div class="author-box-avatar">
										<?php echo get_avatar(get_the_author_meta('user_email'), 170, 'mystery', esc_attr(get_the_author())); ?>
									</div>
									<div class="author-box-description">
										<h4><a class="author-link url fn" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author" title="<?php printf(et_get_safe_localization(__('View all posts by %s', 'extra')), get_the_author()); ?>"><?php echo get_the_author(); ?></a></h4>
										<p class="note"><?php the_author_meta('description'); ?></p>
										<ul class="social-icons">
											<?php foreach (extra_get_author_contact_methods() as $method) { ?>
												<li><a href="<?php echo esc_url($method['url']); ?>" target="_blank"><span class="et-extra-icon et-extra-icon-<?php echo esc_attr($method['slug']); ?> et-extra-icon-color-hover"></span></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						<?php } ?>

						<?php
						$related_posts = extra_get_post_related_posts();

						if ($related_posts && extra_is_post_related_posts()) {  ?>
							<div class="et_extra_other_module related-posts">
								<div class="related-posts-header">
									<h3><?php esc_html_e('Related Posts', 'extra'); ?></h3>
								</div>
								<div class="related-posts-content clearfix">
									<?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
										<div class="related-post">
											<div class="featured-image"><?php
																		echo et_extra_get_post_thumb(array(
																			'size'                       => 'extra-image-small',
																			'a_class'                    => array('post-thumbnail'),
																			'post_format_thumb_fallback' => true,
																			'img_after'                  => '<span class="et_pb_extra_overlay"></span>',
																		));
																		?></div>
											<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<p class="date"><?php extra_the_post_date(); ?></p>
										</div>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
						<?php } ?>
					<?php
				endwhile;
			else :
					?>
					<h2><?php esc_html_e('Post not found', 'extra'); ?></h2>
				<?php
			endif;
			wp_reset_query();

			do_action('et_after_post');
				?>

				<?php
				if ((comments_open() || get_comments_number()) && 'on' == et_get_option('extra_show_postcomments', 'on')) {
					comments_template('', true);
				}
				?>
		</div><!-- /.et_pb_extra_column.et_pb_extra_column_main -->

		<?php get_sidebar(); ?>

	</div> <!-- #content-area -->
</div> <!-- .container -->
</div> <!-- #main-content -->
<?php get_footer();
