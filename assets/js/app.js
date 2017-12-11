(function($) {
 
	$( document ).ready(function() {

		setTimeout(getBlocks, 1000);

        var body_position = $('body').css('top');
		var $animation_elements = $('.animation-element');
		var $window = $(window);
		    


		$window.on( 'scroll', check_if_in_view );

		function check_if_in_view() {

		  var window_height = $window.height();
		  var window_top_position = $window.scrollTop();
		  var window_bottom_position = (window_top_position + window_height);
		 	
		  // nav

		  if ( window_top_position > 50 ){ 

		  	$( '.unav' ).addClass( 'unav-scroll' );


		  } else { 

		  	$( '.unav' ).removeClass('unav-scroll'); 
		  }


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
	    	$( '.sidebar' ).removeClass('active');
	        $( '.inter' ).fadeIn();

	    });

	    $( '.inter__x-icon' ).click(function(e) {
	    	e.preventDefault();
	        $( '.inter' ).fadeOut();

	    });

	    $( '.inter__lang' ).click(function(e) {
	    
	        e.preventDefault();
	        setLang( $( this ).attr('data-id') );
	        $( '.unav__cur-lang' ).html(  $( this ).html()  );

	    });

	    $( '.unav__button, .unav__button-mobile ' ).click(function(e) {
	    	e.preventDefault();
	        $( '.question' ).fadeIn();

	    });

	    $( '.ask__x-icon' ).click(function(e) {
	    	e.preventDefault();
	        $( '.question' ).fadeOut();

	    });


	    $( '.unav__toggler' ).click(function(e) {
	    	e.preventDefault();
	    	var $window = $(window);
	    	var window_top_position = $window.scrollTop();

	    	if ( $( this ).hasClass('open') ){

	    		$( this ).removeClass('open');
	    		$( 'body' ).removeClass('modal-one');
	    		$( '.sidebar' ).fadeOut(600);
	    		$( '.unav' ).css('top', '0');

	    	} else {

	    		$( this ).addClass('open');
	    		$( 'body' ).addClass('modal-one');
	    		$( '.unav' ).css('top', '-200px');
                $( '.sidebar' ).fadeIn(800);
	    	}

	    });

    });

	function setLang( lang ){

		$( '.lang' ).each(function( e ) {

		  var lang_key = $( this ).attr( 'data-lang' );
		  $( this ).html(  dic[lang][lang_key] );
	      $( '.inter' ).fadeOut();

		});
	

	}

	function getBlocks(){

		$.ajax({
		    crossDomain: true,
		    dataType: 'json',
		    url: 'http://188.166.90.74:8000/get_current_block_num',
		    contentType: "application/json",
		    data: JSON.stringify( {
		    	is_testnet: true,
		    	owner_wif: '5JGu6HGDReuT8esoSznB43StL7ZqJKnEkn5vhDrz1QC8CUUcRFA' 
		    }),
		      headers: {
		         "Access-Control-Allow-Origin": "*",
		         "Access-Control-Allow-Methods": "*",
		         "Access-Control-Allow-Headers": "*"
		      },
            type: 'POST',
            success: function(data){

            	$('.main__blockchain-number').html( data['current_block_num'] );
            }
		});

/*
		var XHR = ("onload" in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;

		var xhr = new XHR();

		// (2) запрос на другой домен :)
		xhr.open('POST', 'http://188.166.90.74:8000/get_current_block_num', true);

		xhr.setRequestHeader('Content-Type', 'application/json')
		xhr.setRequestHeader('Access-Control-Allow-Origin', '*')

		xhr.onload = function() {
		  //alert( this.responseText );
		}

		xhr.onerror = function() {
		  //alert( 'Ошибка ' + this.status );
		}

		xhr.send();

*/

	}




})(jQuery);