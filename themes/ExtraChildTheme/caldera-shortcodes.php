<?php

define('CHOOSE_LOVE_FORM_ID', 'CF5ee8e86f74646');
define('CHOOSE_LOVE_FINAL_RESULT_FIELD_ID', 'fld_3210796');

function get_caldera_entry(int $entryId, $formId = CHOOSE_LOVE_FORM_ID) {
	$entry = wp_cache_get('caldera_entry');

	if (empty($entry)) {
		$form = Caldera_Forms_Forms::get_form( $formId );
		$entryObj = new Caldera_Forms_Entry( $form, $entryId );
		$entryData = $entryObj->get_entry()->to_array();
		$fields = $entryObj->get_fields();

		$fieldsData = [];
		foreach ($fields as $field) {
			$fieldsData[$field->slug] = $field->value;
		}

		$entry = [
			'_entry_id' => $entryData['id'],
			'_date' => $entryData['datestamp'],
			'data' => [
				'first_name' => $fieldsData['first_name'] ?? '',
				'last_name' => $fieldsData['last_name'] ?? '',
				'location' => $fieldsData['location'] ?? '',
			]
		];

		wp_cache_set('caldera_entry', $entry);
	}

	return $entry;
}

function get_caldera_entry_id() {
	if (!isset($_GET['cf_id']) || !is_numeric($_GET['cf_id']) || empty($_GET['cf_id'])) {
		return null;
	}

	$entryId = intval($_GET['cf_id']);
	$entry = get_caldera_entry($entryId);

	return $entry['_entry_id'] ?? null;
}

function if_caldera_entry($atts, $content) {
	if (get_caldera_entry_id() == null) {
		return '';
	}

	return do_shortcode($content);
}

function get_caldera_entry_date($atts) {
	$entryId = get_caldera_entry_id();
	if ($entryId == null) {
		return '';
	}

	$atts = shortcode_atts([
        'format' => 'F d, Y',
    ], $atts);

	date_default_timezone_set('America/New_York');
	$entry = get_caldera_entry($entryId);

	return date($atts['format'], strtotime($entry['_date']) + date('Z'));
}

function get_caldera_entry_time() {
	$entryId = get_caldera_entry_id();
	if ($entryId == null) {
		return '';
	}

	$atts = shortcode_atts([
        'format' => 'H:i A T',
    ], $atts);

	date_default_timezone_set('America/New_York');
	$entry = get_caldera_entry($entryId);

	return date($atts['format'], strtotime($entry['_date']) + date('Z'));
}

function get_caldera_entry_first_name() {
	$entryId = get_caldera_entry_id();
	if ($entryId == null) {
		return '';
	}

	$entry = get_caldera_entry($entryId);
	return $entry['data']['first_name'] ?? '';
}

function get_caldera_entry_last_name() {
	$entryId = get_caldera_entry_id();
	if ($entryId == null) {
		return '';
	}

	$entry = get_caldera_entry($entryId);
	return $entry['data']['last_name'] ?? '';
}

function get_caldera_entry_location() {
	$entryId = get_caldera_entry_id();
	if ($entryId == null) {
		return '';
	}

	$entry = get_caldera_entry($entryId);
	return $entry['data']['location'] ?? '';
}

function calculateFinalResult(array $data) : string {
	$data += [
		'main_symptoms' => null,
		'additional_symptoms_count' => null,
		'are_you_sick_today' => null,
		'close_contact' => null,
		'recent_test' => null,
		'final_result' => null,
	];

	$result = $data['final_result'];
	if (
		$data['main_symptoms'] == 'No' &&
		$data['recent_test'] == 'No' &&
		$data['additional_symptoms_count'] == 0
	) {
		$result = 'green';
	} elseif (
		$data['main_symptoms'] == 'Yes' ||
		$data['additional_symptoms_count'] > 1 ||
		$data['close_contact'] == 'Yes'
	) {
		$result = 'red';
	} elseif (
		($data['additional_symptoms_count'] == 1 && $data['close_contact'] == 'No') ||
		$data['are_you_sick_today'] == 'Yes' ||
		$data['recent_test'] == 'Yes'
	) {
		$result = 'yellow';
	}
	return $result;
}

function set_final_result($form, $referrer, $processId, $entryId) {
	if ($form['ID'] != CHOOSE_LOVE_FORM_ID) {
		return;
	}

	if (empty(Caldera_Forms::get_field_data(CHOOSE_LOVE_FINAL_RESULT_FIELD_ID, $form))) {
		$fields = Caldera_Forms_Forms::get_fields($form);
		$submission = Caldera_Forms::get_submission_data($form);

		foreach ($fields as $field) {
			$data[$field['slug']] = $submission[$field['ID']];
		}

		Caldera_Forms::set_field_data(CHOOSE_LOVE_FINAL_RESULT_FIELD_ID, calculateFinalResult($data), $form);
	}
}

add_shortcode( 'covid_screening_entry_date', 'get_caldera_entry_date' );
add_shortcode( 'covid_screening_entry_time', 'get_caldera_entry_time' );
add_shortcode( 'covid_screening_entry_first_name', 'get_caldera_entry_first_name' );
add_shortcode( 'covid_screening_entry_last_name', 'get_caldera_entry_last_name' );
add_shortcode( 'covid_screening_entry_location', 'get_caldera_entry_location' );
add_shortcode( 'if_covid_screening_entry', 'if_caldera_entry' );

add_action('caldera_forms_submit_complete', 'set_final_result', 5, 4);
