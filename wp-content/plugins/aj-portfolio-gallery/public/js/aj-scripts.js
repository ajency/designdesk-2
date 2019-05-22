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
    
      
  // initialize prettyphoto
  $.fn.prettyPhoto();
  // $.fn.prettyPhoto({
  //   // animation_speed: "fast",
	// 	// 		ajaxcallback: function() {},
	// 	// 		slideshow: 5e3,
	// 	// 		autoplay_slideshow: false,
	// 	// 		opacity: .8,
	// 	// 		show_title: true,
	// 	// 		allow_resize: true,
	// 	// 		allow_expand: true,
	// 	// 		default_width: 900,
	// 	// 		default_height: 344,
	// 	// 		counter_separator_label: "/",
	// 	// 		theme: "pp_default",
	// 	// 		horizontal_padding: 20,
	// 	// 		hideflash: false,
	// 	// 		wmode: "opaque",
	// 	// 		autoplay: true,
	// 	// 		modal: false,
	// 	// 		deeplinking: false,
	// 	// 		overlay_gallery: true,
	// 	// 		overlay_gallery_max: 30,
	// 	// 		keyboard_shortcuts: true,
	// 	// 		changepicturecallback: function() {
	// 	// 			$(window).trigger('scroll');
	// 	// 		},
	// 	// 		callback: function() {
	// 	// 			scr = document.body.scrollTop;
	// 	// 			$('body').removeClass('pp-is-open');
	// 	// 			window.location.hash = '';
	// 	// 			document.body.scrollTop = scr;
	// 	// 		},
	// 	// 		ie6_fallback: true,
	// 			markup: '<div class="pp_pic_holder withtextholders">\
	// 						<div class="ppt">&nbsp;</div> \
	// 						<div class="pp_top"> \
	// 							<div class="pp_left"></div> \
	// 							<div class="pp_middle"></div> \
	// 							<div class="pp_right"></div> \
	// 						</div> \
	// 						<div class="pp_content_container"> \
	// 							<a class="pp_close" href="#"><i class="hb-moon-close-2"></i></a> \
	// 							<div class="pp_left"> \
	// 								<div class="pp_left_data"> \
	// 									<h4 class="pp_cutom_title maintitle"></h4>\
	// 									<div class="thetop">\
	// 									</div>\
	// 									<h5 class="pp_custom_sub_title">Our Task</h5> \
	// 									<div class="ourtaskcontent con"></div>\
	// 									<h5 class="pp_custom_sub_title">How we accomplished it</h5>\
	// 									<div class="howwedidcontent con"></div>\
	// 								</div> \
	// 								<div class="pp_right"> \
	// 									<div class="pp_content"> \
	// 										<div class="pp_loaderIcon"></div> \
	// 										<div class="pp_fade"> \
	// 											<div class="pp_hoverContainer"> \
	// 												<a class="pp_next" href="#"><i class="fa fa-angle-right"></i></a> \
	// 												<a class="pp_previous" href="#"><i class="fa fa-angle-left"></i></a> \
	// 											</div> \
	// 											<div id="pp_full_res"></div> \
	// 											<div class="pp_details" style="display: none;"> \
	// 												<div class="pp_nav"> \
	// 													<a href="#" class="pp_arrow_previous"><i class="fa fa-angle-left"></i></a> \
	// 													<p class="currentTextHolder">0/0</p> \
	// 													<a href="#" class="pp_arrow_next"><i class="fa fa-angle-right"></i></a> \
	// 												</div> \
	// 												<p class="pp_description"></p> \
	// 												{pp_social} \
	// 												<a class="pp_close" href="#"><i class="hb-moon-close-2"></i></a> \
	// 											</div> \
	// 										</div> \
	// 									</div> \
	// 								</div> \
	// 								</div> \
	// 							</div> \
	// 							<div class="pp_bottom"> \
	// 								<div class="pp_left"></div> \
	// 								<div class="pp_middle"></div> \
	// 								<div class="pp_right"></div> \
	// 							</div> \
	// 							<div class="pp_overlay"></div>\
	// 						</div>',
	// 			gallery_markup: '<div class="pp_gallery">\
	// 								<a href="#" class="pp_arrow_previous">Previous</a>\
	// 								<div>\
	// 									<ul>\
	// 										{gallery}\
	// 									</ul>\
	// 								</div>\
	// 								<a href="#" class="pp_arrow_next">Next</a>\
	// 							</div>',
	// 			image_markup: '<div class="use-as-bg" style="background-image: url({path})"><img id="fullResImage" src="{path}" /></div>',
	// 			flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
	// 			quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
	// 			iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
	// 			inline_markup: '<div class="pp_inline">{content}</div>',
	// 			custom_markup: "",
	// 			social_tools: '<div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="//www.facebook.com/plugins/like.php?locale=en_US&href={location_href}&layout=button_count&show_faces=true&width=500&action=like&font&colorscheme=light&height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div>'
	// });
	
	var url_string = window.location.href; //window.location.href
	var url = new URL(url_string);
	var c = url.searchParams.get("album");

		var gal_id = c;
		
		if(gal_id){
				jQuery.ajax({
						url: ajAjax.ajaxurl,
						type: 'POST',
						data: 'action=get_gallery_album&pid=' + gal_id,      
						dataType: 'json',
						success: function (data) {
							console.log(data);
							if(data){
								$.prettyPhoto.open(data.images,data.title,data.shortdesc);
							}
						}
				});
		}   
	});
  
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
              console.log(data);
              if(data){
                $.prettyPhoto.open(data.images,data.title,data.shortdesc);
              }
            }
        });
    }
    
  });

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