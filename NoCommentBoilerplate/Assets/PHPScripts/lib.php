<?php
	/*
		Made by: Dom Chester
		Site: 
	*/

	function connectMySQL($dbHost = 'localhost', $dbUser = 'root', $dbPass = '', $dbDatabase = 'Main') {
		mysql_connect($dbHost, $dbUser, $dbPass);
		mysql_select_db($dbDatabase);
	}

	function sanitizeString($string) {
		$string = strip_tags($string);
		$string = htmlentities($string);
		$string = stripslashes($string);
		return $string;
	}

	function sanitizeMySQL($sql) {
		$sql = mysql_real_escape_string($sql);
		$sql = sanitizeString($sql);
		return $sql;
	}

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
	
	function securePost($var) {
		return sanitizeMySQL($_POST[$var]);
	}
	
	function secureGet($var) {
		return sanitizeMySQL($_GET[$var]);
	}

	function encriptString($str, $key) {
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
	
	function truncateString($text, $length) {
		$length = abs((int)$length);
		if(strlen($text) > $length)
		{
			$text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
		}
		
		return($text);
	}
?>
