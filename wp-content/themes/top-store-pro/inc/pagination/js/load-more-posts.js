jQuery( document ).ready( function( $ ){
	// JS to submit ajax for load more button
	$(document).on('click', '#load-more-posts', function(e){
		$('.inifiniteLoader').show('fast');
		$('.load-more-posts-button').hide();
		var previouspaged = $( this ).attr( 'data-paged' );
		var currentpaged = parseInt( previouspaged )+ 1;
		jQuery.ajax({
			type: 'post',
			url: loadmore.wp_ajax_url,
			data: {
				action : 'top_store_pro_load_more_posts',
				paged: currentpaged,
				context: $(this).attr( 'data-context' ),
				query: load_more_data.query,
				nonce: $( '#load-more-posts-nonce' ).val(),
			},
			dataType: 'html'
		})
		.done( function( response ){
			if ( response ){
				$( '.primary-content-wrap #main' ).append( response );
				if ( currentpaged == parseInt( $( '#load-more-posts' ).attr( 'data-max-pages' ) ) ){
					$( '#load-more-posts' ).hide();
					$( '#load-more-posts-error' ).css('display','block');
				} else {
					$( '#load-more-posts' ).attr( 'data-paged', currentpaged );
					$('.load-more-posts-button').show();
				}		
			} else {
				$( '#load-more-posts' ).hide();
				$( '#load-more-posts-error' ).css('display','block');
			}
			$('.inifiniteLoader').hide('1000');
		} );
		e.preventDefault();
	});
});
