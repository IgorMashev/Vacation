(function ($) {
  
    Drupal.behaviors.daysCounter = {
        attach: function(context, settings) {
          var $webForm = $('.webform-submission-request-form');
          var $startDate = $('input[data-drupal-selector="edit-from-date"]', $webForm);
          var $endDate = $('input[data-drupal-selector="edit-to-date"]', $webForm);
          var $daysCount = $('input[data-drupal-selector="edit-order"]');

          var startDate = null;
          var endDate = null;

          $($startDate).once().change(function () {
            startDate = $(this).val();

            if (startDate && endDate) {
              $daysCount.val(countDays(startDate, endDate));
            }

          });

          $($endDate).once().change(function () {
            endDate = $(this).val();
            if (startDate && endDate) {
              $daysCount.val(countDays(startDate, endDate));
            }
          });

          function countDays(start, end) {
            var startDate = convertDate(start);
            var endDate = convertDate(end);
            var seconds = endDate - startDate + 86400000;

            return seconds/86400000;
          }

          function convertDate(date) {
            var dateArray = date.split("-");
            var converted = dateArray[0]+"/"+dateArray[1]+"/"+dateArray[2];
            var timestamp = new Date(converted);

            return timestamp.getTime();
          }
        }
    };

  }(jQuery));