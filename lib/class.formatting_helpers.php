<?php

class FormattingHelpers {
	
	static function markdownify($string) {
		require_once(EXTENSIONS . '/xmlimporter/lib/markdownify/markdownify_extra.php');
		$markdownify = new Markdownify(true, MDFY_BODYWIDTH, false);
		
		$markdown = $markdownify->parseString($string);
		$markdown = htmlspecialchars($markdown, ENT_NOQUOTES, 'UTF-8');		
		return $markdown;
	}
	
}

?>