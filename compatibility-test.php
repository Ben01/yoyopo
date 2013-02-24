<?php if ( yyp_language_is_myanmar() ) { ?>
	<div id='myUniTest' style='display: none;'>
	<span class='myUniTest' id='myTestAWidth1'>က္က</span>
	<span class='myUniTest' id='myTestAWidth2'>ကက</span>
	</div>
	<script type='text/javascript'>
		function yyp_is_myanmar() {
			var myAW1 = document.getElementById('myTestAWidth1');
			var myAW2 = document.getElementById('myTestAWidth2');

			if (myAW1 && myAW2) {
				var myAW1Width = myAW1.offsetWidth;
				var myAW2Width = myAW2.offsetWidth;
				if (myAW1Width == undefined) myAW1Width = myAW1.width;
				if (myAW2Width == undefined) myAW2Width = myAW2.width;

				if (myAW1Width >= 0.75 * myAW2Width || myAW1Width == undefined || myAW2Width == undefined) {
					return false;
				}
				return true;

			} else {
				return false;
			}
		};

	function yyp_show( element ) {
		if (!document.getElementById || element == null)
			return;
		element.style.display="block";
	};

	function yyp_hide( element ) {
		if (!document.getElementById || element == null)
			return;
		element.style.display="none";
	};

	function yyp_main() {
		
	};

	setTimeout(function(){yyp_main()}, 100);

	</script>
<?php } // end if ?>
