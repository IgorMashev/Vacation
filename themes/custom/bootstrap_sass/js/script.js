(function ($) {
  // 'use strict';

  Drupal.behaviors.mnu = {
    attach: function(context, settings) {
   	$('#block-bootstrap-sass-account-menu').addClass("hidden");
		$('#block-picture').click(function() {

		if ($('#block-bootstrap-sass-account-menu').hasClass("hidden")) {
			$('#block-bootstrap-sass-account-menu').removeClass("hidden").addClass("visible");
			console.log(1)
			} else if ($('#block-bootstrap-sass-account-menu').hasClass("visible")) {
				console.log(2)

			$('#block-bootstrap-sass-account-menu').removeClass("visible").addClass("hidden");
			}
		});
 

     //    $('#block-picture').click(function() {
     //    	$('#block-bootstrap-sass-account-menu').toggle();
    	// });


        		


        	// if ($('#block-bootstrap-sass-account-menu').attr('style','display: block;')) {  		
        	// 		$('html').click(function() {
        	// 			console.log('s')
        	// 			$('#block-bootstrap-sass-account-menu').attr('style','display: none;');
        	// 		});
        	// } 







			
    }
  };

}(jQuery));
