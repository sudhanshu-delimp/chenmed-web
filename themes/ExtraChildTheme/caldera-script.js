jQuery(document).on('cf.form.init', function (event, data) {
	let formId = 'CF5ee8e86f74646';

	if (formId !== data.formId) {
		return;
	}

	jQuery(document).on('click', '.caldera_continue_button', function() {
		if (jQuery('.additional_symptoms').find('input[type="checkbox"]').is(':checked')) {
			jQuery('.caldera_additional_symptoms_checked').val(1);
		} else {
			jQuery('.caldera_forms_form').submit();
		}
	});

	jQuery(document).on('change', '.additional_symptoms input[type="checkbox"]', function() {
		jQuery('.caldera_additional_symptoms_checked').val(0);
		if (this.checked) {
			if (this.value == 'None') {
				jQuery('.additional_symptoms input[type="checkbox"]').prop('checked', false);
				jQuery(this).prop('checked', true);
			} else {
				jQuery('.additional_symptoms input[type="checkbox"][value="None"]').prop('checked', false);
			}
		}
	});
});

jQuery(window).load(function() {
	if (navigator.userAgent.indexOf('gonative') > -1) {
		jQuery('.hamburger-menu-mobile, .et_pb_row_0_tb_header, footer, #button-sticky, #wpadminbar, .button-sticky, .et-push-menu-toggle').hide();
		jQuery('#slide-in-open-app').removeClass('hidden');

		if (jQuery(window).width() < 375) {
			jQuery('header .et_pb_image_wrap').css('min-width', '200px').css('margin-top', '7%');
			jQuery('body.logged-in.admin-bar .et_pb_section_0_tb_header').css('top', '0');
			jQuery('#main-content').css('padding-top', '15%');
		}
	}
});
