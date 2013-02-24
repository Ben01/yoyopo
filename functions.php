<?php

function yyp_the_displayed_title() {
	echo apply_filters( 'the_displayed_title', the_title( '', '', false ) );
}

function yyp_language_is_myanmar() {
	$langugeCodes = array( // All language codes that could potentially use the Myanmar script. Note: some frequently use other scripts to write as well (such as Thai, Latin, etc.)
		'my',	// ISO 639-1
		'bur',	//	ISO 639-2
		'mya',	//	ISO 639-2
		'mya',	//	ISO 639-3
		'obr',	//	Old Burmese
		'san',	//	Sanskrit as used in Burmese Buddhist literature
		'pli',	//	Pali as used in Burmese Buddhist literature
		'mnw', 'omx',	//	Mon
		'ksw', 'kar',	//	Sgaw Karen (Note: some Karen's in both Myanmar and Thailand (usually Catholics, I think) write their language using a Latin script. I have seen books, and movie subtitles in this script. Also, there are some in Thailand who use a subset of the Thai script.)
		'pwo',	// 	Western Pwo Karen
		'kjp',	//	Eastern Pwo Karen
		'blk',	//	Pa'o Karen
		'kyu', 'eky',	// Kayah
		'bwe',	//	Bwe Karen
		'kvy',	//	Yintale Karen (actually not a written language, but if they did write it, it'd probably be with the Myanmar script)
		'kxf',	//	Manumanaw (Manu)
		'csh',	//	Asho Chin
		'shn',	//	Shan (modern Shan script)
		'kht',	//	Khamti Shan
		'aio',	//	Aiton
		'phk',	//	Phake
		'rbb', 'pll', 'pce',	//	Rumai Palaung
		'jkp',	//	Paku Karen
		'jkm',	//	Mobwa Karen
		'wea',	//	Wewaw
	);
			
	if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
		$currentLanguageCode = ICL_LANGUAGE_CODE;
	} elseif ( function_exists('qtrans_getLanguage') )
		$currentLanguageCode = qtrans_getLanguage();
	else {
		$currentLanguageCode = 'kar';
	}

	if ( in_array($currentLanguageCode, $langugeCodes ) )
		return true;
	else
		return false;
}

?>
