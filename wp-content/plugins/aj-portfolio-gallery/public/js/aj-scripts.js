$ = jQuery.noConflict();

jQuery( document ).ready( function( $ ){

    var count = 2;
    if($('#aj-loadmore').length){
      var waypoint = new Waypoint({
          element: document.getElementById('aj-loadmore'),
          handler: function (direction) {
              if (direction == 'down') {
                  if (jQuery('.loading-done').length) {
                      aj_loadmore(count);
                      count++;
                  }
              }
          },
          offset: 'bottom-in-view'
      });
    }

});

function aj_loadmore(pageNumber){
  
  var attr = '';
  if($('.loading-done').data('p_in')){
    attr = $('.loading-done').data('p_in');
  }
  
  jQuery.ajax({
      url: ajAjax.ajaxurl,
      type: 'POST',
      data: 'action=aj_load_more&page_no=' + pageNumber + "&attr=" + attr,      
      dataType: 'json',
      success: function (data) {
          if (data.last == true) {
              jQuery('.aj-content #aj-loadmore').removeClass('loading-done');
              jQuery('.aj-content #aj-loadmore').remove();
          }
          jQuery.when(jQuery(".aj-content .aj-row").append(data.html)).done(function () {
              Waypoint.refreshAll();
              jQuery(window).scroll();
          });
      }
  });
  
}