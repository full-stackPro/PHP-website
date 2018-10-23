<?php
ini_set( "display_errors", 1 );
ini_set( "display_startup_errors", 1 );
error_reporting( E_ALL );

require_once( "env.php" );
require_once( "lib/db.php" );

$db = new DB( DB_HOST, DB_DATABASE, DB_USER, DB_PASSWORD );

echo "<pre>";
print_r( $db->getPropertyFromUrl( "test.com" ) );
echo "</pre>";

/*
require_once( "vendor/autoload.php" );

use Jenssegers\Blade\Blade;

$blade = new Blade( "views", "cache" );

echo $blade->make( "test", [ "name" => "John Doe" ] );
*/