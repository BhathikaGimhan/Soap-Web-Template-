( function( $ ) {
	'use strict';

	/**
	 * Remove novalidate attr from comment's form
	 *
	 */
	function novalidate_out() {
		$("#contactform").removeAttr('novalidate');
	}
	novalidate_out();

	/**
	 * Function for likes in post's pages
	 *
	 */
	function likes_function() {

		$( '.likes' ).on( 'click', function(e) {
			e.preventDefault();

			if ( $(this).hasClass('active') ) {
				var info = {
					id_p: $(this).attr('data-postid'),
					action: 'likes_ajax'
				};

				$.ajax({
					url: get.ajaxurl,
					type: 'POST',
					dataType: 'json',
					data: info,
					success: function (data) {
						$(".likes .count").text( data.result_count );
						console.log( 'data', data );
					},
					error: function (data) {
						console.log('error');
						console.log(data);
					},
				})
			}

		})

	}

	likes_function();

}( jQuery ) );
