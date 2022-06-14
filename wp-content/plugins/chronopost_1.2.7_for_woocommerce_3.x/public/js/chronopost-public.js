(function ($) {
	'use strict';


	$(document).ready(function () {
		$('body').on('updated_checkout', function () {
			if (!$('#saturday_shipping').length) {
				$('#saturday_shipping_field_enable').val('no');
			}
		});
		$(document.body).on('change', '#saturday_shipping', function () {
			if (!$('form.checkout #saturday_shipping_field_enable').length) {
				$('form.checkout').append('<input type="hidden" name="saturday_shipping_field_enable" id="saturday_shipping_field_enable">');
			}

			$('#saturday_shipping_field_enable').val($(this).prop('checked') ? 'yes' : 'no');

			$( document.body ).trigger( 'update_checkout', { update_shipping_method: true });
		});

		var loadingMap = false,
			loadingRdv = false,
			shipping_method;

		if ($('.chronorelaismap').length) {
			$('.chronorelaismap').chronomap();
		}
		if ($('#outer-container-method-chronoprecise').length) {
			$('#outer-container-method-chronoprecise').chronoprecise();
		}

		$(document.body).on('click', '.appointment-link', function () {
			if (!$('#outer-container-method-chronoprecise').length && !loadingRdv) {
				loadingRdv = true;
				shipping_method = $('.appointment-link').closest('li').find('input[name="shipping_method[0]"]').val();
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: Chronomap.ajaxurl,
					cache: false,
					data: {
						'action': 'load_chronoprecise_appointment',
						'method_id': shipping_method,
						'chrono_nonce': Chronomap.chrono_nonce
					}
				})
					.done(function (output) {
						if (output.status == 'success') {
							$(output.data).insertBefore('#payment');
							if ($('#outer-container-method-chronoprecise').length) {
								$('#outer-container-method-chronoprecise').chronoprecise({openRdv: true});
							}
						} else {
							$('form.checkout').prepend('<div class="pickup-relay-error woocommerce-error">' + output.data + '</div>');
							$('html, body').animate({
								scrollTop: ($('form.checkout').offset().top - 100)
							}, 1000);
							$(document.body).trigger('checkout_error');
						}
						loadingRdv = false;
					});
			}
		});

		$(document.body).on('click', '.pickup-relay-link', function (event) {
			if (!$('#container-method-chronorelay').length && !loadingMap) {
				$('.pickup-relay-error').remove();
				loadingMap = true,
					shipping_method = $('.pickup-relay-link').closest('li').find('input[name="shipping_method[0]"]').val();
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: Chronomap.ajaxurl,
					cache: false,
					data: {
						'action': 'load_chronorelais_picker',
						'method_id': shipping_method,
						'chrono_nonce': Chronomap.chrono_nonce
					}
				})
					.done(function (output) {
						if (output.status == 'success') {
							$(output.data).insertBefore('#payment');
							if ($('#container-method-chronorelay').length) {
								$("html, body").animate({scrollTop: $('#container-method-chronorelay').offset().top}, 1000);
								$('.chronorelaismap').chronomap({openMap: true});
							}
						} else {
							$('form.checkout').prepend('<div class="pickup-relay-error woocommerce-error">' + output.data + '</div>');
							$('html, body').animate({
								scrollTop: ($('form.checkout').offset().top - 100)
							}, 1000);
							$(document.body).trigger('checkout_error');
						}
						loadingMap = false;
					});
			}
			event.preventDefault();
		});

	});

})(jQuery);
