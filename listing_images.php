<?php
session_start();
if (!isset($_SESSION['user'])){
	header("Location: login.php");
}
ini_set( "display_errors", 1 );
ini_set( "display_startup_errors", 1 );
error_reporting( E_ALL );

use Jenssegers\Blade\Blade;

require_once( "vendor/autoload.php" );
require_once( "lib/db.php" );
require_once( "env.php" );

$db = new DB( DB_HOST, DB_DATABASE, DB_USER, DB_PASSWORD );

$data = [
	"page" => "photos",
    "listing" => $db->getPropertyDataById( $_GET["id"] ),
];

$page = "listing_images";


$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );