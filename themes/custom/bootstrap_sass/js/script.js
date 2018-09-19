(function ($) {
  'use strict';

  Drupal.behaviors.mnu = {
    attach: function(context, settings) {
   		$('#block-bootstrap-sass-account-menu').addClass("hidden");
		$('#block-picture').click(function() {

		if ($('#block-bootstrap-sass-account-menu').hasClass("hidden")) {
			$('#block-bootstrap-sass-account-menu').removeClass("hidden").addClass("visible");

			} else {

			$('#block-bootstrap-sass-account-menu').removeClass("visible").addClass("hidden");
			}
		});
    };
  };

}(jQuery));
