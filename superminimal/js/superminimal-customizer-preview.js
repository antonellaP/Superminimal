(function( $ ) {
    "use strict";
    
    wp.customize( 'superminimal_layout', function( value ) {
        value.bind( function( to ) {
            $( '#content' ).removeClass().addClass( to + ' clearfix' );
        } );
    });
    
 
})( jQuery );