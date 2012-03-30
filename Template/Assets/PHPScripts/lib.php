<?php
	/*
		Made by: Dom Chester
		Site: 
	*/

	//Function to connect to a MySQL Database
		function connectMySQL($dbHost = 'localhost', $dbUser = 'root', $dbPass = '', $dbDatabase = 'Main') {
			mysql_connect($dbHost, $dbUser, $dbPass);
			mysql_select_db($dbDatabase);
		}
	
	// Function for string sanitization
		function sanitizeString($string) {
			$string = strip_tags($string);
			$string = htmlentities($string);
			$string = stripslashes($string);
			return $string;
		}
	
	// Function for MySQL sanitization
		function sanitizeMySQL($sql) {
			$sql = mysql_real_escape_string($sql);
			$sql = sanitizeString($sql);
			return $sql;
		}
	
	// Function to get the current URL
		function getPageURL() {
			$pageURL = 'http';
 			$pageURL .= "://";
	 		if ($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} else {
		  		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 		}
			return $pageURL;
		}
		
	//A secure $_POST
		function securePost($var) {
			return sanitizeMySQL($_POST[$var]);
		}
		
	//A secure $_GET
		function secureGet($var) {
			return sanitizeMySQL($_GET[$var]);
		}
		
	//Truncates a string to no more than the specified length breaking only at a whitespace character.  Adds ellipses
		function truncateString($text, $length) {
			$length = abs((int)$length);
			if(strlen($text) > $length)
			{
				$text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
			}
			
			return($text);
		}
?>
