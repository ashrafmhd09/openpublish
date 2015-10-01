(function($) {
  Drupal.behaviors.ajax_block = {
    attach: function(settings) {
      // $.get('/ajax/404', function(r) {
      //   console.log(r);
      //   console.log(settings);
      // });
      var data = {};
      $.ajax({
        url: '/ajax/404',
        type: 'GET',
        success: function(r) {
          data = r.views.ajaxViews[0].view_content;
          // console.log(data);
          $('.ajax-block').html(data);
        },
        type: 'json'
      });
    }
  }
}(jQuery));