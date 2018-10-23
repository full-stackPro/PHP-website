<?php
session_start();
ini_set( "display_errors", 1 );
ini_set( "display_startup_errors", 1 );
error_reporting( E_ALL );

use Jenssegers\Blade\Blade;

require_once( "vendor/autoload.php" );
require_once( "lib/db.php" );
require_once( "lib/dataUtils.php" );
require_once( "env.php" );

$db = new DB( DB_ADMIN_HOST, DB_ADMIN_DATABASE, DB_ADMIN_USER, DB_ADMIN_PASSWORD );

if (isset($_POST['login'])){
	extract($_POST);
	$check = $db->checkUser($email);
	if ($check['count'] == 1){
		$row = $check['row'];
		if (password_verify($password, $row['password'])){
			$_SESSION['user'] = $row;
			header("Location: index.php");
		}else{
			$error = 1;
			$error_msg = "Wrong Password";
		}
	}else{
		$error = 1;
		$error_msg = "Username Doesn't exist";
	}
	
	exit; 
}


$data = [
	"page" => "login"
];

$page = "login";

$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );