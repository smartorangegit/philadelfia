var w = $(window).width();
if (w > 768) {
  (function() {
    function init() {
      var speed = 1300,
      easing = mina.backout;
			[].slice.call ( document.querySelectorAll( '#grid .grid_link' ) ).forEach( function( el ) {
        var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
        pathConfig = {
          from : path.attr( 'd' ),
          to : el.getAttribute( 'data-path-hover' )
        };
        el.addEventListener( 'mouseover', function() {
          path.animate( { 'path' : pathConfig.to }, speed, easing );
        } );
        el.addEventListener( 'mouseout', function() {
          path.animate( { 'path' : pathConfig.from }, speed, easing );
        } );
      } );
    }
    init();
  })();

} else {
  (function() {
    function init() {
      var speed = 1300,
      easing = mina.backout;
			[].slice.call ( document.querySelectorAll( '#grid .grid_link' ) ).forEach( function( el ) {
        var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
        pathConfig = {
          from : path.attr( 'd' ),
          to : el.getAttribute( 'data-path-hover' )
        };
        el.addEventListener( 'touchstart', function() {
          path.animate( { 'path' : pathConfig.to }, speed, easing );
        } );
        el.addEventListener( 'touchend', function() {
          path.animate( { 'path' : pathConfig.from }, speed, easing );
        } );
      } );
    }
    init();
  })();
};
