<?php if ( yyp_language_is_myanmar() ) { ?>
	<div id='kswUniTest' style='display: none;'>
		<span class='kswUniTest' id='kswTestWidth1'>က္က</span>
		<span class='kswUniTest' id='kswTestWidth2'>ကက</span>
	</div>
	<script type='text/javascript'>
		function yyp_supports_karen() {
			if ( !yyp_show( document.getElementById( 'kswUniTest' ) ) )
				return false;
			var kswW1 = document.getElementById( 'kswTestWidth1' );
			var kswW2 = document.getElementById( 'kswTestWidth2' );

			if ( kswW1 && kswW2 ) {
				var kswW1Width = kswW1.offsetWidth;
				var kswW2Width = kswW2.offsetWidth;
				if ( kswW1Width == undefined ) kswW1Width = kswW1.width;
				if ( kswW2Width == undefined ) kswW2Width = kswW2.width;

				if ( kswW1Width >= 0.75 * kswW2Width ||
					kswW1Width == undefined || kswW2Width == undefined ) {
					return false;
				}
				return true;

			} else {
				return false;
			}
			yyp_hide( document.getElementById( 'kswUniTest' ) );
		};

	function yyp_show( element ) {
		if ( !document.getElementById || element == null )
			return false;
		element.style.display="block";
		return true;
	};

	function yyp_hide( element ) {
		if ( !document.getElementById || element == null )
			return;
		element.style.display="none";
	};

	var startTime = new Date().getTime();
	function yyp_main(dd) {
		var currentTime = new Date().getTime();
		if ( yyp_supports_karen() ) {
			return;
		} else if ( currentTime - startTime < 500 ) {
			setTimeout( function(){ yyp_main() }, 100 );
			return;
		} else {
			yyp_show( document.getElementById('topUnsupportedMessage') );
		}
	};
	yyp_main();
	</script>
<?php } // end if ?>
