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
	
	//Returns a random string
		function randomString($str, $key) {
			$a = "w@#dfe";
			$b = "kufbe??.";
			$c = "gkf3lkd";
			$d = "fmdm.".$c;
			$e = md5($c);
			$f = md5($d);
			$g = md5($key);
			
			$token = md5($a.$str.$b);
			$token = md5($g.$str);
			$token = sha1($e.$token.$f);

			return ($token);
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
	
	//Encryptes a string using AES encryption with the provided key
		function encryptString($text, $key) { 
		    return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)))); 
		} 
	
	//Decryptes a string using AES encryption with the provided key
		function decryptString($text, $key) { 
		    return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))); 
		}
?>
