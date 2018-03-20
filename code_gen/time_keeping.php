<?php
	/**
	 * SwinAnime x STARS, Timekeeping Class, Used to access various clocks required for the formation of the club's website.
	 * @version v0.1.2
	 * @author J.P. Galovic
	 * @date MAR18
	 */
	class TimeKeeping {		
		/**
		 * Gets Current Time of Webserver.
		 * @return Current Time
		 * @author J.P.Galovic
		 * @date 21/03/2018
		 */
		public static function now() {
			date_default_timezone_set('Australia/ATC');
			return date('Y-m-d H:i:s', time());
		}
		
		/**
		 * Gets Current Time Delayed by 2 Hours.
		 * @return Current Time Delayed by 2 Hours.
		 * @author J.P. Galovic
		 * @date 21/03/2018
		 */
		public static function delay() {
			date_default_timezone_set('Australia/ATC');
			return date('Y-m-d H:i:s', strtotime('-2 hours', time()));
		}
	}
?>