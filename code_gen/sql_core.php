<?php
	/**
	 * SwinAnime x STARS, SQL Core Connection Class, Used for connecting and running Queries on the SQL Server
	 * @version v0.1.3
	 * @author J.P. Galovic
	 * @date APR18
	 */

	class SQL
	{
		private $host = 'localhost';
		private $user = 'swinan01';
		private $pass = 'EgLcxZ8uHT';
		
		/**
		 * Connect, Opens connection to Database on $db variable
		 * @param $db, refence to variable to open connection on
		 * @author J.P. Galovic
		 * @date 01/04/2018
		 */
		private function connect(&$db)
		{
			$db = new MySQLi($host, $user, $pass, 'swinan01_smart_web');
			if($db->connect_errno > 0)
				ErrorReport::send_error($db->connect_errno+1000,'Unable to connect to Website Database, ['.$DB->connect_errno.', '.$DB->connect_error.']');
		}
		
		/**
		 * Close, Shut down connection to Database on $db variable
		 * @param $db, refence to variable to close connection on
		 * @author J.P. Galovic
		 * @date 01/04/2018
		 */
		private function close(&$db)
		{
			$db->close();
		}
		
		/**
		 * Query, Runs given query Database
		 * @param $query, string query to run
		 * @return $result, result of query
		 * @author J.P. Galovic
		 * @date 01/04/2018
		 */
		public static function query($query)
		{
			connect($db);
			if(!($result->query($query)))
				ErrorReport::send_error($db->errno+1000, $db->error.' '.$query);
			close($db);
			
			return($result);
		}
		
	}

?>