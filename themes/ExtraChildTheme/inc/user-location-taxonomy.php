<?php
define('USER_LOCATION_NAME', 'user_location');
define('USER_LOCATION_META_KEY', '_user_location');

add_action('init', 'chenmed_register_user_location_taxonomy');
function chenmed_register_user_location_taxonomy() {
	register_taxonomy(
		USER_LOCATION_NAME,
		'user',
		[
			'public' => true,
			'labels' => [
				'name'		=> 'User Locations',
				'singular_name'	=> 'User Location',
				'menu_name'	=> 'User Locations',
				'search_items'	=> 'Search User Location',
				'popular_items' => 'Popular User Locations',
				'all_items'	=> 'All User Locations',
				'edit_item'	=> 'Edit User Location',
				'update_item'	=> 'Update User Location',
				'add_new_item'	=> 'Add New User Location',
				'new_item_name'	=> 'New User Location Name',
            ],
			'update_count_callback' => function() {
				return; //important
			}
        ]
	);
}

add_action('admin_menu', 'chenmed_add_user_locations_admin_page');
function chenmed_add_user_locations_admin_page() {
	$taxonomy = get_taxonomy(USER_LOCATION_NAME);
	add_users_page(
		esc_attr($taxonomy->labels->menu_name),
		esc_attr($taxonomy->labels->menu_name),
		$taxonomy->cap->manage_terms,
		'edit-tags.php?taxonomy=' . $taxonomy->name
	);
}

add_filter('submenu_file', 'chenmed_set_user_location_submenu_active');
function chenmed_set_user_location_submenu_active($submenu_file) {
	global $parent_file;
	if ('edit-tags.php?taxonomy=' . USER_LOCATION_NAME == $submenu_file) {
		$parent_file = 'users.php';
	}
	return $submenu_file;
}

add_action('show_user_profile', 'chenmed_admin_user_profile_location_select');
add_action('edit_user_profile', 'chenmed_admin_user_profile_location_select');
function chenmed_admin_user_profile_location_select($user) {
	$taxonomy = get_taxonomy(USER_LOCATION_NAME);
	
	if (!current_user_can('administrator')) {
		return;
	}
	?>
	<table class="form-table">
		<tr>
			<th>
				<label for="<?php echo USER_LOCATION_META_KEY ?>">User Location</label>
			</th>
			<td>
				<?php
					$user_location_terms = get_terms([
                        'taxonomy' => USER_LOCATION_NAME,
						'hide_empty' => 0
                    ]);
					
					$select_options = [];
					
					foreach ($user_location_terms as $term) {
						$select_options[$term->term_id] = $term->name;
					}
					
					$meta_values = get_user_meta($user->ID, USER_LOCATION_META_KEY, true);
					
					echo chenmed_custom_form_select(
						USER_LOCATION_META_KEY,
						$meta_values,
						$select_options,
						'',
						[]
					);
				?>
			</td>
		</tr>
	</table>
	<?php
}

function chenmed_custom_form_select($name, $value, $options, $default_var = '', $html_params = []) {
	if (empty($options)) {
		$options = ['' => '---choose---'];
	}

	$html_params_string = '';
	
	if (!empty($html_params)) {
		if (array_key_exists('multiple', $html_params)) {
			$name .= '[]';
		}
		foreach ($html_params as $html_params_key => $html_params_value) {
			$html_params_string .= " {$html_params_key}='{$html_params_value}'";
		}
	}

	echo "<select name='{$name}'{$html_params_string}>";
	
	foreach ($options as $options_value => $options_label) {
		if ((is_array($value) && in_array($options_value, $value))
			|| $options_value == $value) {
			$selected = " selected='selected'";
		} else {
			$selected = '';
		}
		if (empty($value) && !empty($default_var) && $options_value == $default_var) {
			$selected = " selected='selected'";
		}
		echo "<option value='{$options_value}'{$selected}>{$options_label}</option>";
	}

	echo "</select>";
}

add_action('personal_options_update', 'chenmed_admin_save_user_locations');
add_action('edit_user_profile_update', 'chenmed_admin_save_user_locations');
function chenmed_admin_save_user_locations($user_id) {
	$tax = get_taxonomy(USER_LOCATION_NAME);
	$user = get_userdata($user_id);

	if (!current_user_can('administrator')) {
		return false;
	}
	
	$new_locations_ids = $_POST[USER_LOCATION_META_KEY];
	$user_meta = get_user_meta($user_id, USER_LOCATION_META_KEY, true);
	$previous_locations_ids = [];
	
	if (!empty($user_meta)) {
		$previous_locations_ids = (array)$user_meta;
	}
	
	update_user_meta($user_id, USER_LOCATION_META_KEY, $new_locations_ids);
	chenmed_update_users_locations_count($previous_locations_ids, $new_locations_ids);
}

function chenmed_update_users_locations_count($previous_terms_ids, $new_terms_ids) {
	global $wpdb;

	$terms_ids = array_unique(array_merge((array)$previous_terms_ids, (array)$new_terms_ids));
	
	if (count($terms_ids) < 1) { return; }
	
	foreach ($terms_ids as $term_id) {
		$count = $wpdb->get_var(
			$wpdb->prepare(
				"SELECT COUNT(*) FROM $wpdb->usermeta WHERE meta_key = %s AND (meta_value = %s OR meta_value LIKE %s OR meta_value LIKE %s)",
				USER_LOCATION_META_KEY,
				$term_id,
				'%"' . $term_id . '"%',
				'%:' . $term_id . ';%'
			)
		);
		$wpdb->update($wpdb->term_taxonomy, ['count' => $count], ['term_taxonomy_id' => $term_id]);
	}
}

// Store user location
add_action('onelogin_saml_attrs', 'chenmed_set_user_location_from_saml', 10, 2);
function chenmed_set_user_location_from_saml($attrs, $user) {
    if (empty($attrs['address'][0])) {
		return;
	}

    $location = $attrs['address'][0];
	if (!$term = term_exists($location, USER_LOCATION_NAME)) {
		register_taxonomy(USER_LOCATION_NAME, 'user', []);
		$term = wp_insert_term($location, USER_LOCATION_NAME, [
			'slug' => sanitize_title($location),
		]);
	}
	
	$userTerm = chenmed_get_user_location($user->ID);
	if (
		!empty($term['term_id']) && (
			empty($userTerm->term_id) ||
			$term['term_id'] != $userTerm->term_id
		)
	) {
		update_user_meta($user->ID, USER_LOCATION_META_KEY, [$term['term_id']]);
		chenmed_update_users_locations_count([], [$term['term_id']]);
	}
}

function chenmed_get_user_location($userId) {
	register_taxonomy(USER_LOCATION_NAME, 'user', []);
	return current(get_terms([
		'taxonomy' => USER_LOCATION_NAME,
		'term_taxonomy_id' => get_user_meta($userId, USER_LOCATION_META_KEY, true),
	]));
}


add_filter('caldera_forms_get_magic_tags', 'chenmed_register_magic_tags', 10);
function chenmed_register_magic_tags($tags) {
	$position = array_search('get:*', $tags['system']['tags']) ?? 7;
	array_splice($tags['system']['tags'], $position+1, 0, 'user:location');
	return $tags;
}

add_filter('caldera_forms_do_magic_tag', 'chenmed_process_magic_tags', 10, 2);
function chenmed_process_magic_tags($value, $magic_tag) {
    if ($magic_tag == '{user:location}') { 
		$term = chenmed_get_user_location(get_current_user_id());
        $value = $term->name;
    }
    return $value;
}