<?php
	/**
	 * SwinAnime x STARS, Process Class, Used for processing purposes
	 * @version v0.1.1
	 * @author J.P. Galovic
	 * @date MAR18
	 */
	define('URL_VERSION', '0.1.1');

	class Process {
		/**
		 * AutoVersion URL, Applies Version Number to a given URL, Used to force update of cashe
		 * @param $url, URL to apply version to
		 * @return $url with added version number, 'http://swinanime.net/index.php?v=0.1.1
		 * @author J.P. Galovic
		 * @date 21/03/2018
		 */
		public static function auto_version($url) {
			return($url.'?v='.URL_VERSION);
		}
	}
?>