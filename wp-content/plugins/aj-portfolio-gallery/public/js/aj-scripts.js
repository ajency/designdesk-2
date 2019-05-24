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
		
	var url_string = window.location.href; //window.location.href
	var url = new URL(url_string);
	var albumid = url.searchParams.get("album");

		var gal_id = albumid;
		
		if(gal_id){
				jQuery.ajax({
						url: ajAjax.ajaxurl,
						type: 'POST',
						data: 'action=get_gallery_album&pid=' + gal_id,      
						dataType: 'json',
						success: function (data) {
							if(data){
								$(this).lightGallery({
									dynamic: true,
									dynamicEl: data.images,
								});
							}
						}
				});
		} 

		$(document).on('click', '.prettyphoto-btn', function(e){
			e.preventDefault();
			var gal_id = $(this).data('galid');
			
			if(gal_id){
					jQuery.ajax({
							url: ajAjax.ajaxurl,
							type: 'POST',
							data: 'action=get_gallery_album&pid=' + gal_id,      
							dataType: 'json',
							success: function (data) {
								if(data){
									$(this).lightGallery({
										dynamic: true,
										dynamicEl: data.images,
									});
									setTimeout(function(){
										var newurl = updateQueryStringParameter(window.location.href, 'album', gal_id);
										window.location.href = newurl;
									},250);				
								}
							}
					});
			}
			
		});

	});


function aj_loadmore(pageNumber){
  
  var attr = '';
  var lightbox = false;
  if($('.loading-done').data('p_in')){
    attr = $('.loading-done').data('p_in');
  }
  if($('.loading-done').data('lightbox')){
	lightbox = true
  }
  
  jQuery.ajax({
      url: ajAjax.ajaxurl,
      type: 'POST',
      data: 'action=aj_load_more&page_no=' + pageNumber + "&attr=" + attr + "&lightbox="+ lightbox,      
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

function updateQueryStringParameter(uri, key, value) {
	var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
	var separator = uri.indexOf('?') !== -1 ? "&" : "?";
	if (uri.match(re)) {
		return uri.replace(re, '$1' + key + "=" + value + '$2');
	}
	else {
		return uri + separator + key + "=" + value;
	}
}