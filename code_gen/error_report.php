<?php
	/**
	 * SwinAnime x STARS, Error Reporting Service
	 * @version v0.1.1
	 * @author J.P. Galovic
	 * @date APR18
	 */

	class ErrorReport
	{
		private $webkit_contact = 'web_error@swinanime.net';
		
		/**
		 * Send Error, emails error information to $webkit_contact
		 * @param $error_no, error number to report
		 * @param $error_text, adtional error text to display
		 * @author J.P.Galovic
		 * @date 01/04/2018
		 */
		public static function send_error($error_no, $error_text)
		{
			$error_time = TimeKeeping::now();
			
			mail($webkit_contact, 'Website Error - '.$error_time.' - '.$error_no, 'An error has occured on the swinanime website at '.$error_time.'. Error: '.$error_no.', '.$error_text, 'From: webmaster@swinanime.net'.'\n'.'Reply-To: webmaster@swinanime.net'.'\n'.'X-Mailer: PHP/'.phpversion());

			die('<p>SwinAnime x STARS apologies, an error has occured and will hopefully be fixed soon. In the meantime please visit our <a href="https://www.facebook.com/swinanime/">facebook page</a></p><p>Website Error - '.$error_time.' - '.$error_no.',</p><p>'.$error_text.'</p>');
		}
	}

?>