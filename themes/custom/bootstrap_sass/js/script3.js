(function ($) {
  'use strict';

  Drupal.behaviors.readonle = {
  	attach: function(context, settings) {
          $('#edit-order').attr("readonly","readonly");
  		    }
  }

}(jQuery));


