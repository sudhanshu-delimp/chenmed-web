<?php

/**
 * Chenmed Search Results Template
 *
 * @package   Search_Filter
 * @author    Rosie Faulkner
 * @link      https://chenmed.com
 *
 *
 */

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
	exit;
}

if ($query->have_posts()) {
?>
	<br />
	<p style="padding:10px 10px;">Found <?php echo $query->found_posts; ?> Results<br />
		<?php
		while ($query->have_posts()) {
			$query->the_post();
		?>
	<div class="hentry search-article post-content" style="padding-left:10px;">
		<br />
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><br />
		<?php 
			$summary = get_post_summary(get_post_type(), get_the_ID(), 100);
		?>
		<p>Description: <?php echo $summary; ?></p>
		<p>Doc Type: <?php echo (str_replace('_', ' ', ucfirst(get_post_type()))); ?></p>
		<?php
			$metaCOEs = get_post_meta(get_the_ID(), 'coe', true);
			$metaCOEsList = [];

			if (is_array($metaCOEs) && $metaCOEs != null) {
				foreach ($metaCOEs as $metaCOE) {
					$metaCOEsList[] = get_term($metaCOE)->name;
				}
				echo '<p>COE: ' . implode(", ", $metaCOEsList) . '</p>';
			} else if (get_post_type() == 'page' || get_post_type() == 'post') {
				echo '<p>COE: All</p>';
			} else {
				echo '<p>COE: ' . get_term($metaCOEs)->name . '</p>';
			}
			$coeSlug = get_term(get_post_meta(get_the_ID(), 'coe', true))->slug;
			switch ($coeSlug) {
				case 'clinical-operations-kb':
					$categorySlug = 'clinical_ops_kb_categories';
					break;
				case 'compliance-kb':
					$categorySlug = 'compliance_kb_categories';
					break;
				case 'medicine-kb':
					$categorySlug = 'medicine_kb_categories';
					break;
				case 'marketing-kb':
					$categorySlug = 'marketing_kb_categories';
					break;
				case 'finance-kb':
					$categorySlug = 'knowledge_base_categories';
					break;
				case 'case-management-kb':
					$categorySlug = 'case_management_kb_categories';
					break;
				case 'hr-total-rewards-kb':
					$categorySlug = 'total_rewards_kb_categories';
					break;
				case 'clinical-patient-education-kb':
					$categorySlug = 'patient_education_kb_categories';
					break;
				case 'corporate-security-kb':
					$categorySlug = 'corporate_security_kb_categories';
					break;
				case 'wellness-kb':
					$categorySlug = 'wellness_kb_categories';
					break;
				case 'legal-kb':
					$categorySlug = 'legal_kb_categories';
					break;
			}
			if (get_post_type() == 'page' || get_post_type() == 'post') {
				$categoriesForPosts = get_the_category();
				if (!empty($categoriesForPosts)) {
					echo '<p>Category: ';
					foreach ($categoriesForPosts as $idx => $categoryForPost) {
						if ($idx > 0) {
							echo ', ';
						}
						echo $categoryForPost->name;
					}
				}
			} else if (!empty($categorySlug)) {
				$terms = wp_get_post_terms(get_the_ID(), $categorySlug);
				if (!empty($terms)) {
					echo '<p>Category: ';
					foreach ($terms as $idx => $term) {
						if ($idx > 0) {
							echo ', ';
						}
						echo $term->name;
					}
					echo '</p>';
				}
			}

			$author = get_post_field('post_author', get_the_ID());
		?>
		<p>Author: <?php echo $author == '1' ? 'No Author Specified' : get_the_author();  ?></p>
		<?php echo get_post_type() == 'post' ? '<p>Published Date: ' . get_the_date() . '</p>' : '' ?>
		<p>Date Updated: <?php echo get_the_modified_date(); ?></p>
		<a class="read-more-button kbbutton" href="<?php the_permalink(); ?>">Read More</a><br /><br />
	</div>
<?php
		}
	} else {
		echo "No Results Found";
	}
?>
