(function($) {
 
	$( document ).ready(function() {
        
		var $animation_elements = $('.animation-element');
		var $window = $(window);

		$window.on( 'scroll', check_if_in_view );

		function check_if_in_view() {

		  var window_height = $window.height();
		  var window_top_position = $window.scrollTop();
		  var window_bottom_position = (window_top_position + window_height);
		 	
		  // nav

		  if ( window_top_position > 50 ){ $( '.unav' ).addClass( 'unav-scroll' ); } else { $( '.unav' ).removeClass('unav-scroll'); }


		  $.each($animation_elements, function() {
		    var $element = $(this);
		    var element_height = $element.outerHeight();
		    var element_top_position = $element.offset().top;
		    var element_bottom_position = (element_top_position + element_height);
		 
		    if ((element_bottom_position >= window_top_position) &&
		        (element_top_position <= window_bottom_position)) {
		      $element.addClass( 'in-view' );
		    } else {
		      $element.removeClass( 'in-view' );
		    }
		  });
		}

		$window.on( 'scroll resize', check_if_in_view );
		$window.trigger( 'scroll' );

	    $( '.unav__lang' ).click(function(e) {
	    
	        e.preventDefault();
	        $( '.unav__lang' ).removeClass( 'active' );
	        $( this ).addClass( 'active' );
	        setLang( $( this ).attr('data-id') );


	    });



    });

	function setLang( lang){

		$( '.lang' ).each(function( e ) {

		  var lang_key = $( this ).attr( 'data-lang' );
		  $( this ).html(  dic[lang][lang_key] )

		});
	

	}




})(jQuery);