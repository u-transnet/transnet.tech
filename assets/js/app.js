(function($) {
 
	$( document ).ready(function() {

		var lang = localStorage.getItem('lang');

		if(!lang){
		   localStorage.setItem('lang', 'ru');
		} else {
			setLang(lang);
		}

		setInterval(getBlocks, 3000);

		$( 'img' ).each(function() {
			var data_src = $(this).attr('data-src');
		  if( data_src ){
		  	$(this).attr( 'src', data_src);
		  }
		});
 

	    $( '.scroll-to-top' ).click(function(e) {

	        e.preventDefault();
	        $( 'html, body' ).animate({scrollTop: '0px'}, 700);

	    });


	    var n = $( '.node__adv-li' ).length	;

	    for (var i = 1; i <= n; i++) {
	    	$( ".node__progress-list" ).append( '<li class="node__progress-item" data-id="' + i + '">&nbsp;</li>' );
	    }

	    var node_item_width = node_item_width = 100 / n;

	    //var node_width = Math.ceil(n * node_item_width) + 'px';
	    $( ".node__adv-list" ).css('width', 20 * n + '%');
	    $( ".node__adv-li" ).css('width', node_item_width + '%');
	    $( ".node__progress-item" ).css('width', node_item_width + '%');

	    $( '#adv3').addClass('node__adv-active');
	    $( '.node__data-li[data-id=3]').show();
	    $( '.node__progress-item[data-id=3]').addClass('node__progress-active');

	    $( '.node__adv-li' ).click(function(e) {

	    	e.preventDefault();
	    	var shift = 0;
	    	id = this.id;
	    	id = parseInt( id.replace('adv', '') );

	    	if( id > 3){ shift = id - 3; }

	    	if( id > n - 2 ){ 
	    		shift = n - id - 3 ;
	    		var left = $( ".node__adv-list" ).css('left');
	    		left = parseInt( left.replace('px', '') );

	    		if( left < ( n - 2 ) * 20 ){
	    			$( ".node__adv-list" ).css('left', '-' + 20 * (n - 5) + '%');
	    		}

	    	}

	    	$( '.node__adv-li' ).removeClass('node__adv-active');
	    	$( '.node__data-li').hide();
	    	$( '.node__progress-item').removeClass('node__progress-active');

	    	$( '#' + this.id ).addClass('node__adv-active');
	        $( '.node__progress-item[data-id=' + id + ']').addClass('node__progress-active');
	        $( '.node__data-li[data-id=' + id + ']').show();

	    	$( ".node__adv-list" ).css('left', '-' + 20 * shift + '%');
	    	
	    });

	    $( '.node__progress-item' ).click(function(e) {

	    	id = $(this).attr('data-id');
	    	$( '#adv' + id ).trigger('click');
	  
	    
	    });

	    $( '.node__adv-next' ).click(function(e) {

	    	id = $( '.node__adv-active' ).attr('id');
	    	id = parseInt( id.replace('adv', '') );
	    	
	    	if(id < n){ id = id + 1; $( '#adv' + id ).trigger('click'); }
	  
	    });

	    $( '.node__adv-prev' ).click(function(e) {

	    	id = $( '.node__adv-active' ).attr('id');
	    	id = parseInt( id.replace('adv', '') );
	    	
	    	if(id > 1){ id = id - 1; $( '#adv' + id ).trigger('click'); }
	  
	    });

		$( '.videoplayer' ).click(function(e) {

	    	$(this).fadeOut();
	  
	    });

		$( '.video__play' ).click(function(e) {

			var code = $(this ).data('code');

	    	$( '.videoplayer' ).fadeIn();
	    	$( '.videoplayer__content' ).html('<iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/' + code + '" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>');

	  
	    });

		$( '.arrow' ).click(function(e) {

			var anchor = $(this ).data('anchor');
			var pos = $( '.' + anchor ).offset();
			 $( 'html, body' ).animate({scrollTop: pos.top - 100 + 'px'}, 700);
	  
	    });

	    
	    
	    

	    window.onscroll = function() {
	      
	      var pageY = window.pageYOffset || document.documentElement.scrollTop;

	      if( pageY > 50 && $( window ).width() > 414){
	        $( '.scroll-to-top' ).fadeIn(500);
	      } else {
	        $( '.scroll-to-top' ).fadeOut(500);
	      }

	        
	    };

        var body_position = $( 'body' ).css('top');
		var $animation_elements = $( '.animation-element' );
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
	        $( '.unav__lang-shorten' ).html( $( this ).attr('data-shorten')  );
	        $( '.unav__lang-full' ).html(  $( this ).html()  );

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

		localStorage.setItem('lang', lang);

		$( '.inter' ).fadeOut();

		$( '.lang' ).each(function( e ) {

		  var lang_key = $( this ).attr( 'data-lang' );
		  $( this ).html(  dic[lang][lang_key] );
	      
		});

		
	
	}

	function getBlocks(){

		$.ajax({
		    crossDomain: true,
		    dataType: 'json',
		    url: 'http://transnet.tech:8000/get_current_block_num',
		    contentType: "application/json",
		    data: JSON.stringify( {
		    	is_testnet: true,
		    	owner_wif: '5JGu6HGDReuT8esoSznB43StL7ZqJKnEkn5vhDrz1QC8CUUcRFA' 
		    }),
            type: 'POST',
            success: function(data){

            	$('.main__blockchain-number').html( data['current_block_num'] );
            }
		});





	}




})(jQuery);