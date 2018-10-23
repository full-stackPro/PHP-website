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
require_once( "lib/dataUtils.php" );
require_once( "env.php" );

$db = new DB( DB_ADMIN_HOST, DB_ADMIN_DATABASE, DB_ADMIN_USER, DB_ADMIN_PASSWORD );

$user_id = 1;

$data = [
	"page" => "contacts",
	"contact_groups" => getContactGroups(),
	"transaction_types" => getTransactionTypes(),
	"pipeline_status_groups" => getPipelineStatusGroups(),
	"lead_source_types" => getLeadSourceTypes(),
];

$page = "contact_create";

$blade = new Blade( "views", "cache" );
echo $blade->make( $page, $data );