<?php
function dbconn(){
$host = "localhost";
$port = "3306";
$dbname = "bbs";
$charset = "utf8";
$username = "root";
$db_pw = "php504";
$dsn = "mysql:host=$host; port=$port; dbname=$dbname;
charset=$charset";
$pdo = new PDO($dsn,$username,$db_pw);
return $pdo;
try{
	$db_options = [
		PDO::ATTR_EMULATE_PREPARES 		=> false
		,PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION
		,PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC
	];

	$conn =new PDO($db_dns,$db_user,$db_pw,$db_options);
	return true;
} catch (Exception $e) {
	$conn = null;
	return false;
}
}


	
	


?>